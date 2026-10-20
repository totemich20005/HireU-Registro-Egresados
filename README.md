# HIRE-U | Comunidad de Egresados y Oportunidades Profesionales

**HIRE-U** es un proyecto académico de desarrollo de software orientado a fortalecer la conexión entre los egresados de la Universidad de San Buenaventura y el mundo profesional mediante herramientas digitales para el registro de perfiles y la futura integración de oportunidades laborales.

El proyecto busca facilitar la organización de la información académica y profesional de los egresados, promoviendo una comunidad conectada con nuevas posibilidades de crecimiento.

---

## Descripción del proyecto

HIRE-U propone una plataforma web con una interfaz moderna, accesible y adaptable a diferentes dispositivos. Su identidad visual utiliza principalmente tonos naranja, negro y gris, buscando transmitir innovación, profesionalismo y confianza.

Actualmente, el repositorio incluye una página de presentación del proyecto y un módulo de registro de egresados conectado a una base de datos MySQL mediante PHP.

## Objetivos

- Facilitar el registro de egresados universitarios.
- Recopilar información personal, académica y profesional.
- Almacenar los registros en una base de datos.
- Promover una comunidad profesional vinculada a la universidad.
- Establecer una base tecnológica para futuras funcionalidades de conexión laboral.

## Funcionalidades

### Página principal — `inicio.html`

La landing page presenta el propósito y la propuesta de valor de HIRE-U. Incluye:

- Sección principal con presentación del proyecto.
- Descripción de los beneficios de la plataforma.
- Áreas profesionales ilustrativas.
- Explicación del proceso de registro.
- Información general sobre HIRE-U.
- Botones de navegación hacia el formulario.
- Menú adaptable para dispositivos móviles.

### Formulario de registro — `index.html`

El formulario permite registrar información de los egresados, incluyendo:

- Nombre y apellido.
- Correo institucional.
- Programa académico.
- Año de graduación.
- Fotografía de perfil, cuando se proporciona.
- Descripción del perfil profesional.

Los datos se envían a un backend PHP, que procesa la información y la almacena en MySQL.

### Procesamiento de datos — PHP y MySQL

El módulo de registro utiliza `conexion.php` para establecer la conexión con la base de datos y `guardar_egresado.php` para procesar los datos enviados por el formulario.

La tabla `Egresado` almacena la información correspondiente al registro.

> Las tarjetas de áreas profesionales de la landing page son elementos ilustrativos. No representan vacantes activas ni implican que la publicación de ofertas o las postulaciones estén implementadas en esta versión.

## Tecnologías utilizadas

| Tecnología | Función |
|---|---|
| HTML5 | Estructura de las páginas web |
| CSS3 | Diseño visual y adaptación a dispositivos |
| JavaScript | Interacciones y navegación |
| PHP | Procesamiento de formularios |
| MySQL | Almacenamiento de información |
| XAMPP | Entorno de desarrollo local |
| Git | Control de versiones |
| GitHub | Alojamiento del código fuente |

## Estructura del proyecto

```text
Hireu/
├── inicio.html
├── index.html
├── conexion.php
├── guardar_egresado.php
├── uploads/
├── .gitignore
└── README.md
```

La estructura puede incluir archivos y carpetas adicionales según la implementación actual del proyecto.

## Requisitos para ejecutar el proyecto

Antes de comenzar, se requiere:

- Un equipo con Windows.
- XAMPP instalado.
- Apache y MySQL.
- PHP compatible con la versión instalada de XAMPP.
- La base de datos `Hireu` configurada en MySQL.
- Un navegador web.

## Instalación y ejecución local

### 1. Clonar el repositorio

Ejecuta el siguiente comando en una terminal:

```bash
git clone https://github.com/totemich20005/HireU-Registro-Egresados.git
```

### 2. Ubicar el proyecto

Copia la carpeta del repositorio en:

```text
C:\xampp\htdocs\Hireu
```

Verifica que los archivos principales estén en la ubicación correcta.

### 3. Iniciar XAMPP

Abre el panel de control de XAMPP e inicia los servicios:

- Apache
- MySQL

### 4. Configurar la base de datos

Abre MySQL Workbench o phpMyAdmin y verifica que exista la base de datos `Hireu`, junto con la tabla `Egresado` y las columnas utilizadas por el formulario.

Si tienes el script SQL del proyecto, puedes utilizarlo para crear la estructura necesaria.

### 5. Configurar la conexión

Revisa el archivo `conexion.php` y configura los siguientes datos según tu instalación local:

- Servidor MySQL.
- Usuario.
- Contraseña.
- Nombre de la base de datos.

No publiques contraseñas ni credenciales privadas en el repositorio.

### 6. Abrir la página principal

En el navegador, ingresa a:

```text
http://localhost/Hireu/inicio.html
```

Desde esta página podrás conocer el proyecto y acceder al formulario de registro.

### 7. Abrir el formulario

Para acceder directamente al registro, visita:

```text
http://localhost/Hireu/index.html
```

Completa los campos y envía el formulario. Si Apache, PHP, MySQL y la configuración están correctos, los datos se almacenarán en la base de datos.

### 8. Comprobar los registros

En MySQL Workbench, ejecuta:

```sql
USE Hireu;

SELECT *
FROM Egresado
ORDER BY EgresadoId DESC;
```

Esta consulta permite verificar los registros almacenados.

## Seguridad y protección de datos

Para proteger el proyecto y la información de sus usuarios, se recomienda:

- Excluir credenciales privadas mediante `.gitignore`.
- Validar los datos tanto en el frontend como en el backend.
- Limitar los tipos y tamaños de las fotografías.
- Evitar publicar información personal real.
- Configurar permisos adecuados para los archivos cargados.
- Utilizar configuraciones seguras para el entorno de producción.

**Importante:** `.gitignore` no excluye automáticamente archivos que Git ya está rastreando. Antes de publicar cambios, verifica que `conexion.php` no contenga credenciales privadas dentro de los archivos versionados.

## Estado actual del proyecto

HIRE-U se encuentra en desarrollo. Esta versión incluye una landing page informativa y un módulo funcional de registro local conectado a PHP y MySQL.

Las funcionalidades de publicación de vacantes, postulación a ofertas, autenticación de usuarios y administración de perfiles pueden incorporarse progresivamente en futuras etapas.

## Mejoras futuras

- Implementar autenticación y registro de usuarios.
- Permitir la edición de perfiles profesionales.
- Incorporar un módulo de publicación de ofertas laborales.
- Desarrollar funcionalidades de búsqueda y postulación a vacantes.
- Crear un panel de administración.
- Mejorar las medidas de seguridad y privacidad.
- Desplegar el sistema en un servidor compatible con PHP y MySQL.

## Publicación en internet

GitHub permite almacenar y compartir el código fuente del proyecto. Sin embargo, GitHub Pages no ejecuta PHP ni proporciona una base de datos MySQL.

Para que el formulario funcione públicamente, será necesario alojar el backend PHP y la base de datos en un servicio compatible, configurar las credenciales de producción y asegurar la comunicación entre los componentes.

## Repositorio oficial

**GitHub:** [HireU-Registro-Egresados](https://github.com/totemich20005/HireU-Registro-Egresados)

**Proyecto:** HIRE-U — Registro de Egresados y Conexión Profesional.

**Propósito:** apoyar a los egresados universitarios mediante herramientas digitales para la organización de su información profesional y la futura conexión con oportunidades laborales.

---

**HIRE-U — El talento abre puertas.**
