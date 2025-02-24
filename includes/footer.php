<footer class="bg-white text-secondary py-4 border-top">
    <div class="container">
        <div class="row">
            <!-- Información de la compañía -->
            <div class="col-md-6 mb-3">
                <h5 class="fw-bold text-secondary">Easy Clean</h5>
                <div class="d-flex">
                    <a href="/503" class="text-secondary text-decoration-none me-3">FAQs</a>
                    <span class="text-secondary mx-2">|</span>
                    <a href="/privacy" class="text-secondary text-decoration-none me-3">Privacy</a>
                    <span class="text-secondary mx-2">|</span>
                    <a href="/copyright" class="text-secondary text-decoration-none">Copyright © 2025 Easy Clean. All rights reserved.</a>
                </div>
                
                <p class="mb-0 py-4" style="font-size: 0.75rem; color: #6c757d;">
                    Website created by 
                    <a class="text-secondary fw-bold" href="https://poutechnologies.com" target="_blank">Pou Technologies</a>.
                    version 1.0.3
                </p>


            </div>
            <!-- Redes Sociales -->
            <div class="col-md-6 text-md-end d-flex align-items-center justify-content-md-end gap-3">
                <a href="https://www.facebook.com/easycleanca" class="text-secondary text-decoration-none" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <!-- <a href="https://twitter.com" class="text-secondary text-decoration-none" target="_blank" aria-label="Twitter">
                    <i class="fab fa-twitter fa-lg"></i>
                </a> -->
                <a href="https://www.instagram.com/easy.cleanca?igsh=MTA1ajlqNWRvMjBmNw==" class="text-secondary text-decoration-none" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
                <a href="https://www.tiktok.com/@easycleanca" class="text-secondary text-decoration-none" target="_blank" aria-label="TikTok">
                    <i class="fab fa-tiktok fa-lg"></i>
                </a>
            </div>
        </div>
    </div>
</footer>



<!-- Bundle JS (Bootstrap y Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Otras librerías (como three.js) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<!-- Cookies -->
<script src="../style/js/cookies.js"> </script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);

        // Verifica el estado del formulario
        const formStatus = urlParams.get('form_status');

        switch (formStatus) {
            case 'success':
                Swal.fire({
                    title: "Message Sent!",
                    text: "Thank you for reaching out. We will get back to you soon.",
                    icon: "success"
                });
                break;

            case 'error':
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: '<a href="pages/faqs.html">Why do I have this issue?</a>'
                });
                break;

            case 'missing':
                Swal.fire({
                    title: "Are there any fields left unfilled?",
                    text: "Please fill in all required fields before submitting.",
                    icon: "warning",
                    confirmButtonText: "OK"
                });
                break;

            case 'captcha_error':
                Swal.fire({
                    title: "Captcha Not Verified",
                    text: "Please complete the captcha verification before submitting.",
                    icon: "warning",
                    confirmButtonText: "OK"
                });
                break;

            default:
                // Maneja estados desconocidos o faltantes (opcional)
                console.warn("No valid form_status provided.");
                break;
        }
    });
</script>


</body>

</html>