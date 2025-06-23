# ⚡ Cervecería INTI - Sistema de Gestión Web

[![PHP](https://img.shields.io/badge/PHP-7.4+-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange.svg)](https://mysql.com)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

Plataforma web integral para la gestión de cervecerías que incluye una interfaz pública para clientes (catálogo, carrito de compras, contacto) y una interfaz administrativa segura para operaciones CRUD (usuarios, productos, compras y testimonios). Implementa patrones de diseño como plantilla, comando, singleton y estrategia.

---

## 📋 Tabla de Contenidos
- [⚡ Cervecería INTI - Sistema de Gestión Web](#-cervecería-inti---sistema-de-gestión-web)
  - [📋 Tabla de Contenidos](#-tabla-de-contenidos)
  - [📌 Características principales](#-características-principales)
  - [🛠️ Requisitos previos](#️-requisitos-previos)
  - [📁 Estructura del proyecto](#-estructura-del-proyecto)
    - [Descripción de directorios principales](#descripción-de-directorios-principales)
  - [📦 Instalación](#-instalación)
    - [1. Clonar o descargar el proyecto](#1-clonar-o-descargar-el-proyecto)
    - [2. Configurar el servidor local](#2-configurar-el-servidor-local)
    - [3. Preparar la estructura](#3-preparar-la-estructura)
  - [⚙️ Configuración](#️-configuración)
    - [Base de datos](#base-de-datos)
      - [1. Crear la base de datos](#1-crear-la-base-de-datos)
      - [2. Importar el esquema](#2-importar-el-esquema)
      - [3. Configurar conexión](#3-configurar-conexión)
    - [Configuración del servidor](#configuración-del-servidor)
  - [🚀 Uso](#-uso)
    - [Acceso a la aplicación](#acceso-a-la-aplicación)
      - [Interfaz de clientes](#interfaz-de-clientes)
      - [Panel de administración](#panel-de-administración)
    - [Flujo de trabajo típico](#flujo-de-trabajo-típico)
  - [🔧 Personalización](#-personalización)
    - [Componentes personalizables](#componentes-personalizables)
    - [Modificaciones comunes](#modificaciones-comunes)
  - [🛡️ Validación y formato de datos](#️-validación-y-formato-de-datos)
    - [Seguridad implementada](#seguridad-implementada)
    - [Tipos de validación](#tipos-de-validación)
  - [🔍 Solución de problemas](#-solución-de-problemas)
    - [Problemas comunes](#problemas-comunes)
      - [❌ Error de conexión a base de datos](#-error-de-conexión-a-base-de-datos)
      - [❌ Carrito vacío o no se carga](#-carrito-vacío-o-no-se-carga)
      - [❌ Formularios no se procesan](#-formularios-no-se-procesan)
      - [❌ Estilos no se cargan](#-estilos-no-se-cargan)
    - [Debugging avanzado](#debugging-avanzado)
  - [📊 Registro de logs](#-registro-de-logs)
    - [Configuración de auditoría](#configuración-de-auditoría)
    - [Ejemplo de implementación](#ejemplo-de-implementación)
  - [⚠️ Limitaciones](#️-limitaciones)
    - [Funcionalidades no incluidas](#funcionalidades-no-incluidas)
    - [Consideraciones de seguridad](#consideraciones-de-seguridad)
  - [🤝 Contribución](#-contribución)
    - [Cómo contribuir](#cómo-contribuir)
    - [Guías de contribución](#guías-de-contribución)
    - [Estándares de código](#estándares-de-código)
  - [📄 Licencia](#-licencia)

---

## 📌 Características principales

- ✅ **Interfaz dual**: Separación clara entre área de clientes y administradores
- 🛒 **Carrito inteligente**: Integración directa con pedidos por WhatsApp
- 🏗️ **Arquitectura sólida**: Implementa patrones MVC con diseño clásico (Plantilla, Comando, Singleton, Estrategia)
- 📊 **Gestión completa**: Seguimiento de compras, productos, usuarios y testimonios
- 🔐 **Sistema seguro**: Autenticación robusta con control de acceso por roles
- 📱 **Responsive**: Diseño adaptable a diferentes dispositivos

---

## 🛠️ Requisitos previos

- **PHP >= 7.4**
- **MySQL 5.7** o **MariaDB 10.4+**
- **Apache Server**
- Navegador web con herramientas para desarrolladores
- **XAMPP**, **WAMP** o servidor local similar

---

## 📁 Estructura del proyecto

```
cerveceria-inti/
├── .vscode/                     # Configuración del editor VS Code
├── Acciones/                    # Controladores de acciones del sistema
├── Paginas/                     # Vistas y páginas del frontend
├── Patrones/                    # Implementación de patrones de diseño
│   ├── Command/                 # Patrón Comando
│   ├── Singleton/               # Patrón Singleton
│   ├── Strategy/                # Patrón Estrategia
│   └── Template/                # Patrón Plantilla y sistema de vistas
├── Recursos/                    # Assets estáticos
│   ├── CSS/                     # Hojas de estilo
│   ├── Fuentes/                 # Tipografías personalizadas
│   ├── Imagenes/                # Recursos gráficos
│   │   ├── Fondos/              # Imágenes de fondo
│   │   ├── Logos/               # Logotipos y marca
│   │   └── Productos/           # Catálogo visual de productos
│   └── JS/                      # Scripts JavaScript
│       └── Librerias/           # Librerías de terceros
├── vendor/                      # Dependencias de Composer (PHPUnit, etc.)
├── index.php                    # Punto de entrada público
├── Admin.php                    # Panel de administración
├── Conexion.php                 # Configuración de base de datos
└── README.md                    # Documentación del proyecto
```


### Descripción de directorios principales

| Directorio | Descripción |
|------------|-------------|
| **Acciones/** | Contiene los controladores que manejan la lógica de negocio y procesan las peticiones del usuario |
| **Paginas/** | Almacena las vistas del frontend, incluyendo páginas de catálogo, contacto y navegación |
| **Patrones/** | Implementación de patrones de diseño para una arquitectura escalable y mantenible |
| **Recursos/** | Assets estáticos como CSS, JavaScript, imágenes y fuentes tipográficas |
| **vendor/** | Dependencias de desarrollo y testing gestionadas por Composer |

---

## 📦 Instalación

### 1. Clonar o descargar el proyecto

```bash
git clone https://github.com/ChrisitanLP/ProyectoGestion6toSemestre.git
cd cerveceria-inti
```

### 2. Configurar el servidor local

Asegúrate de tener Apache y MySQL ejecutándose en tu servidor local (XAMPP/WAMP).

### 3. Preparar la estructura

No se requieren dependencias adicionales de PHP, el sistema funciona con PHP puro.

---

## ⚙️ Configuración

### Base de datos

#### 1. Crear la base de datos

```sql
CREATE DATABASE moviles;
```

#### 2. Importar el esquema

Importa el archivo SQL ubicado en:
```
GitGestion/Recursos/moviles.sql
```

#### 3. Configurar conexión

Edita el archivo `Conexion.php`:

```php
<?php
class Conexion {
    private $host = 'localhost';
    private $usuario = 'root';
    private $clave = '';
    private $bd = 'moviles';
    
    // ... resto de la configuración
}
?>
```
---

### Configuración del servidor

Asegúrate de que tu servidor Apache esté configurado para:
- Permitir archivos `.htaccess` (si se utilizan)
- Tener habilitadas las extensiones `mysqli` o `PDO`
- Permisos de escritura en directorios de logs (opcional)

---
## 🚀 Uso

### Acceso a la aplicación

#### Interfaz de clientes
```
http://localhost/cerveceria-inti/index.php
```

**Funcionalidades disponibles:**
- Navegación por catálogo de productos
- Gestión de carrito de compras
- Envío de pedidos via WhatsApp
- Formulario de contacto
- Visualización de testimonios

#### Panel de administración
```
http://localhost/cerveceria-inti/Admin.php
```

**Funcionalidades administrativas:**
- CRUD completo de productos
- Gestión de usuarios y roles
- Seguimiento de compras
- Administración de testimonios
- Reportes y estadísticas

### Flujo de trabajo típico

1. **Cliente**: Navega el catálogo → Añade productos al carrito → Realiza pedido
2. **Administrador**: Gestiona inventario → Procesa pedidos → Actualiza estado

---

## 🔧 Personalización

### Componentes personalizables

| Componente | Ubicación | Función |
|------------|-----------|---------|
| **Plantillas** | `Patrones/Template/` | Diseño y estructura de vistas |
| **Estilos** | `Recursos/CSS/` | Apariencia visual y temas |
| **Scripts** | `Recursos/JS/` | Funcionalidad interactiva |
| **Imágenes** | `Recursos/Imagenes/` | Assets visuales |
| **Lógica Admin** | `Acciones/AccionesAdmin.php` | Operaciones administrativas |
| **Lógica Productos** | `Acciones/AccionesProductos.php` | Gestión de carrito y productos |

### Modificaciones comunes

- **Cambiar colores**: Editar variables CSS en `Recursos/CSS/`
- **Añadir campos**: Modificar templates y controladores correspondientes
- **Integrar APIs**: Extender clases en `Acciones/`

---

## 🛡️ Validación y formato de datos

### Seguridad implementada

- **Sanitización de entrada**: Uso de `filter_input()` y validaciones PHP
- **Prevención XSS**: Escape de caracteres especiales en salidas
- **Protección SQL**: Consultas preparadas y validación de tipos
- **Gestión de sesiones**: Control seguro de autenticación

### Tipos de validación

- Campos de texto y números
- Direcciones de correo electrónico
- Formato de archivos de imagen
- Longitud y caracteres permitidos

---

## 🔍 Solución de problemas

### Problemas comunes

#### ❌ Error de conexión a base de datos
**Síntomas**: Página en blanco o error de conexión
**Solución**:
- Verificar credenciales en `Conexion.php`
- Asegurar que MySQL esté ejecutándose
- Confirmar que la base de datos `moviles` existe

#### ❌ Carrito vacío o no se carga
**Síntomas**: Productos no se añaden al carrito
**Solución**:
- Verificar que las sesiones PHP estén habilitadas
- Revisar la consola del navegador para errores JavaScript
- Comprobar permisos de escritura en directorio de sesiones

#### ❌ Formularios no se procesan
**Síntomas**: Envío de formularios sin respuesta
**Solución**:
- Habilitar `error_reporting(E_ALL);` para debug
- Verificar rutas de archivos de acción
- Revisar logs del servidor Apache

#### ❌ Estilos no se cargan
**Síntomas**: Página sin formato CSS
**Solución**:
- Verificar rutas relativas en archivos HTML
- Comprobar permisos de lectura en `Recursos/CSS/`
- Limpiar caché del navegador

### Debugging avanzado

Para habilitar logs detallados, crear directorio `logs/` y añadir:

```php
// En archivos PHP principales
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', './logs/php_errors.log');
```

---

## 📊 Registro de logs

### Configuración de auditoría

Puedes implementar un sistema de logs personalizado para:
- Seguimiento de compras realizadas
- Errores de sistema y debugging
- Accesos administrativos
- Cambios en inventario

### Ejemplo de implementación

```php
// logs/Logger.php
class Logger {
    public static function log($message, $type = 'INFO') {
        $timestamp = date('Y-m-d H:i:s');
        $logEntry = "[$timestamp] [$type] $message\n";
        file_put_contents('./logs/system.log', $logEntry, FILE_APPEND);
    }
}
```

---

## ⚠️ Limitaciones

### Funcionalidades no incluidas

- **Sistema de correo**: No incluye envío automatizado de emails
- **Pagos online**: Sin integración con pasarelas de pago
- **Dashboard avanzado**: Reportes básicos, sin visualizaciones complejas
- **API REST**: Interfaz web únicamente
- **Multiidioma**: Soporte solo en español

### Consideraciones de seguridad

- **CSRF**: Protección básica, recomendable mejorar para producción
- **HTTPS**: Configurar SSL para entornos productivos
- **Rate limiting**: No implementado, considerar para APIs públicas

---

## 🤝 Contribución

### Cómo contribuir

1. **Fork** el repositorio
2. Crea una **rama** para tu feature (`git checkout -b feature/AmazingFeature`)
3. **Commit** tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. **Push** a la rama (`git push origin feature/AmazingFeature`)
5. Abre un **Pull Request**

### Guías de contribución

- 🐛 **Reportar bugs**: Usar issues con template detallado
- ✨ **Nuevas características**: Discutir primero en issues
- 📝 **Documentación**: Mantener README y comentarios actualizados
- 🧪 **Testing**: Incluir pruebas para nuevas funcionalidades

### Estándares de código

- Seguir PSR-12 para PHP
- Comentarios en español
- Nombres de variables descriptivos
- Funciones con responsabilidad única

---

## 📄 Licencia

Este proyecto está licenciado bajo la **MIT License**. Consulta el archivo [LICENSE](LICENSE) para más detalles.

```
MIT License

Copyright (c) 2024 Cervecería INTI

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
---

**Desarrollado como una solución integral para la gestión y experiencia digital de cervecerías, combinando interfaz pública, panel administrativo y patrones de diseño orientados a buenas prácticas.** 🍺💻

<div align="center">

**[⬆ Volver al inicio](#-cervecería-inti---sistema-de-gestión-web)**

</div>
