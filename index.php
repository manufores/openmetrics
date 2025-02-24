<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Marketing - Dashboard en Tiempo Real</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="zoomInDown.css">
    <link rel="stylesheet" href="priceCards.css">
    <link rel="stylesheet" href="social Proof.css">
</head>

<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <a href="#inicio"><img src="./img/logo1.png" width="50%" alt="logo"></a>
            <p>Tus campañas de marketing transparentes en tiempo real.</p>
        </div>
        <nav class="nav-links">
            <a href="#inicio">Inicio</a>
            <a href="#caracteristicas">Características</a>
            <a href="#planes">Planes</a>
            <a href="#contacto">Contacto</a>
        </nav>
        <div class="menu-toggle" id="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- Hero Section (Actualizada con imagen del producto) -->
    <section class="hero" id="inicio">

        <div class="hero-content">
            <video autoplay muted loop id="myVideo">
                <source src="./img/background.mp4" type="video/mp4">
            </video>
            <div class="hero-text">
                <div class="zoomInDown">
                    <h1>Impulsa tu negocio con nuestro Dashboard en Tiempo Real</h1>
                </div>
                <p>Visualiza los KPI's más relevantes para tu empresa y toma decisiones estratégicas al instante.</p>
                <a href="#demo">
                    <button>Ver Demo</button>
                </a>
            </div>
            <div class="hero-image">
                <img src="./img/1cc3421a-a404-410f-b792-ddd6122dd775.jpg" alt="Dashboard en tiempo real">
            </div>
        </div>
    </section>

    <!-- Características (Actualizadas con imágenes) -->
    <section class="features" id="caracteristicas">
        <h2>Características Destacadas</h2>
        <div class="feature-cards">
            <div class="card">
                <img src="./img/tiempoReal.png" alt="Actualización en tiempo real">
                <h3>Actualización en Tiempo Real</h3>
                <p>Monitorea tus métricas en el acto.</p>
            </div>
            <div class="card">
                <img src="./img/PersonalizaciónDasboard.png" alt="Personalización de KPI's">
                <h3>Personalización de KPI's</h3>
                <p>Elige los indicadores que realmente importan para tu negocio.</p>
            </div>
            <div class="card">
                <img src="./img/tablet.png" alt="Acceso multiplataforma">
                <h3>Acceso Multiplataforma</h3>
                <p>Visualiza tus datos desde cualquier dispositivo.</p>
            </div>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="testimonials">
        <h2>Lo que dicen nuestros clientes</h2>
        <div class="testimonial-cards">
            <div class="testimonial">
                <p>"El dashboard ha transformado la forma en la que gestionamos nuestros proyectos. ¡Imprescindible!"
                </p>
                <h4>María López, CEO de TechWave</h4>
            </div>
            <div class="testimonial">
                <p>"Gracias a las métricas en tiempo real, nuestras campañas son más efectivas que nunca."</p>
                <h4>Carlos Pérez, Marketing Manager en InnovateX</h4>
            </div>
            <div class="testimonial">
                <p>"La mejor herramienta que hemos implementado en años. Fácil de usar y muy potente."</p>
                <h4>Laura García, Directora de Operaciones en Creativa</h4>
            </div>
        </div>
    </section>
    <!-- Están hablando de nosotros-->
    <section class="channels">
        <h2>Están hablando de nosotros</h2>
        <div class="containerSp"></div>
    </section>

    <section class="demo" id="demo">
        <h2>Explora el Futuro del Marketing Inteligente</h2>
        <div>
            <iframe src="https://www.youtube.com/embed/gM6d3W--x7c?si=cxMizaTXep_x8yFX" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen id="videoDemo"></iframe>
        </div>
        <a href="#planes">
            <button>Elige tu plan ahora</button>
        </a>
    </section>


    <!-- Planes de Suscripción (Actualizados con imágenes) -->
    <section class="pricing" id="planes">
        <h2>Planes de Suscripción</h2>
        <!-- Another price cards-->
        <div class="price_table">
            <div class="package package_silver">
                <h2 id="packageBasic">Básico</h2>
                <div class="price">
                    <div class="big">499</div>€/mes
                </div>
                <p>¿Eres StartUp o Pequeña empresa? </br>
                    Optimiza tus métricas ya con nuestro plan Básico</p>
                <ul>
                    <li>Gestión de 1 canal publicitario (Google Ads o Meta Ads)</li>
                    <li>Dashboard con KPIs esenciales</li>
                    <li>Reporte mensual</li>
                    <li>Reunión de estrategia trimestral</li>
                </ul>
                <a href="#contacto">
                    <button onclick="insertText(document.getElementById('packageBasic').innerText)">Elige tu
                        plan</button>
                </a>
            </div>
            <div class="package package_bronze">
                <div class="banner">Más Popular</div>
                <h2 id="packageBronze">Premium</h2>
                <div class="price">
                    <div class="big">899</div>€/mes
                </div>
                <p>Pensado para empresas medianas:</p>
                <ul>
                    <li>Gestión de 2-3 canales publicitarios</li>
                    <li>Dashboard avanzado con recomendaciones</li>
                    <li>Reportes quincenales</li>
                    <li>Consultoría estratégica mensual</li>
                    <li>Optimización y pruebas A/B</li>
                </ul>
                <a href="#contacto">
                    <button onclick="insertText(document.getElementById('packageBronze').innerText)">Elige tu
                        plan</button>
                </a>
            </div>
            <div class="package package_gold">
                <h2 id="packageGold">Enterprise</h2>
                <div class="price">
                    <div class="big">1599</div>€/mes
                </div>
                <p>Dirigido a Grandes corporaciones:</p>
                <ul>
                    <li>Gestión integral de marketing digital (Google, Meta, LinkedIn, Email, etc.)</li>
                    <li>Dashboard 100% personalizado con integración a CRM</li>
                    <li>Análisis predictivo y automatización de insights</li>
                    <li> Reunión estratégica semanal</li>
                    <li>Soporte premium y optimización en tiempo real</li>
                </ul>
                <a href="#contacto">
                    <button onclick="insertText(document.getElementById('packageGold').innerText)">Elige tu
                        plan</button>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action (CTA) con Flexbox -->
    <section class="cta" id="contacto">
        <div class="cta-text">
            <h2>¿Listo para transformar tu negocio?</h2>
            <p>Déjanos tu información y nos pondremos en contacto contigo.</p>
        </div>

        <form class="contact-form" id="klaviyoForm" action="klaviFormv2.php" method="POST">
            <input type="text" id="first_name" name="first_name" placeholder="Tu Nombre" required>
            <input type="email" id="email" name="email" placeholder="Tu Correo Electrónico" required>
            <textarea name="message" id="textoform" placeholder="Escribe tu mensaje..." rows="4" required></textarea>
            <button type="submit">Enviar Mensaje</button>
        </form>
    </section>


    <!-- Footer -->
    <footer>
        <p>&copy; 2025 OpenMetrics. Todos los derechos reservados.</p>
        <div class="social-links">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-linkedin"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
    </footer>

    <script src="insertPlan.js"></script>
    <script src="https://kit.fontawesome.com/8217b5be99.js" crossorigin="anonymous"></script>
    <script src="changeColorNavbar.js"></script>
    <script src="script.js"></script>


</body>

</html>