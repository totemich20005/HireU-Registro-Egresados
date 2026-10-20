
<?php
require_once "conexion.php";

header("Content-Type: text/plain; charset=utf-8");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    exit("ERROR: Se esperaba una petición POST. Método recibido: "
        . $_SERVER["REQUEST_METHOD"]);
}

$nombre = trim($_POST["Nombre"] ?? "");
$apellido = trim($_POST["Apellido"] ?? "");
$correo = trim($_POST["CorreoInstitucional"] ?? "");
$programa = trim($_POST["ProgramaAcademico"] ?? "");
$anioTexto = trim($_POST["AnioGraduacion"] ?? "");
$perfil = trim($_POST["PerfilProfesional"] ?? "");

if ($nombre === "" || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    responderError("El nombre y el correo válido son obligatorios.");
}

$anio = null;

if ($anioTexto !== "") {
    $anio = filter_var($anioTexto, FILTER_VALIDATE_INT);

    if ($anio === false || $anio < 1901 || $anio > 2155) {
        responderError("El año de graduación no es válido.");
    }
}

$foto = null;
$rutaFoto = null;

if (isset($_FILES["FotoPerfil"]) &&
    $_FILES["FotoPerfil"]["error"] !== UPLOAD_ERR_NO_FILE) {

    if ($_FILES["FotoPerfil"]["error"] !== UPLOAD_ERR_OK) {
        responderError("No se pudo recibir la fotografía.");
    }

    if ($_FILES["FotoPerfil"]["size"] > 2 * 1024 * 1024) {
        responderError("La fotografía no puede superar los 2 MB.");
    }

    $temporal = $_FILES["FotoPerfil"]["tmp_name"];
    $tipo = (new finfo(FILEINFO_MIME_TYPE))->file($temporal);

    $permitidos = [
        "image/jpeg" => "jpg",
        "image/png"  => "png",
        "image/webp" => "webp"
    ];

    if (!isset($permitidos[$tipo])) {
        responderError("Solo se permiten fotos JPG, PNG o WEBP.");
    }

    $carpeta = __DIR__ . "/uploads";

    if (!is_dir($carpeta) &&
        !mkdir($carpeta, 0755, true)) {
        responderError("No se pudo crear la carpeta de fotografías.", 500);
    }

    $nombreFoto = bin2hex(random_bytes(16))
        . "." . $permitidos[$tipo];

    $destino = $carpeta . "/" . $nombreFoto;

    if (!move_uploaded_file($temporal, $destino)) {
        responderError("No se pudo guardar la fotografía.", 500);
    }

    $foto = "uploads/" . $nombreFoto;
    $rutaFoto = $destino;
}

$sql = "INSERT INTO Egresado
    (Nombre, Apellido, CorreoInstitucional,
     ProgramaAcademico, AnioGraduacion,
     FotoPerfil, PerfilProfesional)
    VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    if ($rutaFoto !== null) {
        @unlink($rutaFoto);
    }

    responderError("Error al preparar el registro.", 500);
}

$stmt->bind_param(
    "ssssiss",
    $nombre,
    $apellido,
    $correo,
    $programa,
    $anio,
    $foto,
    $perfil
);

try {
    if (!$stmt->execute()) {
        throw new Exception("No se pudo insertar el registro.");
    }

    echo "¡Registro exitoso! El egresado se guardó en HIRE-U.";

} catch (Throwable $e) {
    if ($rutaFoto !== null) {
        @unlink($rutaFoto);
    }

    error_log("ERROR HIRE-U: " . $e->getMessage());

    http_response_code(500);
    echo "ERROR REAL: " . $e->getMessage();
    exit;
}

finally {
    $stmt->close();
    $conn->close();
}
?>
