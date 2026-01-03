<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
  <meta charset="UTF-8">
  <!-- META -->
  <meta name="description"
    content="Professional cleaning services in Charlottetown, PEI. EasyClean offers tailored cleaning solutions for homes and businesses. Book now for a spotless environment in Prince Edward Island!">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Pou Technologies, all rights reserved">
  <meta name="theme-color" content="">
  <title><?php echo isset($pageTitle) ? $pageTitle : "Easy Clean | Professional Cleaning Services in PEI"; ?></title>
  <!-- Canonical URL -->
  <link rel="canonical"
    href="https://www.easycleanca.com<?php echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>">

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle . " | Easy Clean" : "Easy Clean | Professional Cleaning Services in PEI"; ?>">
  <meta property="og:description"
    content="Professional cleaning services in Charlottetown, PEI. EasyClean offers tailored cleaning solutions for homes and businesses.">
  <meta property="og:image" content="https://www.easycleanca.com/images/logo/EasyCleanTransparent.png">
  <meta property="og:url"
    content="https://www.easycleanca.com<?php echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>">
  <meta property="og:type" content="website">

  <!-- Favicon -->
  <link rel="shortcut icon" href="/images/favicon/favicon.ico" type="image/x-icon">

  <!-- Schema Markup para SEO local -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Easy Clean",
      "image": "https://www.tudominio.com/images/logo.png",
      "description": "Professional cleaning services in Charlottetown, PEI.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "123 Main St",
        "addressLocality": "Charlottetown",
        "addressRegion": "PE",
        "postalCode": "C1A 1A1",
        "addressCountry": "CA"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "46.2382",
        "longitude": "-63.1311"
      },
      "telephone": "+1-902-393-1032",
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
        ],
        "opens": "08:00",
        "closes": "17:00"
      },
      "url": "https://www.easycleanca.com"
    }
    </script>
  <!-- Fin del Schema Markup -->


  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-HHVMFFGD7J"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-HHVMFFGD7J');
  </script>


  <!-- Google tag Pou Tech(gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZX65LCGWFB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-ZX65LCGWFB');
  </script>

  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,600;0,700;1,900&family=Rubik+Vinyl&display=swap"
    rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- CSS Stylesheet -->
  <link rel="stylesheet" href="../style/css/css.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute w-100">
    <div class="container">
      <!-- Logo ajustado para móviles -->
      <a class="navbar-brand" href="../index.php">
        <img src="/images/logo/EasyCleanTransparent.png" alt="EasyClean Logo" class="img-fluid"
          style="max-height: 100px;"> <!-- Ajusta el tamaño del logo -->
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link text-secondary" href="../index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-secondary" href="/services">Services</a></li>
          <li class="nav-item"><a class="nav-link text-secondary" href="/contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link text-secondary" href="/about">About</a></li>
        </ul>
      </div>
    </div>
  </nav>


</body>

</html>