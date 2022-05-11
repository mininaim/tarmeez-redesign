<!doctype html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title> Tarmeez </title>

    <!-- manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/ico/favicon-16x16.png">
    <link rel="mask-icon" href="assets/ico/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-config" content="assets/ico/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Description -->
    <meta name="description"
        content="A Saudi ICT Company, focusing on Digital Economy enablement and Digital Transformation strategy.">

    <!-- Twitter Card & Facebook Open Graph -->
    <meta name="twitter:site" content="@tarmeez">
    <meta name="twitter:creator" content="@tarmeez">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tarmeez">
    <meta name="twitter:description"
        content="A Saudi ICT Company, focusing on Digital Economy enablement and Digital Transformation strategy.">
    <meta name="twitter:image" content="http://tarmeez.com/assets/upload/card/tarmeez.png">

    <meta property="og:url" content="http://tarmeez.com/">
    <meta property="og:title" content="Tarmeez">
    <meta property="og:description"
        content="A Saudi ICT Company, focusing on Digital Economy enablement and Digital Transformation strategy.">
    <meta property="og:image" content="http://tarmeez.com/assets/upload/card/tarmeez.png">
    <meta property="og:image:secure_url" content="http://tarmeez.com/assets/upload/card/tarmeez.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="418">

    <link href="assets/css/bundle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons&display=swap" rel="stylesheet" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-224743391-1">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-224743391-1');
    </script>

    <script type="module" src="https://unpkg.com/ninja-keys?module"></script>

    <style>
    body.dark {
        background-color: rgb(30, 34, 39);
        color: #fff;
    }

    body.dark code[class*=language-],
    body.dark table tbody>tr:nth-child(odd)>td,
    body.dark table tbody>tr:nth-child(odd)>th {
        background: #282c34
    }

    body.dark .navbar-light .navbar-nav .nav-link {
        color: #fff !important
    }


    body.dark .navbar-light .navbar-nav .nav-link:focus,
    body.dark .navbar-light .navbar-nav .nav-link:hover {
        color: #b1a693 !important
    }

    body.dark .btn-outline-dark {
        color: #b1a693;
        background-color: #343a40;
        border-color: #343a40;
    }

    body.dark .btn-outline-dark:hover {
        color: #fff;
        background: #343a40 !important;

        border-color: #343a40;
    }



    body.dark .navbar.affix {
        width: 100%;
        position: fixed;
        top: 0;
        transition: all .3s ease;
        background-color: rgb(23, 26, 31);
        color: #fff;

        z-index: 99999 !important;
    }

    body.dark .about {

        background-color: rgb(30, 34, 39);
        color: #b1a693
    }

    body.dark .about h2 {
        color: white
    }
    </style>



</head>

<body>




    <div class="alert text-center cookiealert" role="alert">
        <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you get the best experience on our website.

        <button type="button" class="btn btn-outline-light btn-sm acceptcookies" title="I agree">
            I Agree
        </button>
    </div>



    <!-- Navbar -->
    <nav class="navbar navbar-light flex-column flex-md-row bd-navbar" id="navbar">
        <div class="container">
            <a class="navbar-brand mr-0 mr-md-2" data-scroll href="#navbar" style="position:relative">
                <img src="assets/img/logo.svg" class="d-block" alt="Tarmeez">
            </a>
            <div class="navbar-nav-scroll">
                <ul class="navbar-nav bd-navbar-nav flex-row">
                    <li class="nav-item">
                        <a class="nav-link" data-scroll href="#about" title="About">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll href="#services" title="Services">Services</a>
                    </li>
                    <li class="nav-item" hidden>
                        <a class="nav-link" data-scroll href="#portfolio" title="Portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll href="#clients" title="Clients">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll href="#values" title="Values">Values</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-scroll href="#contact" title="Contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-arabic" target="_self" href="arabic/" title="العربية">
                            العربية
                        </a>
                    </li>
                    <li class="nav-item ml-3">
                        <a data-scroll href="#contact" class="btn btn-outline-dark btn-radius"
                            href="http://bit.ly/tarmeez_pro" title="Start Your Project">
                            Start your Project
                        </a>
                    </li>

                    <!-- <li class="nav-item ml-3">

                        <a class="nav-link command" href="#"
                            onclick="localStorage.setItem('mode', (localStorage.getItem('mode') || 'dark') === 'dark' ? 'light' : 'dark'); localStorage.getItem('mode') === 'dark' ? document.querySelector('body').classList.add('dark') : document.querySelector('body').classList.remove('dark')"
                            title="Dark/light">


                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px"
                                viewBox="0 0 24 24" width="24px" fill="currentColor">
                                <rect fill="none" height="24" width="24" />
                                <path
                                    d="M12,9c1.65,0,3,1.35,3,3s-1.35,3-3,3s-3-1.35-3-3S10.35,9,12,9 M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5 S14.76,7,12,7L12,7z M2,13l2,0c0.55,0,1-0.45,1-1s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S1.45,13,2,13z M20,13l2,0c0.55,0,1-0.45,1-1 s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S19.45,13,20,13z M11,2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V2c0-0.55-0.45-1-1-1S11,1.45,11,2z M11,20v2c0,0.55,0.45,1,1,1s1-0.45,1-1v-2c0-0.55-0.45-1-1-1C11.45,19,11,19.45,11,20z M5.99,4.58c-0.39-0.39-1.03-0.39-1.41,0 c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0s0.39-1.03,0-1.41L5.99,4.58z M18.36,16.95 c-0.39-0.39-1.03-0.39-1.41,0c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0c0.39-0.39,0.39-1.03,0-1.41 L18.36,16.95z M19.42,5.99c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06c-0.39,0.39-0.39,1.03,0,1.41 s1.03,0.39,1.41,0L19.42,5.99z M7.05,18.36c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06 c-0.39,0.39-0.39,1.03,0,1.41s1.03,0.39,1.41,0L7.05,18.36z" />
                            </svg>
                        </a>

                    </li> -->

                </ul>
            </div>
        </div>
    </nav>
    <!-- #Navbar -->

    <section id="particles-js"></section>
    <!-- #Particles -->

    <!-- Hero -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="d-flex align-items-center text-center row" style="height: 100vh">
                <div class="p-2 col-sm-10 offset-sm-1">
                    <h1 class="display-3">Molding your ideas into smart solutions</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- #Hero -->

    <!-- About -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <span class="card-img p-2">
                            <i data-feather="type" class="icon-resized"></i>
                        </span>
                        <div class="card-body">
                            <h2 class="card-title">about</h2>
                            <p class="card-text mt-4">
                                A Saudi ICT Company, focusing on Digital Economy enablement and Digital Transformation
                                strategy.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <span class="card-img p-2">
                            <i data-feather="copy" class="icon-resized"></i>
                        </span>
                        <div class="card-body">
                            <h2 class="card-title">vision</h2>
                            <p class="card-text mt-4">
                                To become the leading performer in MENA region, by introducing market defining products.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <span class="card-img p-2">
                            <i data-feather="target" class="icon-resized"></i>
                        </span>
                        <div class="card-body">
                            <h2 class="card-title">mission</h2>
                            <p class="card-text mt-4">
                                We believe that creating digital products shouldn't take away the essence of human
                                nature.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #About -->

    <!-- Services -->
    <section class="services" id="services">
        <!-- shape -->
        <div class="shape">
            <img class="mx-auto img-fluid" src="assets/upload/shapes/dots-light.svg" alt="">
        </div>
        <!-- #shape -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="headline">
                        <h1>our services</h1>
                        <p>Here is a glimpse of what we can do</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">

                <div class="col-xs-6 col">
                    <div class="card bg-none border">
                        <span class="card-img">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-app-indicator icon-resized" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>

                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">mobile development</h4>
                            <p class="card-text mt-4">Developing iOS & Android Native and Hybrid Apps</p>
                        </div>
                    </div>
                </div>


                <div class="col-xs-6 col">
                    <div class="card bg-none border">
                        <span class="card-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-back icon-resized" viewBox="0 0 16 16">
                                <path
                                    d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                            </svg>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">web development</h4>
                            <p class="card-text mt-4">Web application, Portals, Platforms and Backed system</p>
                        </div>
                    </div>
                </div>



                <div class="col-xs-6 col">
                    <div class="card bg-none border">
                        <span class="card-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-vector-pen icon-resized" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828L10.646.646zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z" />
                                <path fill-rule="evenodd"
                                    d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086.086-.026z" />
                            </svg>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">interaction design</h4>
                            <p class="card-text mt-4">Building User journey, User Experience and User Interface</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-5">


                <div class="col-xs-6 col">
                    <div class="card bg-none border">
                        <span class="card-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-fingerprint icon-resized" viewBox="0 0 16 16">
                                <path
                                    d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z" />
                                <path
                                    d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332c0 .409-.022.816-.066 1.221A.5.5 0 0 1 6 8.447c.04-.37.06-.742.06-1.115V7Zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8Zm-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329Z" />
                                <path
                                    d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334Zm.3 1.67a.5.5 0 0 1 .449.546 10.72 10.72 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.72 9.72 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z" />
                                <path
                                    d="M3.902 4.222a4.996 4.996 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 3.996 3.996 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556Zm6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705ZM3.68 5.842a.5.5 0 0 1 .422.568c-.029.192-.044.39-.044.59 0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.531 6.531 0 0 0 3.058 7c0-.25.019-.496.054-.736a.5.5 0 0 1 .568-.422Zm8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.51 10.51 0 0 0 .584-2.678.5.5 0 0 1 .54-.456Z" />
                                <path
                                    d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865Zm-.89 1.257a.5.5 0 0 1 .04.706A5.478 5.478 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346Zm12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49Z" />
                            </svg>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">cyber security</h4>
                            <p class="card-text mt-4">Protect, Defense and Assurance, Risk and Policies compliance</p>
                        </div>
                    </div>
                </div>



                <div class="col-xs-6 col">
                    <div class="card bg-none border">
                        <span class="card-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-easel icon-resized" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a.5.5 0 0 1 .473.337L9.046 2H14a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1.85l1.323 3.837a.5.5 0 1 1-.946.326L11.092 11H8.5v3a.5.5 0 0 1-1 0v-3H4.908l-1.435 4.163a.5.5 0 1 1-.946-.326L3.85 11H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4.954L7.527.337A.5.5 0 0 1 8 0zM2 3v7h12V3H2z" />
                            </svg>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">IT Consultation</h4>
                            <p class="card-text mt-4">Plan, Best practices, Managed Services, Execution</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col">
                    <div class="card bg-none border">
                        <span class="card-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bag-heart icon-resized" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5Zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0ZM14 14V5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                            </svg>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">eCommerce</h4>
                            <p class="card-text mt-4">Online Stores, Payment Integration</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-5" hidden>
                <div class="col-sm-4">
                    <div class="card">
                        <span class="card-img">
                            <i data-feather="smartphone" class="icon-resized"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">mobile development</h4>
                            <p class="card-text mt-4">IOS, Android</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <span class="card-img">
                            <i data-feather="layers" class="icon-resized"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">interaction design</h4>
                            <p class="card-text mt-4">User Experience and User Interfaces</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <span class="card-img">
                            <i data-feather="command" class="icon-resized"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">web development</h4>
                            <p class="card-text mt-4">Web applications, Backend system and Portals</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5" hidden>
                <div class="col-sm-4">
                    <div class="card">
                        <span class="card-img">
                            <i data-feather="eye" class="icon-resized"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">digital branding</h4>
                            <p class="card-text mt-4">We build you digital components</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <span class="card-img">
                            <i data-feather="award" class="icon-resized"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">quality assurance</h4>
                            <p class="card-text mt-4">Testing products whether mobile or web apps</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <span class="card-img">
                            <i data-feather="message-square" class="icon-resized"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title mt-3">dedicated support</h4>
                            <p class="card-text mt-4">Our support staff are fast and responsive</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #Services -->

    <hr class="hr d-none d-sm-block">

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio" hidden>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="headline">
                        <h1>Portfolio</h1>
                        <p>Get to know us through what we do best</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">

            <div class="row">
                <div class="col text-center">

                    <div class="typewriter">
                        <h4 class="text-uppercas"
                            style="background:#fff4f1;color:#464449;letter-spacing: .4rem;font-weight:200"><i> something
                                exciting is coming soon</i></h4>
                    </div>

                </div>
            </div>

            <div id="mixitup" hidden>
                <div class="mixupdata">
                    <ul id="og-grid" class="og-grid list-unstyled">

                        <!-- portfolio-item 01 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-01" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/01/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/01/slide-2.png" alt="">
                                                    </div>

                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls-01" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-01" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/01/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                almuaiqly app
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="https://itunes.apple.com/us/app/almuaiqly-alshykh-mahr-alm/id512297210?mt=8" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        The official playlist of holy Quran by the reciter Maher AlMuaiqly, main feature is simplicity with high quality audios.
                                    </p>
                                    <hr class="my-4">
                                    <dl class="row text-uppercase">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9 text-uppercase">ios, android</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">tarmeez</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2011</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/01/cover-t.jpg' class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 01 -->

                        <!-- portfolio-item 02 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-02" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/02/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/02/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/02/slide-3.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/02/slide-4.png" alt="">
                                                    </div>

                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls-02" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-02" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/02/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                CMA
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="https://itunes.apple.com/us/app/capital-market-authority/id508767560?mt=8" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="https://play.google.com/store/apps/details?id=sa.org.cma" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="https://www.microsoft.com/en-us/store/p/capital-market-authority/9nblggh0l46c" target="_blank" rel="noopener" title="Windows Phone">
                                                        <i class="fa fa-windows"></i> windows phone
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        The official application of National Numbering plan v2 to update zone codes of all regions in Saudi Arabia.
                                    </p>
                                    <hr class="my-4">
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9 text-uppercase">ios, android, BB, windows</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">Capital Market Authority</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2015</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/02/cover-t.jpg' class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 02 -->

                        <!-- portfolio-item 03 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-03" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/03/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/03/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/03/slide-3.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/03/slide-4.png" alt="">
                                                    </div>

                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls-03" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-03" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/03/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                historic jeddah
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="https://itunes.apple.com/us/app/capital-market-authority/id508767560?mt=8" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="https://play.google.com/store/apps/details?id=sa.org.cma" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        The official app for Historic Jeddah Event (Kuna Keda).
                                    </p>
                                    <hr class="my-4">
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9 text-uppercase">ios, android</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">benchmark</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2016</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/03/cover-t.jpg' class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 03 -->

                        <!-- portfolio-item 04 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-04" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/04/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/04/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/04/slide-3.png" alt="">
                                                    </div>

                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls-04" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-04" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/04/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                hwatef app
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="windows Phone">
                                                        <i class="fa fa-windows"></i> windows phone
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        A phone directory for all Saudi restaurants.
                                    </p>
                                    <hr class="my-4">
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9 text-uppercase">ios, android, BB, windows</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">hwatef</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2011</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/04/cover-t.jpg' class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 04 -->

                        <!-- portfolio-item 05 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-05" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/05/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/05/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/05/slide-3.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/05/slide-4.png" alt="">
                                                    </div>

                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls-05" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-05" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/05/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                lammt
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="windows Phone">
                                                        <i class="fa fa-windows"></i> windows phone
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        
                                    </p>
                                    <hr class="my-4" hidden>
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9 text-uppercase">ios, android, web</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">lammat</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2014</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/05/cover-t.jpg' class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 05 -->

                        <!-- portfolio-item 06 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-06" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/06/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/06/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/06/slide-3.png" alt="">
                                                    </div>

                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls-06" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-06" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/06/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                magic recorder
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="windows Phone">
                                                        <i class="fa fa-windows"></i> windows phone
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        
                                    </p>
                                    <hr class="my-4" hidden>
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9">ios</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">tarmeez</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2014</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/06/cover-t.jpg' class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 06 -->

                        <!-- portfolio-item 07 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-07" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/07/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/07/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/07/slide-3.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/07/slide-4.png" alt="">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls-07" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-07" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/07/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                masajid app
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="windows Phone">
                                                        <i class="fa fa-windows"></i> windows phone
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        
                                    </p>
                                    <hr class="my-4" hidden>
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9 text-uppercase">ios, android, windows</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">tarmeez</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2015</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/07/cover-t.jpg' class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 07 -->

                        <!-- portfolio-item 08 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-08" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/08/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/08/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/08/slide-3.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/08/slide-4.png" alt="">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls-08" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-08" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/08/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                modah app
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="windows Phone">
                                                        <i class="fa fa-windows"></i> windows phone
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        
                                    </p>
                                    <hr class="my-4" hidden>
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9 text-uppercase">ios, android</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">modah cafe</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2015</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/08/cover-t.jpg' class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 08 -->



                        <!-- portfolio-item 010 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-010" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/010/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/010/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/010/slide-3.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/010/slide-4.png" alt="">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls-010" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-010" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/010/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                safeer
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="windows Phone">
                                                        <i class="fa fa-windows"></i> windows phone
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        
                                    </p>
                                    <hr class="my-4" hidden>
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9 text-uppercase">ios, android</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">alrajhi bank</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2016</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/010/cover-t.jpg'
                                        class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 010 -->

                        <!-- portfolio-item 011 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-011" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/011/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/011/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/011/slide-3.png" alt="">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls-011" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-011" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/011/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                SASCA
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="windows Phone">
                                                        <i class="fa fa-windows"></i> windows phone
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        
                                    </p>
                                    <hr class="my-4" hidden>
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9">ios</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">SASCA</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2017</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/011/cover-t.jpg'
                                        class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 011 -->

                        <!-- portfolio-item 012 -->
                        <li class='mix'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-012" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/012/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/012/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/012/slide-3.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/012/slide-4.png" alt="">
                                                    </div>
                                                </div>
                                                
                                                <a class="carousel-control-prev" href="#carouselExampleControls-012" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-012" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/012/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                tebt
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="windows Phone">
                                                        <i class="fa fa-windows"></i> windows phone
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        
                                    </p>
                                    <hr class="my-4" hidden>
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9 text-uppercase">ios, android</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">thiqah</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2017</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/012/cover-t.jpg'
                                        class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 012 -->

                        <!-- portfolio-item 013 -->
                        <li class='mix portfolio-item-013'>
                            <a href='#' data-title='' data-owl='
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8">
                                    <div class="marvel-device iphone8 gold">
                                        <div class="top-bar"></div>
                                        <div class="sleep"></div>
                                        <div class="volume"></div>
                                        <div class="camera"></div>
                                        <div class="sensor"></div>
                                        <div class="speaker"></div>
                                        <div class="screen">
                                            <div id="carouselExampleControls-013" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/013/slide-1.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/013/slide-2.png" alt="">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="assets/upload/portfolio/013/slide-3.png" alt="">
                                                    </div>
                                                </div>

                                                <a class="carousel-control-prev" href="#carouselExampleControls-013" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls-013" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="home"></div>
                                        <div class="bottom-bar"></div>
                                    </div>
                                </div>
                            </div>
                            ' data-description='
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3 rounded" src="assets/upload/portfolio/013/logo.png" alt="" style="width:5rem">
                                        <div class="media-body">
                                            <h2 class="mt-0">
                                                updater app
                                            </h2>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Apple Store">
                                                        <i class="fa fa-apple"></i> apple store
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="Google Play">
                                                        <i class="fa fa-android"></i> google play
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="btn btn-sm btn-secondary" href="" target="_blank" rel="noopener" title="windows Phone">
                                                        <i class="fa fa-windows"></i> windows phone
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <p>
                                        
                                    </p>
                                    <hr class="my-4" hidden>
                                    <dl class="row text-capitalize">
                                        <dt class="col-sm-3">platforms</dt>
                                        <dd class="col-sm-9 text-uppercase">ios, android</dd>

                                        <dt class="col-sm-3">client</dt>
                                        <dd class="col-sm-9">citc</dd>

                                        <dt class="col-sm-3">year</dt>
                                        <dd class="col-sm-9">2013</dd>
                                    </dl>
                                </div>
                            '>
                                <div class='image-cover'>
                                    <img src='assets/upload/portfolio/013/cover-t.jpg'
                                        class='img-fluid mx-auto d-block'>
                                </div>
                            </a>
                        </li><!-- #portfolio-item 013 -->

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- #Portfolio -->
    <hr class="hr">

    <!-- Clients -->
    <section class="clients" id="clients">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="headline">
                        <h1>our clients</h1>
                        <p>We colaborate with forward thinking organisations</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 no-gutters">


                <?php for($i = 1; $i < 31; $i++) { ?>
                <div class="col-4 col-sm-2">
                    <div class="my-3">
                        <img src="clients/client-0<?php echo $i; ?>.png" alt="" class="img-fluid mx-auto">
                    </div>
                </div>
                <?php } ?>
            </div>


            <!-- <div class="row mt-5" hidden>

                <div class="col-xs-6 col-sm-3 element">
                    
                        <img class="mx-auto img-fluid" src="assets/upload/clients/new/02.png" alt="">
           
                </div>
                <div class="col-xs-6 col-sm-3 element">
                  
                        <img class="mx-auto img-fluid" src="assets/upload/clients/new/03.png" alt="">
                    
                </div>
                <div class="col-xs-6 col-sm-3 element">
                 
                        <img class="mx-auto img-fluid" src="assets/upload/clients/new/04.png" alt="">
               
                </div>
                <div class="col-xs-6 col-sm-3 element">
                  
                        <img class="mx-auto img-fluid" src="assets/upload/clients/new/05.png" alt="">
           
                </div>
                <div class="col-xs-6 col-sm-3 element">
                   
                        <img class="mx-auto img-fluid" src="assets/upload/clients/new/06.png" alt="">
             
                </div>
    
                <div class="col-xs-6 col-sm-3 element">
         
                        <img class="mx-auto img-fluid" src="assets/upload/clients/new/08.png" alt="">
               
                </div>
                <div class="col-xs-6 col-sm-3 element">
                 
                        <img class="mx-auto img-fluid" src="assets/upload/clients/new/09.png" alt="">
            
                </div>


     
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="http://www.sabb.com/en/" title="Saudi British Bank">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/01.png" alt="">
                    </a>
                </div>
       
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="http://benchmark-ksa.com/" title="BenchMark Events">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/03.png" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="https://sp.com.sa/en/Pages/default.aspx" title="Saudi Post">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/04.png" alt="">
                    </a>
                </div>
  
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="http://qurancomplex.org/" title="king Fahd Glorious Quran Printing Complex">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/06.png" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="http://naba.sa/" title="شركة نبعة التعليمية">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/07.png" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="http://www.nalrajhi.com/" title="Naif Alrajhi Investment">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/08.png" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="http://phi.sa/" title="PHI">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/09.png" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="http://www.stc.com.sa/wps/wcm/connect/english/individual/individual" title="STC">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/010.png" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="http://www.tech-wd.com/wd/" title="عالم التقنية">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/011.png" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="https://alghad.org.sa/" title="Alghad Youth Association">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/012.png" alt="">
                    </a>
                </div>
               
           
            
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="http://www.4events-sa.com/" title="4Events">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/013.png" alt="">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3 element">
                    <a target="_blank" rel="noopener" href="http://www.citc.gov.sa/en/Pages/default.aspx" title="Communications and Information Technology Commission">
                        <img class="mx-auto img-fluid" src="assets/upload/clients/old/014.png" alt="">
                    </a>
                </div>
           
              
              
            </div> -->
        </div>
    </section>
    <!-- #Clients -->

    <!-- Values -->
    <section class="values" id="values">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="headline headline-align">
                        <h1>our values</h1>
                        <p>Our work revolves around the core values we believe in</p>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="p-2">
                                <span class="tagline">01</span>
                                <h3 class="pt-2">passion</h3>
                                <p>We go the extra mile in everything we do</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-2">
                                <span class="tagline">02</span>
                                <h3 class="pt-2">simplicity</h3>
                                <p>We made it a goal to produce simple products</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-2">
                                <span class="tagline">03</span>
                                <h3 class="pt-2">quality</h3>
                                <p>Providing high value products and services</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-4">
                            <div class="p-2">
                                <span class="tagline">04</span>
                                <h3 class="pt-2">UX</h3>
                                <p>We listen to our users needs and provide them</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-2">
                                <span class="tagline">05</span>
                                <h3 class="pt-2">precision</h3>
                                <p>Taking care of every detail with focused energy</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-2">
                                <span class="tagline">06</span>
                                <h3 class="pt-2">dedication</h3>
                                <p>We always find a way to achieve</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- #Values -->

    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col text-left">
                    <div class="headline headline-align">
                        <h1>contact us</h1>
                        <p>we are excited to excite you</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-6">




                    <form id="my-form" action="https://formspree.io/f/xlezwagr" class="form-horizontal" role="form"
                        method="post">
                        <p id="my-form-status" class="py-3" style="color:#b1a693"></p>

                        <div class="form-row">
                            <div class="form-group col">
                                <input type="text" name="name" class="form-control form-control-lg"
                                    placeholder="Your Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="email" name="replyto" class="form-control form-control-lg"
                                    placeholder="Your Email Address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">

                                <textarea rows="4" name="message" class="form-control form-control-lg"
                                    placeholder="Your Message"></textarea>
                            </div>
                        </div>

                        <button id="my-form-button" class="btn btn-outline-light btn-block btn-lg pt-3 pb-3 float-right"
                            title="Send Now">
                            Send Now
                        </button>




                    </form>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-3 d-none d-sm-block">
                    <!-- shape -->
                    <div class="shape shape-locks">
                        <img class="mx-auto" src="assets/upload/shapes/locks.svg" alt="">
                    </div><!-- #shape -->

                    <!-- shape -->
                    <div class="shape shape-dots">
                        <img class="mx-auto" src="assets/upload/shapes/dots-bold.svg" alt="">
                    </div><!-- #shape -->
                </div>
            </div>
        </div>
    </section>
    <!-- #Contact -->

    <!-- Footer -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-left">
                    <div class="media">
                        <div class="row media-body">
                            <div class="col-sm-4">
                                <span id="lock-animated"></span>
                            </div>
                            <div class="col-sm-8 p-2" hidden>
                                <h5 class="mt-0 text-capitalize"><strong>Riyadh, SA</strong></h5>
                                <address>
                                    Al Nada, Thumamah Road
                                    <br> 1st floor, Office 31
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 text-right">
                    <ul class="list-inline p-4">
                        <li class="list-inline-item">
                            <h4 class="text-uppercase">follow us</h4>
                        </li>
                        <li class="list-inline-item p-1">
                            <a href="http://twitter.com/@tarmeezco/" target="_blank" rel="noopener" title="Twitter">
                                <div class="media">
                                    <i class="fa fa-twitter-square"></i>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item p-1">
                            <a href="https://www.instagram.com/tarmeezco/" target="_blank" rel="noopener"
                                title="Instagram">
                                <div class="media">
                                    <i class="fa fa-instagram"></i>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item p-1">
                            <a href="https://www.linkedin.com/company/tarmeez/" target="_blank" rel="noopener"
                                title="LinkedIn">
                                <div class="media">
                                    <i class="fa fa-linkedin-square"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- #Footer -->

    <!-- Copyright -->
    <section class="copyright" id="copyright">
        <p>2022 &copy; Tarmeez Co</p>
    </section>

    <script src=" assets/js/bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>


    <script>
    var form = document.getElementById("my-form");

    async function handleSubmit(event) {
        event.preventDefault();
        var status = document.getElementById("my-form-status");
        var data = new FormData(event.target);
        fetch(event.target.action, {
            method: form.method,
            body: data,
            headers: {
                'Accept': 'application/json'
            }
        }).then(response => {
            if (response.ok) {

                myPlay();



                status.innerHTML = "✔︎ Thank you, We have received your email.";
                form.reset()
            } else {
                response.json().then(data => {
                    if (Object.hasOwn(data, 'errors')) {
                        status.innerHTML = data["errors"].map(error => error["message"])
                            .join(", ")
                    } else {
                        status.innerHTML = "Oops! There was a problem submitting your form"
                    }
                })
            }
        }).catch(error => {
            status.innerHTML = "Oops! There was a problem submitting your form"
        });
    }
    form.addEventListener("submit", handleSubmit)
    </script>



    <ninja-keys placeholder="Search for ..">
        <slot name="footer">hidden</slot>
    </ninja-keys>

    <script>
    const hotkeys = [{
            id: "About",
            title: "About Us",
            hotkey: "cmd+a",
            mdIcon: "diversity_3",
            handler: () => {
                var element_to_scroll_to = document.getElementById('about');
                element_to_scroll_to.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                    inline: "nearest"
                });
            }
        },

        {
            id: "Services",
            title: "Our Services",
            hotkey: "cmd+s",
            mdIcon: "extension",
            handler: () => {
                var element_to_scroll_to = document.getElementById('services');
                element_to_scroll_to.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                    inline: "nearest"
                });
            }
        },
        {
            id: "Clients",
            title: "Our Clients",
            hotkey: "cmd+c",
            mdIcon: "phonelink",
            handler: () => {
                var element_to_scroll_to = document.getElementById('clients');
                element_to_scroll_to.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                    inline: "nearest"
                });
            }
        },

        {
            id: "Values",
            title: "Our Values",
            hotkey: "cmd+v",
            mdIcon: "interests",
            handler: () => {
                var element_to_scroll_to = document.getElementById('values');
                element_to_scroll_to.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                    inline: "nearest"
                });
            }
        },

        {
            id: "Contact",
            title: "Contact Us",
            hotkey: "cmd+m",
            mdIcon: "email",
            handler: () => {
                var element_to_scroll_to = document.getElementById('contact');
                element_to_scroll_to.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                    inline: "nearest"
                });
            }
        }
        // {
        //     id: "Theme",
        //     title: "Dark/Light Theme",
        //     hotkey: "cmd+d",
        //     mdIcon: "light_mode",
        //     handler: () => {
        //         document.addEventListener('DOMContentLoaded', (event) => {
        //             ((localStorage.getItem('mode') || 'dark') === 'dark') ? document.querySelector(
        //                     'body').classList
        //                 .add('dark'): document.querySelector('body').classList.remove('dark')
        //         })
        //     }
        // }


    ];
    const ninja = document.querySelector("ninja-keys");
    ninja.data = hotkeys;
    </script>

    <!-- <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        ((localStorage.getItem('mode') || 'dark') === 'dark') ? document.querySelector('body').classList
            .add('dark'): document.querySelector('body').classList.remove('dark')
    })
    </script> -->
</body>

</html>