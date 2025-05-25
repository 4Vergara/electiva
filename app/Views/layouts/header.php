<!DOCTYPE html>
<html lang="en">
<style>
.header-area .main-nav .nav {
    flex-basis: 70%;
    justify-content: flex-end;
    vertical-align: middle;
    margin-top: 15px;
    margin-right: 0px;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    position: relative;
    z-index: 999;
}

.nav {
    --bs-nav-link-padding-x: 1rem;
    --bs-nav-link-padding-y: 0.5rem;
    --bs-nav-link-font-weight: ;
    --bs-nav-link-color: var(--bs-link-color);
    --bs-nav-link-hover-color: var(--bs-link-hover-color);
    --bs-nav-link-disabled-color: #6c757d;
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

ul {
    margin-bottom: 0px;
}

ul, li {
    padding: 0;
    padding-left: 0px;
    margin: 0;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    list-style: none;
}
</style>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>WoOx Travel Bootstrap 5 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo RUTA_BASE; ?>assets/bootstrap/ccs/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo RUTA_BASE; ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo RUTA_BASE; ?>assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="<?php echo RUTA_BASE; ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo RUTA_BASE; ?>assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>


<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="<?php echo RUTA_BASE; ?>assets/images/hope_icon.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="deals.html">Deals</a></li>
                        <li><a href="reservation.html">Reservation</a></li>
                        <li><a href="reservation.html">Book Yours</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<body class="container-fluid">