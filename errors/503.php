<!-- Header -->
<?php
$pageTitle = "503"; // Define el título de la página
include '../includes/header.php';
?>

<section class="hero"
    style="
        background-image: url('/images/general/bg.png'); 
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat; 
        min-height: 100vh; 
        padding-top: 150px; /* Separación superior */
    ">
    <div class="container h-100 d-flex flex-column justify-content-center   py-5">
        <!-- Hero Section -->
        <section class="text-center">
            <div class="container">
                <!-- 503 -->
                <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-center py-5">
                    <!-- Hero Section -->
                    <section class="contact-hero text-center">
                        <div class="error-container">
                            <i class="fas fa-tools error-icon mb-4"></i>
                            <h1 class="display-4">503</h1>
                            <p class="lead text-secondary">This page is currently undergoing maintenance. Please check back later!</p>
                            <p class="text-secondary">If you need assistance, feel free to <a href="../views/contact.php">contact us</a>.</p>
                            <a href="/" class="btn btn-secondary mt-3"><i class="fas fa-home"></i> Return to Home</a>
                        </div>
                    </section>

                </div>

            </div>
        </section>

    </div>

</section>
<!-- Footer -->
<?php
include '../includes/footer.php';
?>