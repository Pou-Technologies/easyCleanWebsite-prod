<!-- Header -->
<?php
$pageTitle = "About Us"; // Define el título de la página
include '../includes/header.php';
?>

<section class="hero" 
    style="
        background-image: url('/images/general/bg.png'); 
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat; 
        min-height: 100vh; 
        padding-top: 150px; /* Espaciado superior */
    ">
    <div class="container h-100 d-flex flex-column justify-content-center text-center">
        <div class="text-center mb-5">
            <h1 class="display-4 text-secondary">About Us</h1>
            <p class="lead text-muted">Discover our commitment to quality, sustainability, and community well-being.</p>
        </div>
        <div class="row align-items-center">
            <!-- Imagen decorativa -->
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 text-center">
                <img src="/images/general/kattyAbout.png" alt="About Us" class="img-fluid">
            </div>
            <!-- Misión y visión -->
            <div class="col-lg-6 col-md-12 text-start">
                <div class="mb-4">
                    <h3 class="text-secondary">Our Mission</h3>
                    <p class="text-muted">
                        To provide high-quality cleaning services that ensure spotless spaces using environmentally sustainable practices. We prioritize the well-being of children and pets while fostering a positive impact in the community.
                    </p>
                </div>
                <div>
                    <h3 class="text-secondary">Our Vision</h3>
                    <p class="text-muted">
                        To be recognized as a leading sustainable cleaning company in Canada, renowned for environmental responsibility, exceptional customer service, and positive contributions to the communities we serve.
                    </p>
                </div>
            </div>
        </div>
        <!-- Valores y compromiso -->
        <div class="row mt-5">
            <div class="col text-center">
                <h3 class="text-secondary">What Sets Us Apart</h3>
                <p class="text-muted">
                    At Easy Clean, we are committed to redefining cleaning services by combining innovation, sustainability, and care. We believe that a clean space is more than just aesthetics – it's about fostering healthier environments and creating meaningful connections with our clients and community.
                </p>
                <p class="text-secondary">KC Easy Clean Team</p>
            </div>
        </div>
    </div>   
</section>

<!-- Footer -->
<?php
include '../includes/footer.php';
?>
