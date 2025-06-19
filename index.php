<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SegurTech - Soluciones Integrales de Seguridad y Tecnología</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            scroll-behavior: smooth;
        }
        
        .navbar {
            background-color: var(--primary-color) !important;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background-color: rgba(44, 62, 80, 0.95) !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .hero {
            /*background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), 
                        url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            */
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), 
                        url('images/cctvYcasa2.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0 100px;
        }
        
        section {
            padding: 80px 0;
        }
        
        .service-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }
        
        .testimonial-card {
            background-color: var(--light-color);
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
        
        .contact-info {
            margin-bottom: 30px;
        }
        
        .contact-icon {
            font-size: 1.5rem;
            color: var(--secondary-color);
            margin-right: 10px;
        }
        
        .btn-primary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 50px;
            padding-bottom: 15px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
        }
        
        .logo {
            height: 99px;
            border-radius: 10% / 50%;
        }
        
        #backToTop {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            z-index: 99;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--secondary-color);
            color: white;
            border: none;
            font-size: 1.2rem;
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 30px 0;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar">
    <!-- Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!--img src="https://via.placeholder.com/150x50?text=SegurTech" alt="SegurTech Logo" class="logo"-->
                <img src="images/logo-bn.jpeg" alt="SegurTech Logo" class="logo">
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#empresa">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonios">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Soluciones Integrales de Seguridad y Tecnología</h1>
            <p class="lead mb-5">Protegiendo lo que más importa con tecnología de vanguardia y servicio excepcional</p>
            <a href="#servicios" class="btn btn-primary btn-lg px-4 me-2">Nuestros Servicios</a>
            <a href="#contacto" class="btn btn-outline-light btn-lg px-4">Contactar Ahora</a>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">Nuestros Servicios</h2>
            <div class="row">
                <!-- CCTV -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <h3 class="h4">CCTV</h3>
                            <p class="card-text">Instalación y mantenimiento de sistemas de videovigilancia para hogares y empresas con tecnología HD y analítica de video.</p>
                            <a href="#contacto" class="btn btn-sm btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                
                <!-- Portones Eléctricos -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <h3 class="h4">Portones Eléctricos</h3>
                            <p class="card-text">Sistemas automatizados para estacionamientos con controles remotos, sensores de seguridad y mantenimiento preventivo.</p>
                            <a href="#contacto" class="btn btn-sm btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                
                <!-- Cercos Eléctricos -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h3 class="h4">Cercos Eléctricos</h3>
                            <p class="card-text">Sistemas de protección perimetral con tecnología inteligente que disuade intrusiones sin riesgo para personas o animales.</p>
                            <a href="#contacto" class="btn btn-sm btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                
                <!-- Alarmas -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-bell"></i>
                            </div>
                            <h3 class="h4">Sistemas de Alarmas</h3>
                            <p class="card-text">Soluciones personalizadas para hogares y negocios con monitoreo 24/7, sensores de movimiento y conexión a central de alarmas.</p>
                            <a href="#contacto" class="btn btn-sm btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                
                <!-- Desarrollo Web -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3 class="h4">Desarrollo Web</h3>
                            <p class="card-text">Diseño y desarrollo de páginas web profesionales, responsive y optimizadas para SEO que impulsan tu presencia digital.</p>
                            <a href="#contacto" class="btn btn-sm btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
                
                <!-- Sistemas -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center p-4">
                            <div class="service-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h3 class="h4">Desarrollo de Sistemas</h3>
                            <p class="card-text">Software personalizado para automatizar procesos, gestionar inventarios, clientes y mejorar la eficiencia operativa.</p>
                            <a href="#contacto" class="btn btn-sm btn-primary">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre la Empresa -->
    <section id="empresa" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title">Sobre SegurTech</h2>
                    <p class="lead">Más de 10 años protegiendo hogares y negocios en toda la región.</p>
                    <p>Fundada en 2012 por un equipo de ingenieros apasionados por la seguridad y la tecnología, SegurTech comenzó como un pequeño taller especializado en sistemas de alarmas. Hoy somos líderes en soluciones integrales de seguridad electrónica y desarrollo tecnológico.</p>
                    <p>Nuestra misión es brindar tranquilidad a nuestros clientes a través de soluciones innovadoras, servicio personalizado y atención post-venta excepcional. Cada proyecto es tratado con el mismo cuidado y dedicación, sin importar su tamaño.</p>
                    <p>Contamos con certificaciones de los principales fabricantes de equipos de seguridad y tecnología, garantizando instalaciones profesionales y mantenimientos preventivos que prolongan la vida útil de los sistemas.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://via.placeholder.com/600x400?text=Equipo+SegurTech" alt="Equipo SegurTech" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section id="testimonios" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center section-title">Lo que dicen nuestros clientes</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Cliente 1" class="testimonial-img">
                        <h4>María González</h4>
                        <p class="text-muted">Restaurante "El Buen Sabor"</p>
                        <p>"Instalaron nuestro sistema de CCTV y al mes detectamos un intento de robo. Las cámaras de alta definición permitieron identificar a los responsables. Excelente servicio post-venta."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Cliente 2" class="testimonial-img">
                        <h4>Carlos Mendoza</h4>
                        <p class="text-muted">Condominio "Las Acacias"</p>
                        <p>"Automatizaron todos los portones de nuestro condominio. Hace 3 años sin fallas y el mantenimiento preventivo ha sido clave. Profesionales y puntuales en cada visita."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Cliente 3" class="testimonial-img">
                        <h4>Laura Jiménez</h4>
                        <p class="text-muted">Tienda "Moda Express"</p>
                        <p>"El sistema de alarmas con monitoreo nos salvó de un robo a las 3 AM. La policía llegó en minutos gracias a la alerta automática. Ahora estamos desarrollando nuestra página web con ellos."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Contáctanos</h2>
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h3 class="h4 mb-4">Información de contacto</h3>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt contact-icon"></i> Av. Principal #123, Ciudad, País</p>
                        <p><i class="fas fa-phone contact-icon"></i> +1 234 567 890</p>
                        <p><i class="fas fa-envelope contact-icon"></i> info@segurtech.com</p>
                        <p><i class="fas fa-clock contact-icon"></i> Lunes a Viernes: 8:00 AM - 6:00 PM</p>
                    </div>
                    <div class="social-links mt-4">
                        <a href="#" class="text-decoration-none me-3"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="#" class="text-decoration-none me-3"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#" class="text-decoration-none me-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-decoration-none"><i class="fab fa-linkedin-in fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Servicio de interés</label>
                            <select class="form-select" id="service">
                                <option value="">Seleccione un servicio</option>
                                <option value="cctv">CCTV</option>
                                <option value="portones">Portones Eléctricos</option>
                                <option value="cercos">Cercos Eléctricos</option>
                                <option value="alarmas">Sistemas de Alarmas</option>
                                <option value="web">Desarrollo Web</option>
                                <option value="sistemas">Desarrollo de Sistemas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <!--img src="https://via.placeholder.com/150x50?text=SegurTech" alt="SegurTech Logo" class="logo mb-3"-->
                    <img src="images/logo-bn.jpeg" alt="SegurTech Logo" class="logo">
                    <p>Soluciones Integrales de Seguridad y Tecnología</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h4 class="h5 mb-3">Enlaces rápidos</h4>
                    <ul class="list-unstyled">
                        <li><a href="#inicio" class="text-white text-decoration-none">Inicio</a></li>
                        <li><a href="#servicios" class="text-white text-decoration-none">Servicios</a></li>
                        <li><a href="#empresa" class="text-white text-decoration-none">Sobre Nosotros</a></li>
                        <li><a href="#testimonios" class="text-white text-decoration-none">Clientes</a></li>
                        <li><a href="#contacto" class="text-white text-decoration-none">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="h5 mb-3">Servicios</h4>
                    <ul class="list-unstyled">
                        <li>CCTV</li>
                        <li>Portones Eléctricos</li>
                        <li>Cercos Eléctricos</li>
                        <li>Sistemas de Alarmas</li>
                        <li>Desarrollo Web y Sistemas</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <p class="mb-0">&copy; 2023 SegurTech. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" title="Volver arriba">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Back to top button
        const backToTopButton = document.getElementById('backToTop');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
        
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu after click
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse.classList.contains('show')) {
                        const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                        bsCollapse.hide();
                    }
                }
            });
        });
        
        // Form submission
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Here you would typically send the form data to a server
                // For this example, we'll just show an alert
                alert('Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.');
                contactForm.reset();
            });
        }
    </script>
</body>
</html>