<!-- Heater -->
<?php
$pageTitle = "Easy Clean"; // Define el título de la página
include 'includes/header.php';
?>

<!-- Hero -->
<section class="hero d-flex align-items-center" style="min-height: 100vh;">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-8 col-lg-6"> <!-- Limita el ancho del texto -->
                <h3 class="display-4 text-start">Welcome to</h3>
                <h1 class="display-2 text-start" style="font-size: 4.5rem; line-height: 1.2;">Easy Clean</h1> <!-- Tamaño de fuente ajustado -->
                <p class="lead mb-4 text-start  py-1">Your trusted partner for professional cleaning services.</p>

                <div class="d-flex gap-3 flex-wrap"> <!-- Contenedor para los botones con espacio entre ellos -->
                    <a href="/views/contact.php" class="btn btn-light btn-lg text-secondary">Contact Us</a>
                    <a href="/views/services" class="btn btn-outline-light btn-lg text-secondary mobile-white-btn">View Services</a>
                </div>

            </div>
        </div>
    </div>

</section>


<!-- Services -->

<section id="services" class="py-5 bg-light" style="margin-top: 50px;">
    <div class="container text-center">
        <h2 class="text-secondary fw-bold">Our Services</h2>
        <p class="text-muted mb-4">Discover what Easy Clean can do for you.</p>
        <div class="row py-3">
            <div class="col-md-4 mb-4">
                <i class="fas fa-home fa-3x" style="color: #abdddc;"></i>
                <h5 class="mt-3">Residential Cleaning</h5> <!-- Añadí margen superior -->
                <p class="text-muted">Keep your home spotless with our expert cleaning team.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="fas fa-building fa-3x" style="color: #abdddc;"></i>
                <h5 class="mt-3">Commercial Cleaning</h5> <!-- Añadí margen superior -->
                <p class="text-muted">Professional cleaning solutions for businesses of all sizes.</p>
            </div>
            <div class="col-md-4 mb-4">
                <i class="fas fa-broom fa-3x" style="color: #abdddc;"></i>
                <h5 class="mt-3">Move In / Move Out Services</h5> <!-- Añadí margen superior -->
                <p class="text-muted">Ensure a fresh start with our move-in and move-out cleaning services.</p>
            </div>
        </div>
        <a href="/views/services.php" class="btn btn-outline-secondary">Learn More About Our Services</a>
    </div>
</section>

<!-- About Us -->
<section id="about" class="py-5" style="margin-top: 50px;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-secondary fw-bold">Why Choose Us</h2>
            <p class="text-muted py-4">Discover why Easy Clean is your trusted partner for all your cleaning needs.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                <img src="/images/general/whyChoseImage.png" alt="About Easy Clean" class="img-fluid rounded float-start">
            </div>
            <div class="col-md-6 order-md-1">
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mb-4">
                        <i class="fas fa-paw fa-2x me-3 custom-icon"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Pet-Friendly Services</h5>
                            <p class="text-muted mb-0">We prioritize the safety and comfort of your furry friends.</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center mb-4">
                        <i class="fas fa-leaf fa-2x me-3 custom-icon"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Eco-Friendly Products</h5>
                            <p class="text-muted mb-0">We use environmentally safe cleaning solutions for a greener planet.</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center mb-4">
                        <i class="fas fa-heart fa-2x me-3 custom-icon"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Cleaning as a Lifestyle</h5>
                            <p class="text-muted mb-0">Helping you create a clean and vibrant environment for a better life.</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center mb-4">
                        <i class="fas fa-hand-holding-heart fa-2x me-3 custom-icon"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Social Responsibility</h5>
                            <p class="text-muted mb-0">We support our community through responsible practices.</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-center mb-4">
                        <i class="fas fa-star fa-2x me-3 custom-icon"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Exceptional Customer Service</h5>
                            <p class="text-muted mb-0">Focused on quality, trust, and fair pricing for all clients.</p>
                        </div>
                    </li>
                </ul>
                <a href="/views/about.php" class=" btn btn-outline-secondary ms-5">Learn More About Us</a>
            </div>
        </div>
    </div>
</section>


<!-- WHAT PEOPLE ARE SAYING -->
<section id="testimonials" class="py-5 py-md-6 text-white " style="background: url('/images/general/testimonialsBg.png') center center/cover no-repeat; margin-top: 50px; ">
    <div class="container">
        <div class="row align-items-center">
            <!-- Título -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class=" mb-4 fw-bold">What People Are Saying</h2>
                <p class="text-white-60 text-secondary">Discover why our customers trust Easy Clean for all their cleaning needs. Here's what they have to say:</p>
            </div>
            <!-- Testimonios -->
            <div class="col-md-6">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                    <div class="carousel-inner">
                        <!-- Testimonio 1 -->
                        <div class="carousel-item active">
                            <blockquote class="blockquote">
                                <p class="mb-3">"They were fantastic!, I had them for two hours and both owners never stopped in two hours, money well spent."</p>
                                <footer class="blockquote-footer text-gray-50">Cody Macleod</footer>
                            </blockquote>
                        </div>
                        <!-- Testimonio 2 -->
                        <div class="carousel-item">
                            <blockquote class="blockquote">
                                <p class="mb-3">"Katty was very professional and efficient! we will definitely be re-booking again!"</p>
                                <footer class="blockquote-footer text-gray-50">Susan Gollop Fitzpatrick</footer>
                            </blockquote>
                        </div>
                        <!-- Testimonio 3 -->
                        <div class="carousel-item">
                            <blockquote class="blockquote">
                                <p class="mb-3">"It was such a delight to come home to a beautifully cleaned house thanks to Katty and Cynthia. Their attention to details is noticeable. I highly recommend them"</p>
                                <footer class="blockquote-footer text-gray-50">Lisa Doyle MacBain</footer>
                            </blockquote>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="join-us" class="py-5 text-center" style="margin-top: 50px; ">
    <div class="container">
        <h2 class="mb-4 text-secondary" style="font-size: 3.0rem;">Ready to Be Part of the Clean Revolution?</h2>
        <p class="lead mb-4" style="font-size: 1.2rem; color: #555;">Join us in making your space shine! Whether it's for your home or business, we're here to deliver the best cleaning services with care and dedication.</p>
        <a href="/views/contact.php" class="btn btn-outline-secondary btn-lg btn-custom">Contact Us</a>
    </div>
</section>




<!-- Banner de cookies -->
<section>
    <!-- Banner de cookies -->
    <div id="cookie-banner" class="cookie-banner">
        <div class="cookie-content">
            <p class="cookie-message">
                <strong>We care about your privacy</strong><br>
                This website uses cookies that are needed for the site to work properly and to get data on how you interact with it, as well as for marketing purposes. By accepting, you agree to the use of cookies for ads and analytics as described in our <a href="/views/privacy.php" target="_blank" class="cookie-link">Cookie Policy</a>.
            </p>
            <div class="cookie-buttons">
                <button id="accept-cookies" class="cookie-button accept">Accept</button>
                <button id="decline-cookies" class="cookie-button decline">Decline</button>
            </div>
        </div>
    </div>
</section>


<script>
    // Verifica si el usuario ya aceptó o rechazó las cookies
    function checkCookieConsent() {
        return localStorage.getItem('cookiesAccepted') !== null;
    }

    // Muestra el banner si el usuario no ha tomado una decisión
    function showCookieBanner() {
        const cookieBanner = document.getElementById('cookie-banner');
        if (!checkCookieConsent()) {
            cookieBanner.style.display = 'flex'; // Mostrar el banner
        }
    }

    // Oculta el banner y guarda la preferencia del usuario
    function hideCookieBanner() {
        const cookieBanner = document.getElementById('cookie-banner');
        cookieBanner.style.display = 'none'; // Ocultar el banner
    }

    // Aceptar cookies
    document.getElementById('accept-cookies').addEventListener('click', function() {
        localStorage.setItem('cookiesAccepted', 'true'); // Guardar preferencia
        hideCookieBanner();
    });

    // Rechazar cookies
    document.getElementById('decline-cookies').addEventListener('click', function() {
        localStorage.setItem('cookiesAccepted', 'false'); // Guardar preferencia
        hideCookieBanner();
    });

    // Mostrar el banner al cargar la página (solo si no hay decisión previa)
    document.addEventListener('DOMContentLoaded', showCookieBanner);
</script>

<!-- Footer -->
<?php
include 'includes/footer.php';
?>