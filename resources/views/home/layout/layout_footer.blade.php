<!doctype html>
<html lang="es">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="icon" href="https://codesing.dev/static/img/Favicon.png" type="image/png">
    <meta name="facebook-domain-verification" content="ex9i7rwgui4be6r80cydesy2ecce9q" />
    <meta property="og:title" content="Codesing { dev }">
    <meta property="og:description"
        content="Cada pixel cuenta y cada línea de código se traduce en soluciones excepcionales. Nuestro compromiso es convertir tu visión en realidad a través de la innovación y creatividad tecnológica.">
    <meta property="og:image" content="https://codesing.dev/static/img/Opengraph.png">
    <meta property="og:url" content="https://codesing.dev/">
    <meta property="og:type" content="website">
    @vite(['resources/css/app.css'])
</head>

<main>
    <header class="navbar-degraded">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-lg-flex" id="navbar">
                        <p data-aos="fade-right" data-aos-delay="400" class="col-lg-6 me-0 logo-home">Codesing <span
                                class="dev-text">{</span> dev <span class="dev-text">}</span>
                        </p>
                        <ul class="navbar-nav col-lg-6 justify-content-lg-end">
                            <li class="nav-item">
                                <a data-aos="fade-left" data-aos-delay="700"
                                    class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a data-aos="fade-left" data-aos-delay="800"
                                    class="nav-link {{ request()->is('services') ? 'active' : '' }}"
                                    href="/services">Servicios</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a data-aos="fade-left" data-aos-delay="900" class="nav-link {{ request()->is('proyectos') ? 'active' : '' }}"
                                    href="/proyects">Proyectos</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid col-xxl-12">
            <div class="container col-xxl-10 px-5 py-3">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6 mx-auto text-center"> <img data-aos="fade-up"
                            data-aos-delay="100" src="{{ asset('images/codesing_simbol.svg') }}"
                            class="d-block img-fluid" alt="Codesign simbol" width="700" height="500"
                            loading="lazy"> </div>
                    <div class="col-lg-6">
                        <h1 data-aos="fade-up" data-aos-delay="100" class="display-5 fw-bold lh-1 mb-3 h1-home">
                            Transformando ideas en soluciones tecnológicas</h1>
                        <p data-aos="fade-up" data-aos-delay="200" class="phero">Nos dedicamos a convertir tus visiones
                            en
                            realidad a través de la innovación y la creatividad tecnológica.</p>
                        <div div class="d-grid gap-2 d-md-flex justify-content-md-start"> <button data-aos="fade-up"
                                data-aos-delay="300" type="button" class="btn contact-button"
                                onclick="window.open('https://wa.me/+526625228052', '_blank');"> Contacto</button>
                            <button data-aos="fade-up" data-aos-delay="300" type="button"
                                class="btn btn-lg px-4 contact-button-border"
                                onclick="window.open('https://drive.google.com/file/d/1mhSyNYqVBs5D6Q7eWILlTbc2uJYHwgu0/view?usp=sharing', '_blank');">Portafolio</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
</main>
<!-- footer -->
<div class="container-fluid" style="background-color: #2B0036;">
    <footer class="mb-0 d-flex flex-wrap justify-content-between align-items-center py-2 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <p class="col-lg-12 me-0 logo-footer" href="/"> &copy; <?php echo date('Y'); ?> Codesing <span
                    class="dev-text">{</span> dev
                <span class="dev-text">}</span>, All rights reserved.
            </p>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="social-icon" style="margin-right: 10px;">
                <a href="https://wa.me/+526625228052" aria-label="WhatsApp" target="_blank" style="color: white;">
                    <box-icon name='whatsapp' type='logo' color='white'></box-icon>
                </a>
            </li>
            <li class="social-icon" style="margin-right: 10px;">
                <a href="https://www.facebook.com/codesing.dev" aria-label="Facebook" target="_blank"
                    style="color: white;">
                    <box-icon name='facebook-circle' type='logo' color='white'></box-icon>
                </a>
            </li>
            <!-- Selector de idioma -->
            <li class="language-selector" style="margin-right: 10px;">
                <select aria-label="Idioma" id="language-select"
                    style="background-color: transparent; color: #fff; border-color: transparent;">
                    <option style="background-color: transparent; color: #6c757d;" value="en">Español</option>
                </select>
            </li>
        </ul>
    </footer>
</div>



<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1100
    });
</script>

</html>
