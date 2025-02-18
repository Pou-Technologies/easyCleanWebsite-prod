<!-- Header -->
<?php
$pageTitle = "Services"; // Define el título de la página
include '../includes/header.php';
?>



<!-- Hero -->

<section class="hero" style="background-image: url('/images/general/bg.png'); background-size: cover; background-position: center;">
        <div class="container h-100 d-flex flex-column justify-content-center py-5">
            <!-- Hero Section -->
            <section class="contact-hero text-center">
                <div class="container">
                <h1 class="display-4 text-secondary mb-3">Welcome to Our Services</h1>
        <p class="lead text-black-50 mb-4">Explore our premium cleaning solutions tailored to meet your needs.</p>
        <a href="#services" class="btn btn-outline-light btn-lg text-secondary">View Services</a>
                </div>
            </section>
        </div>


</section>

<!-- CARDS -->



<section>
    <main class="py-5" id="services" style="background-image: url('/images/general/background.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row gy-4">
                <!-- Service Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card shadow text-center h-100" style="background-image: url('/images/general/bg.png'); background-size: cover; background-position: center;">
                        <img src="/images/general/businessImage.png" alt="Business Cleaning" class="card-img-top service-image">
                        <div class="card-body d-flex flex-column">
                            <h3 class="text-white fw-bold">Business Cleaning</h3>
                            <p class="service-card-text flex-grow-1">Keep your workplace spotless and professional for a productive environment.</p>
                            <button class="btn btn-outline-light btn-lg text-secondary" data-bs-toggle="modal" data-bs-target="#businessCleaningModal">Learn More</button>
                        </div>
                    </div>
                </div>
                <!-- Service Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card shadow text-center h-100" style="background-image: url('/images/general/bg.png'); background-size: cover; background-position: center;">
                        <img src="/images/general/deepImage.png" alt="Deep Cleaning" class="card-img-top service-image">
                        <div class="card-body d-flex flex-column">
                            <h3 class="text-white fw-bold">Deep Cleaning</h3>
                            <p class="service-card-text flex-grow-1">Get a comprehensive clean for every nook and cranny.</p>
                            <button class="btn btn-outline-light btn-lg text-secondary" data-bs-toggle="modal" data-bs-target="#deepCleaningModal">Learn More</button>
                        </div>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card shadow text-center h-100" style="background-image: url('/images/general/bg.png'); background-size: cover; background-position: center;">
                        <img src="/images/general/moveImage.png" alt="Move In  Cleaning" class="card-img-top service-image">
                        <div class="card-body d-flex flex-column">
                            <h3 class="text-white fw-bold">Move In/Out Cleaning</h3>
                            <p class="service-card-text flex-grow-1">A smooth transition with our thorough cleaning services before or after moving.</p>
                            <button class="btn btn-outline-light btn-lg text-secondary" data-bs-toggle="modal" data-bs-target="#moveInMoveOutModal">Learn More</button>
                        </div>
                    </div>
                </div>
                

                <!-- Service Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card service-card shadow text-center h-100" style="background-image: url('/images/general/bg.png'); background-size: cover; background-position: center;">
                        <img src="/images/general/biImage.png" alt="Business Cleaning" class="card-img-top service-image">
                        <div class="card-body d-flex flex-column">
                            <h3 class="text-white fw-bold">Regular Cleaning Services</h3>
                            <p class="service-card-text flex-grow-1">Consistently clean space with our regular cleaning plans tailored to your schedule.</p>
                            <button class="btn btn-outline-light btn-lg text-secondary" data-bs-toggle="modal" data-bs-target="#weeklyCleaningModal">Learn More</button>
                        </div>
                    </div>
                </div>

                <!-- Repite para las otras tarjetas -->
            </div>
        </div>
    </main>
</section>



<!-- Modals Section -->


<!-- Modal 1: Business Cleaning -->
<div class="modal fade" id="businessCleaningModal" tabindex="-1" aria-labelledby="businessCleaningLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title fw-bold" id="businessCleaningLabel">Business Cleaning</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/images/general/businessImage.png" class="img-fluid rounded mb-3" alt="Business Cleaning">
                <p>
                    Business cleaning is an essential service that ensures a clean, organized, and hygienic environment in workplaces, enhancing productivity and promoting a positive impression on clients and employees. At Easyclean, we specialize in delivering comprehensive cleaning solutions tailored to businesses.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2: Deep Cleaning -->

<div class="modal fade" id="deepCleaningModal" tabindex="-1" aria-labelledby="deepCleaningLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title fw-bold" id="deepCleaningLabel">Deep Cleaning</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/images/general/deepImage.png" class="img-fluid rounded mb-3" alt="Deep Cleaning">
                <p>
                Deep cleaning is a comprehensive service designed to tackle every corner of your space, 
                ensuring it’s spotless and free from dirt, grime, and hidden allergens. This service 
                is perfect as a starting point before beginning regular cleaning schedules or for preparing 
                your home or office for special occasions. With deep cleaning, we address areas often overlooked,
                 providing a refreshed and revitalized environment.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal 3: Move in/move out -->



<div class="modal fade" id="moveInMoveOutModal" tabindex="-1" aria-labelledby="moveInMoveOutModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title fw-bold" id="moveInMoveOutModal">Move In/Out Services</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/images/general/moveImage.png" class="img-fluid rounded mb-3" alt="Deep Cleaning">
                <p>
                Our move-in/move-out cleaning service is ideal for ensuring a fresh start in your 
                new space or leaving your old one in pristine condition. We clean every surface, 
                from floors to fixtures, removing dust, stains, and residues to make the transition
                 smoother and stress-free. This service is perfect for tenants, landlords, or homeowners
                  who value a spotless and welcoming space.

                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal 4: Regular Cleaning Services -->
<div class="modal fade" id="weeklyCleaningModal" tabindex="-1" aria-labelledby="weeklyCleaningModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title fw-bold" id="weeklyCleaningModal">Regular Cleaning Services</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/images/general/biImage.png" class="img-fluid rounded mb-3" alt="weeklyCleaningModal">
                <p>
                Regular cleaning services are tailored to maintain your space in top condition, 
                whether weekly or bi-weekly. We handle the essentials like vacuuming, dusting, 
                sanitizing, and tidying up to ensure a clean and comfortable environment. Regular 
                cleaning not only saves you time but also keeps your space consistently organized and inviting.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>





<!-- Modal 5: Deep Cleaning -->
<div class="modal fade" id="additionalServicesModal" tabindex="-1" aria-labelledby="additionalServicesModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white">
                <h5 class="modal-title fw-bold" id="additionalServicesModal">Deep Cleaning</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="/images/general/additionalImage.png" class="img-fluid rounded mb-3" alt="additionalServicesModal">
                <p>
                    Deep cleaning goes beyond the surface. Our team thoroughly cleans every corner of your home or office, focusing on hard-to-reach areas, hidden dirt, and stubborn stains. Perfect for seasonal cleaning or as a preparation for special events.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    
<!-- Contact -->
<section id="join-us" class="py-5 text-center" style="margin-top: 50px;">
    <div class="container">
        <h2 class="mb-4 text-secondary" style="font-size: 2.5rem;">Looking for Special Services?</h2>
        <p class="lead mb-4" style="font-size: 1rem; color: #555;">Join us in making your space shine!</p>
        <a href="/views/contact.php" class="btn btn-outline-secondary btn-lg btn-custom">Contact Us</a>
    </div>
</section>


<!-- Footer -->
<?php
include '../includes/footer.php';
?>