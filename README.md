# Módulo ART'S - AMMA

Sistema desarrollado durante una estancia profesional para la gestión y administración de registros ART'S dentro de la plataforma AMMA.

## Descripción

Este proyecto fue desarrollado como parte de una estancia profesional con el objetivo de digitalizar y optimizar el proceso de registro, consulta y administración de ART'S.

La solución permite gestionar información de manera eficiente, reduciendo procesos manuales y facilitando el acceso a los registros mediante una interfaz organizada y funcional.

## Funcionalidades

- Registro de ART'S.
- Consulta de información registrada.
- Edición y actualización de registros.
- Validación de datos.
- Gestión centralizada de información.
- Integración con los procesos internos de AMMA.

## Tecnologías Utilizadas

- PHP
- Laravel
- MySQL
- HTML5
- CSS3
- JavaScript
- Bootstrap

## Instalación

Clonar el repositorio:

```bash
git clone https://github.com/Develenguas/Modulo-ART-S-AMMA.git
```

Ingresar al proyecto:

```bash
cd Modulo-ART-S-AMMA
```

Instalar dependencias:

```bash
composer install
```

Copiar archivo de entorno:

```bash
cp .env.example .env
```

Generar clave de Laravel:

```bash
php artisan key:generate
```

Configurar la conexión a la base de datos en el archivo `.env`.

Ejecutar migraciones:

```bash
php artisan migrate
```

Iniciar servidor local:

```bash
php artisan serve
```

## 📂 Estructura del Proyecto

```text
app/
bootstrap/
config/
database/
public/
resources/
routes/
storage/
```

## Desarrolladores

### Salvador Luengas (Develenguas)

Desarrollador del módulo durante la estancia profesional.

GitHub:
👉 https://github.com/Develenguas

### Jose Gonzales (Tux-2)

Colaborador en el desarrollo e implementación del proyecto.

GitHub:
👉 https://github.com/TUX-2

## Estancia Profesional

Proyecto realizado como parte de una estancia profesional, aplicando conocimientos de desarrollo de software para resolver necesidades reales dentro de un entorno organizacional.

## Evidencias

Aquí pueden agregarse capturas de pantalla del sistema:

![Dashboard](docs/img/dashboard.png)

![Registro](docs/img/registro.png)

## Licencia

Proyecto desarrollado con fines académicos y profesionales.

Todos los derechos pertenecen a sus respectivos autores y a la institución donde fue implementado.

---

⭐ Si este proyecto te resulta interesante, no olvides dejar una estrella en el repositorio.
