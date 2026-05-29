<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://www.google-analytics.com; style-src 'self' 'unsafe-inline'; img-src 'self' data: https://www.google-analytics.com;">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRSoft - Soluciones de Software</title>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZR7E3D5KW3"></script>
    <script src="js/analytics.js"></script>
    
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">    
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .metrics-section{background:linear-gradient(135deg,#0f172a 0%,#1e293b 100%);padding:60px 0}
        .metrics-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr))}
        .metric-item{text-align:center;padding:32px 24px;position:relative}
        .metric-item:not(:last-child)::after{content:'';position:absolute;right:0;top:20%;height:60%;width:1px;background:rgba(255,255,255,.12)}
        .metric-number{display:block;font-size:clamp(2.2rem,4vw,3.2rem);font-weight:700;color:#4ade80;line-height:1;margin-bottom:10px;letter-spacing:-1px}
        .metric-label{display:block;font-size:.92rem;color:rgba(255,255,255,.6);letter-spacing:.04em;text-transform:uppercase;font-weight:500}
        @media(max-width:600px){
            .metrics-grid{grid-template-columns:repeat(2,1fr)}
            .metric-item::after{display:none!important}
            .metric-item:nth-child(odd){border-right:1px solid rgba(255,255,255,.12)}
            .metric-item:nth-child(1),.metric-item:nth-child(2){border-bottom:1px solid rgba(255,255,255,.12)}
        }
    </style>
</head>
<body>

    <nav>
        <img src="img/logo-wrsoft.png" alt="WRSoft Logo" class="nav-logo">
        <div class="nav-links">
            <a href="#servicios">Servicios</a>
            <a href="#como-funciona">¿Cómo funciona?</a>
            <a href="#planes">Planes</a>
            
            <a href="login" target="_blank" rel="noopener noreferrer" class="login-btn">Iniciar Sesión</a>
        </div>        
    </nav>

    <header class="hero">
        <div class="container-fluid hero-flex">
            <div class="hero-text">
                <h1>Impulsa tus ventas con <span>Catálogos Digitales Inteligentes</span></h1>
                <p class="subtitle">Automatizamos tu gestión comercial para que te enfoques en crecer con Tecnología de vanguardia, confianza absoluta y diseño comercial, <b>"Sin comisiones ni costos ocultos".</b></p>
                <a href="registro" class="btn-cta"><b>Crear mi catálogo gratis</b></a>
            </div>                    
            <div class="hero-image">                               
                <img src="img/catalogo-laptop.png" alt="Vista previa del catálogo en laptop">
            </div>
        </div>
    </header>

    <section id="metricas" class="metrics-section">
        <div class="container-fluid">
            <div class="metrics-grid">
                <div class="metric-item">
                    <span class="metric-number" data-target="150" data-suffix="+">0</span>
                    <span class="metric-label">Negocios activos</span>
                </div>
                <div class="metric-item">
                    <span class="metric-number" data-target="8500" data-suffix="+">0</span>
                    <span class="metric-label">Productos cargados</span>
                </div>
                <div class="metric-item">
                    <span class="metric-number" data-target="3200" data-suffix="+">0</span>
                    <span class="metric-label">Pedidos procesados</span>
                </div>
                <div class="metric-item">
                    <span class="metric-number" data-target="99" data-suffix="%">0</span>
                    <span class="metric-label">Uptime garantizado</span>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios">
        <div class="container-fluid">
            <h2 class="section-title">¿Por qué elegir WRSoft?</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <i class="fas fa-rocket"></i>
                    <h3>Velocidad Increíble</h3>
                    <p>Catálogos que cargan al instante, optimizados para cualquier dispositivo móvil.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Seguridad Total</h3>
                    <p>Tus datos protegidos con excelente arquitectura y backups automáticos constantes.</p>
                </div>
                <div class="benefit-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Automatización</h3>
                    <p>Pedidos al instante a través de WhatsApp.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="como-funciona" style="background: #ffffff;">
        <div class="container-fluid">
            <h2 class="section-title">Tu catálogo en solo 3 pasos</h2>
            <div class="steps-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Regístrate</h3>
                    <p>Crea tu cuenta empresarial en menos de 1 minuto.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Sube tus productos</h3>
                    <p>Carga fotos, precios y descripciones de forma masiva.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>¡Vende!</h3>
                    <p>Comparte tu link personalizado y recibe pedidos por WhatsApp.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <h2 class="section-title">Lo que dicen nuestros clientes</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p>"Desde que usamos WRSoft, nuestros pedidos por WhatsApp se triplicaron. La plataforma es súper amigable."</p>
                    <span class="author">— Maria D, Boutique Li</span>
                </div>
                <div class="testimonial-card">
                    <p>"La automatización del carrito de compras nos indica detalladamente lo que el cliente solicita."</p>
                    <span class="author">— Junior P, Tech Team ZMG</span>
                </div>
            </div>
        </div>
    </section>

    <section id="planes">
        <div class="container-fluid">
            <h2 class="section-title">Planes para cada etapa</h2>
            <div class="pricing-grid">
                <!-- Plan Emprendedor -->
                <div class="price-card">
                    <h3>Emprendedor</h3>
                    <div class="price">$0<span>/mes</span></div>
                    <ul>
                        <li>Hasta 20 productos</li>
                        <li>Pedidos por WhatsApp</li>
                        <li>Soporte vía email</li>
                    </ul>

                    <a href="javascript:void(0)" class="btn-secondary">Elegir Plan</a>
                </div>

                <div class="price-card featured">
                    <h3>Business Pro</h3>
                    <div class="price">$0<span>/mes</span></div>
                    <ul>
                        <li>Productos ilimitados</li>
                        <li>Panel de Analítica</li>
                        <li>Soporte prioritario 24/7</li>
                    </ul>
                    <a href="javascript:void(0)" class="btn-cta">Elegir Plan</a>
                </div>

                <div class="price-card">
                    <h3>Enterprise</h3>
                    <div class="price">Consultar</div>
                    <ul>
                        <li>Múltiples sucursales</li>
                        <li>API de Integración</li>
                        <li>Gerente de cuenta dedicado</li>
                    </ul>
                    <a href="javascript:void(0)" class="btn-secondary">Contactar</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div>
                <img src="img/logo-wrsoft.png" alt="WRSoft Logo" class="footer-logo">
                <p>Líderes en automatización administrativa y soluciones de software para el comercio moderno.</p>
                <div class="footer-social">
                    <a href="javascript:void(0)" style="cursor: default;" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/wrsoftware?igsh=MTdkaWs1Y2lqZTJydQ==" target="_blank" rel="noopener noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="javascript:void(0)" style="cursor: default;" title="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a href="javascript:void(0)" style="cursor: default;" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div>
                <h4>Enlaces</h4>
                <p><a href="javascript:void(0)" style="color: #888; text-decoration: none;">Términos y Condiciones</a></p>
                <p><a href="javascript:void(0)" style="color: #888; text-decoration: none;">Política de Privacidad</a></p>
                <p><a href="javascript:void(0)" style="color: #888; text-decoration: none;">Blog Técnico</a></p>
            </div>
            <div>
                <h4>Contacto</h4>
                <p>Soporte: info<span>&#64;</span>wrsoft.online</p>
                <p>Ventas: comercial<span>&#64;</span>wrsoft.online</p>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2026 WRSoft Software Solutions | Todos los derechos reservados.
        </div>
    </footer>

    <script>
        /* Nav - sombra al hacer scroll */
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            nav.style.boxShadow = window.scrollY > 10
                ? '0 4px 20px rgba(0,0,0,0.08)'
                : '0 2px 10px rgba(0,0,0,0.02)';
        });

        /* Scroll observer - beneficios, pasos, testimonios, planes */
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, i * 120);
                }
            });
        }, { threshold: 0.15 });

        document.querySelectorAll(
            '.benefit-card, .step, .testimonial-card, .price-card'
        ).forEach(el => observer.observe(el));

        /* Contador animado de métricas */
        (function(){
            function animateCounter(el){
                var target = parseInt(el.dataset.target, 10);
                var suffix = el.dataset.suffix || '';
                var duration = 1800;
                var start = performance.now();
                function ease(t){ return 1 - Math.pow(1 - t, 4); }
                function step(now){
                    var p = Math.min((now - start) / duration, 1);
                    el.textContent = Math.round(ease(p) * target).toLocaleString('es-VE') + suffix;
                    if(p < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
            }
            var metricObs = new IntersectionObserver(function(entries){
                entries.forEach(function(e){
                    if(e.isIntersecting){
                        e.target.querySelectorAll('.metric-number').forEach(animateCounter);
                        metricObs.unobserve(e.target);
                    }
                });
            }, { threshold: 0.3 });
            var s = document.getElementById('metricas');
            if(s) metricObs.observe(s);
        })();
    </script>
</body>
</html>