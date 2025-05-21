<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CeCyTEH Tizayuca - Sistema de Recolección de Agua Pluvial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <h1><i class="fas fa-tint"></i> GOTA A GOTA</h1>
                <p>CECYTEH PLANTEL TIZAYUCA</p>
                <p>Proyecto de Recolección de Agua Pluvial</p>
            </div>
            <nav class="navbar">
                <ul class="nav-menu">
                    <li class="nav-item"><a href="index.html" class="nav-link active">Inicio</a></li>
                    <li class="nav-item"><a href="proyecto.html" class="nav-link">Proyecto</a></li>
                    <li class="nav-item"><a href="materias.html" class="nav-link">Materias</a></li>
                    <li class="nav-item"><a href="galeria.html" class="nav-link">Galería</a></li>
                    <li class="nav-item"><a href="plantas.html" class="nav-link">Plantas</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <h2>Formulario de Compra</h2>
        
        <table>
            <thead>
                <tr>
                    <th>Material</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select id="material">
                            <option value="Canaleta">Canaleta - $15.50</option>
                            <option value="Tubo">Tubo - $12.00</option>
                            <option value="Filtro">Filtro - $8.75</option>
                            <option value="Bidón">Bidón - $20.00</option>
                            <option value="Pegamento">Pegamento - $5.00</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" id="cantidad" min="1" value="1">
                    </td>
                    <td>
                        <button onclick="calcularTotal()">Calcular</button>
                        <button onclick="borrarCampos()">Borrar</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div id="resultado" class="resultado-container"></div>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <div class="footer-logo">
                    <h3><i class="fas fa-tint"></i> GOTA A GOTA</h3>
                    <p>No desperdicies el agua hoy, para que no te falte mañana.</p>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Enlaces Rápidos</h3>
                <ul class="footer-links">
                    <li><a href="index.html"><i class="fas fa-chevron-right"></i> Inicio</a></li>
                    <li><a href="proyecto.html"><i class="fas fa-chevron-right"></i> Nuestro Proyecto</a></li>
                    <li><a href="pro.php"><i class="fas fa-chevron-right"></i> Calculadora de Ahorro</a></li>
                    <li><a href="galeria.html"><i class="fas fa-chevron-right"></i> Galería Fotográfica</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Documentos Legales</h3>
                <ul class="footer-links">
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Términos y Condiciones</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Política de Privacidad</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Aviso Legal</a></li>
                </ul>
            </div>
            
            <div class="footer-section newsletter">
                <h3>Boletín Informativo</h3>
                <p>Suscríbete para recibir actualizaciones sobre nuestro proyecto.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Tu correo electrónico" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 CeCyTEH Tizayuca - Proyecto de Recolección de Agua Pluvial. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>