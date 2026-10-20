# 🎓 HIRE-U | Registro de Egresados

<p align="center">
  <img src="docs/img/hireu-banner.png" alt="HIRE-U - Registro de egresados" width="800">
</p>

<p align="center">
  <strong>Conectando el talento profesional con nuevas oportunidades.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

## 📌 Descripción del proyecto

**HIRE-U** es un proyecto de desarrollo de software orientado a la gestión y el registro de egresados universitarios. Su propósito es facilitar la recopilación de información académica y profesional para apoyar la construcción de una comunidad de egresados y, a futuro, conectarla con oportunidades laborales.

Este repositorio contiene el módulo de registro de egresados, desarrollado con HTML, CSS y JavaScript para la interfaz, PHP para el procesamiento de los datos y MySQL para su almacenamiento.

## 🎯 Objetivos

- Crear un formulario de registro sencillo y accesible.
- Registrar información personal, académica y profesional.
- Almacenar los datos en una base de datos MySQL.
- Permitir la carga de fotografías de perfil.
- Sentar las bases para futuras funcionalidades de la plataforma HIRE-U.

## ✨ Funcionalidades

- 📝 Registro de egresados mediante formulario web.
- 👤 Captura de nombre y apellido.
- 🎓 Registro del correo institucional, programa académico y año de graduación.
- 📄 Campo para describir el perfil profesional.
- 🖼️ Carga opcional de fotografía de perfil.
- 🔗 Envío de datos a un backend desarrollado en PHP.
- 🗄️ Almacenamiento de registros en la tabla `Egresado` de MySQL.
- ✅ Mensajes para informar el resultado del registro.

## 🖥️ Capturas de pantalla

### Formulario de registro

![Formulario de registro HIRE-U](docs/img/formulario-registro.png)

*Interfaz de registro de egresados.*

### Datos del formulario

![Campos del registro HIRE-U](docs/img/campos-registro.png)

*Información personal, académica y profesional que se solicita al usuario.*

### Registro exitoso

![Confirmación de registro HIRE-U](docs/img/registro-exitoso.png)

*Ejemplo de confirmación después de guardar un registro correctamente.*

> Para visualizar estas imágenes, guarda capturas reales de tu aplicación con los nombres indicados dentro de la carpeta `docs/img/`. Las imágenes deben corresponder a la versión actual del proyecto.

## 🛠️ Tecnologías utilizadas

| Tecnología | Uso |
|---|---|
| HTML5 | Estructura del formulario |
| CSS3 | Diseño y estilos visuales |
| JavaScript | Validación e interacción con el formulario |
| PHP | Recepción y procesamiento de los datos |
| MySQL | Almacenamiento de la información |
| XAMPP | Entorno local de desarrollo |
| Git y GitHub | Control de versiones y alojamiento del código |

## 📁 Estructura del proyecto

```text
Hireu/
├── index.html
├── conexion.php
├── guardar_egresado.php
├── uploads/
├── docs/
│   └── img/
│       ├── hireu-banner.png
│       ├── formulario-registro.png
│       ├── campos-registro.png
│       └── registro-exitoso.png
├── .gitignore
└── README.md
```

La estructura anterior es una referencia para organizar los archivos. Si tu proyecto tiene carpetas adicionales, conserva las que ya utiliza tu aplicación.

## ⚙️ Instalación y ejecución local

### 1. Requisitos previos

- Windows.
- XAMPP con Apache, PHP y MySQL.
- MySQL Workbench, opcional para administrar la base de datos.
- Un navegador web.

### 2. Clonar el repositorio

Abre una terminal y ejecuta:

```bash
git clone https://github.com/totemich20005/HireU-Registro-Egresados.git
```

### 3. Copiar el proyecto en XAMPP

Mueve o copia la carpeta del repositorio a:

```text
C:\xampp\htdocs\Hireu
```

Comprueba que `index.html`, `conexion.php` y `guardar_egresado.php` estén en la ubicación correcta.

### 4. Configurar la base de datos

1. Inicia Apache y MySQL desde XAMPP.
2. Abre MySQL Workbench o phpMyAdmin.
3. Crea o importa la base de datos `Hireu` utilizando el script SQL del proyecto, si está incluido.
4. Verifica que exista la tabla `Egresado` con las columnas utilizadas por el formulario.

### 5. Configurar la conexión

Edita `conexion.php` para utilizar las credenciales de tu instalación local de MySQL.

La configuración debe incluir:

- Servidor: `localhost`.
- Usuario: el usuario de MySQL configurado en tu equipo.
- Contraseña: la correspondiente a ese usuario.
- Base de datos: `Hireu`.

**Seguridad:** no publiques contraseñas ni credenciales reales en GitHub. Utiliza una configuración local excluida del repositorio y, en producción, variables de entorno o un mecanismo seguro equivalente.

### 6. Abrir el formulario

En el navegador, visita:

```text
http://localhost/Hireu/index.html
```

Completa los campos y envía el formulario. Si la conexión y el procesamiento funcionan correctamente, el registro se guardará en la base de datos.

### 7. Verificar los registros

En MySQL Workbench, ejecuta:

```sql
USE Hireu;

SELECT *
FROM Egresado
ORDER BY EgresadoId DESC;
```

La consulta permite comprobar los registros almacenados.

## 🔒 Consideraciones de seguridad

- No incluir contraseñas de MySQL en el repositorio.
- Validar los datos tanto en el navegador como en el servidor.
- Verificar el tipo y el tamaño de las imágenes antes de almacenarlas.
- No publicar fotografías ni información personal real de los egresados.
- Configurar permisos adecuados para la carpeta de archivos cargados.
- No utilizar datos de prueba en un entorno de producción sin revisar su privacidad.

## 🌐 Publicación del proyecto

El repositorio permite consultar el código fuente y su documentación. Sin embargo, **GitHub Pages no ejecuta PHP ni proporciona una base de datos MySQL**.

Para que el formulario funcione públicamente, será necesario alojar el frontend, el backend PHP y la base de datos en un servicio compatible y configurar las credenciales de producción de forma segura.

## 🚀 Mejoras futuras

- Implementar inicio de sesión y autenticación de usuarios.
- Permitir actualizar la información del perfil.
- Incorporar consultas y administración de egresados.
- Integrar el módulo con las ofertas laborales de HIRE-U.
- Crear un panel de administración.
- Mejorar la gestión y validación de fotografías.
- Implementar medidas adicionales de seguridad y privacidad.

## 👨‍💻 Autoría y repositorio

**Proyecto:** HIRE-U — Registro de Egresados

**Repositorio oficial:** [github.com/totemich20005/HireU-Registro-Egresados](https://github.com/totemich20005/HireU-Registro-Egresados)

Proyecto académico de desarrollo de software, enfocado en la creación de herramientas digitales para la gestión de egresados y su conexión con oportunidades profesionales.

---

<p align="center">
  <strong>HIRE-U — El talento abre puertas.</strong>
</p>
