# Cervecería INTI - Sistema de Gestión 🍺💻

[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)](https://developer.mozilla.org/es/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)](https://developer.mozilla.org/es/docs/Web/CSS)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)](https://jquery.com/)

## Descripción del Proyecto 📝

Sistema web integral para la gestión de Cervecería INTI, que incluye un panel de administración y una interfaz pública para la presentación de productos. El sistema está desarrollado utilizando PHP con el patrón de diseño Template, proporcionando una estructura modular y mantenible.

## Objetivos 🎯

- Gestionar el catálogo de cervezas y productos de la cervecería
- Administrar usuarios y permisos mediante el panel de control
- Proporcionar una interfaz intuitiva para la gestión de contenidos
- Mostrar información actualizada sobre productos y servicios
- Facilitar la administración de inventario y ventas

## Estructura del Proyecto 📂

```
GitGestion/
├── Patrones/
│   └── Template/
├── Recursos/
│   ├── css/
│   ├── js/
│   └── img/
├── index.php
├── Admin.php
└── README.md
```

## Tecnologías Utilizadas 🛠️

### Frontend
- HTML5 y CSS3
- Bootstrap 5.3
- jQuery
- Font Awesome
- Line Icons
- Owl Carousel
- DataTables

### Backend
- PHP
- Patrón de diseño Template
- Sistema de sesiones

## Instalación 🚀

1. Clona el repositorio:
```bash
git clone https://github.com/ChrisitanLP/ProyectoGestion6toSemestre.git
```

2. Configura un servidor web local (Apache/XAMPP/WAMP)

3. Copia los archivos al directorio web:
```bash
# Para XAMPP
xcopy * C:\xampp\htdocs\cerveceria-inti /E
```

4. Configura la base de datos (si aplica)

## Uso 📋

1. Inicia tu servidor web local

2. Accede al sistema:
   - Sitio público: `http://localhost/cerveceria-inti`
   - Panel admin: `http://localhost/cerveceria-inti/Admin.php`

3. Credenciales por defecto:
   - Usuario: admin
   - Contraseña: admin123

## Contribución 🤝

1. Haz un Fork del proyecto
2. Crea una rama para tu función (`git checkout -b feature/NuevaFuncion`)
3. Realiza commit de tus cambios (`git commit -m 'Añadir nueva función'`)
4. Push a la rama (`git push origin feature/NuevaFuncion`)
5. Abre un Pull Request

## Changelog 📝

### v1.1.0 (2024-05-30)
- Implementación del panel de administración
- Mejoras en la interfaz de usuario
- Integración de DataTables

### v1.0.0 (2024-05-15)
- Lanzamiento inicial
- Implementación del patrón Template
- Diseño responsive con Bootstrap

## Licencia 📄

Este proyecto está bajo la Licencia MIT - ver el archivo [LICENSE.md](LICENSE.md) para más detalles.

## Créditos ✨

Desarrollado por DXM

---

> **Nota**: Este es un proyecto educativo desarrollado como parte de la formación en desarrollo web del 6to Semestre.
