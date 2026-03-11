# ☕ Cafetería TRANQUILATTE

## 📌 Descripción

**TRANQUILATTE** es un sistema web de cafetería que permite a los clientes navegar por productos, agregarlos al carrito, generar pedidos y obtener tickets en PDF. Incluye un panel administrativo para gestionar todos los pedidos recibidos.

Está desarrollado en **PHP** con base de datos en **MySQL**, y diseño visual mediante **CSS** y **Bootstrap**.

---

## 🖥 Requisitos del Sistema

### Software Necesario

- **Servidor Web:** Apache 2.4+ o Nginx con soporte PHP.
- **PHP:** Versión 7.4 o superior (recomendado PHP 8.x).
- **Base de Datos:** MySQL 5.7+ o MariaDB.
- **Archivo SQL:** `cafes.sql` con estructura inicial.
- **Editor de Código:** VSCode, Sublime Text, PHPStorm o similar.

### Extensiones PHP requeridas

- `mysqli`: Para conexión con MySQL.
- `json`: Para el manejo de pedidos.
- `mbstring` y `gd`: Recomendadas para la librería `html2pdf`.

### Permisos

- El archivo `pedidos.json` debe tener permisos de lectura y escritura.

### Entorno Recomendado

- XAMPP  
- WAMP  
- MAMP  

---

## 📁 Estructura del Proyecto

### Páginas de Usuario

- `Index.php`: Página de inicio.
- `productos.php`: Catálogo de productos.
- `carrito.php`: Visualización del carrito.
- `finalizar.php`: Confirmación del pedido.
- `confirmacion.php`: Pedido realizado con éxito.

### Procesamiento de Pedidos

- `guardar_pedido.php`: Guarda pedidos realizados.
- `guardar_pedidoAdmin.php`: Guarda pedidos desde el administrador.
- `generar_ticket.php`: Crea ticket en PDF.
- `factura_template.php`: Plantilla HTML para el ticket.

### Usuarios y Autenticación

- `login.php`: Ingreso de usuarios.
- `registro.php`: Registro de nuevos usuarios.
- `error.php`: Error de autenticación.
- `principal.php`: Página de inicio tras login.

### Administración

- `admin.php`: Panel de administración.
- `leer_pedidos.php`: Muestra pedidos desde `pedidos.json`.

### Utilidades

- `conexion.php`: Conexión a la base de datos.
- `pedidos.json`: Almacenamiento de pedidos.

### Estilos

- `css/estilo.css`: Hoja de estilos personalizada.
- `includes/header.php`, `includes/footer.php`: Componentes comunes.

### Base de Datos

- `cafes.sql`: Script de estructura e inserción de productos.

### Generación de PDF

- Carpeta `html2pdf/`: Librería para generar PDF (tickets).

---

## 🌐 Rutas Web

- 🏠 Inicio: [`http://localhost/TRANQUILATTE/login.php`](http://localhost/TRANQUILATTE/index.php)  
- 🔐 Admin: [`http://localhost/TRANQUILATTE/admin.php`](http://localhost/TRANQUILATTE/admin.php)  
- 🛒 Cliente: [`http://localhost/TRANQUILATTE/productos.php`](http://localhost/TRANQUILATTE/productos.php)

---

## 💻 Tecnologías Utilizadas

### Frontend

- HTML5
- CSS3
- Bootstrap 5
- Estilos personalizados (`css/estilo.css`)

### Backend

- PHP 7.4+
- MySQL / MariaDB
- Manejo de sesiones y formularios
- JSON (almacenamiento de pedidos)

### Librerías

- [`html2pdf`](https://github.com/spipu/html2pdf): Conversión de HTML a PDF para tickets.

### Entorno

- XAMPP, WAMP o MAMP para desarrollo local.

---

## 🚀 Proyecto en GitHub

El proyecto está publicado en el siguiente repositorio oficial:

🔗 [https://github.com/yamika29/progweb2023602542](https://github.com/yamika29/progweb2023602542)

Cualquier usuario puede clonar o descargar el código fuente desde ahí.

---

## 🐞 Reporte de Errores

Si detectas fallos o comportamientos inesperados:

1. Ve a la sección **Issues** del repositorio.  
2. Crea un nuevo reporte describiendo el problema.

📍 [https://github.com/yamika29/progweb2023602542/issues](https://github.com/yamika29/progweb2023602542/issues)

---

## 👥 Autores y Mantenedores

Proyecto desarrollado por el equipo de **TRANQUILATTE**:

- **Hernández Peña Karla Yamileth**  
- **Campos Torralva Ángel Iván**  
- **De Jesús Palma Johana Michelle**

