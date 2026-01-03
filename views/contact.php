<?php
$pageTitle = "Contact"; // Define el título de la página
include '../includes/header.php';
?>
<!-- Recaptcha -->
<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
    function onSubmit(token) {
        document.getElementById("contactForm").submit();
    }
</script>

<body>
    <section class="hero"
        style="background-image: url('/images/general/bg.png'); background-size: cover; background-position: center;">
        <div class="container h-100 d-flex flex-column justify-content-center py-5">
            <!-- Hero Section -->
            <section class="contact-hero text-center">
                <div class="container">
                    <h1 class="mb-4">Contact Us</h1>
                    <p class="lead text-secondary">We'd love to hear from you! Get in touch for inquiries, questions, or
                        feedback.</p>
                </div>
            </section>

            <section class="text-center">
                <div class="container">
                    <main class="py-5 w-100">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-10 col-sm-12">
                                <div class="contact-form bg-white p-4 rounded shadow">
                                    <h2 class="text-center mb-4">Get in Touch</h2>
                                    <form action="/includes/process_form.php" method="POST" id="contactForm">
                                        <div class="row gy-3">
                                            <div class="col-md-6 col-12">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName"
                                                    placeholder="Enter your first name" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName"
                                                    placeholder="Enter your last name" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="tel" class="form-control" id="phone" name="phone"
                                                    placeholder="Enter your phone number" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Enter your email" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="service" class="form-label">Service</label>
                                                <select class="form-select" id="service" name="service" required>
                                                    <option value="" disabled selected>Select a service</option>
                                                    <option value="Business Cleaning">Business Cleaning</option>
                                                    <option value="Deep Cleaning">Deep Cleaning</option>
                                                    <option value="Move In/Move Out Cleaning">Move In/Move Out Cleaning
                                                    </option>
                                                    <option value="Weekly/Biweekly Cleaning">Weekly/Biweekly Cleaning
                                                    </option>
                                                    <option value="Additional Cleaning Services">Additional Cleaning
                                                        Services</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="message" class="form-label">How can we help you?</label>
                                                <textarea class="form-control" id="message" name="message" rows="5"
                                                    placeholder="Write your message here..." required></textarea>
                                            </div>


                                            <!-- Aceptar términos y condiciones -->
                                            <div class="col-12">
                                                <div class="form-check">

                                                    <label class="form-check-label" for="acceptTerms">
                                                        <input class="form-check-input" type="checkbox" id="acceptTerms"
                                                            required>
                                                        I accept the <a href="/privacy" target="_blank">terms and
                                                            conditions</a>
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Botón de envío -->
                                            <div class="col-12">
                                                <button class="g-recaptcha btn-custom px-4 py-2"
                                                    data-sitekey="6LeSOMYqAAAAAN28MBDLyxJYqjCaurDO5T7uAbMo"
                                                    data-callback='onSubmit' data-action='submit'>Submit
                                                </button>
                                            </div>



                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </section>
        </div>
    </section>

    <section class="contact-info py-5 bg-light">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h2>Contact Information</h2>
                    <p class="text-muted">Reach out to us through any of the following channels</p>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope custom-icon fa-2x mb-3 text-primary"></i>
                            <h5>Email</h5>
                            <p class="text-muted">info@easycleanca.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-phone custom-icon fa-2x mb-3 text-success"></i>
                            <h5>Phone</h5>
                            <p class="text-muted">+1 (902) 393-1032</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card shadow h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marker-alt custom-icon fa-2x mb-3 text-danger"></i>
                            <h5>Address</h5>
                            <p class="text-muted">Charlottetown, PE, Canada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>
</body>