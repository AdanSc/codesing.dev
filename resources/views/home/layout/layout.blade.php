<!doctype html>
<html lang="es">

<head>
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('images/Favicon.png') }}" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="facebook-domain-verification" content="ex9i7rwgui4be6r80cydesy2ecce9q" />
    <meta property="og:title" content="Codesing { dev }">
    <meta property="og:description"
        content="Cada pixel cuenta y cada línea de código se traduce en soluciones excepcionales. Nuestro compromiso es convertir tu visión en realidad a través de la innovación y creatividad tecnológica.">
    <meta property="og:image" content="{{ asset('images/Opengraph.png') }}">
    <meta property="og:url" content="https://codesing.dev/">
    <meta property="og:type" content="website">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>

<body>
    <header>
        <div class="container">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary rounded">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-flex" id="navbar">
                        <p data-aos="fade-right" data-aos-delay="400" class="col-lg-6 me-0 logo" href="/">Codesing
                            <span class="dev-text">{</span> dev <span class="dev-text">}</span>
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
                                <a data-aos="fade-left" data-aos-delay="900"
                                    class="nav-link {{ request()->is('proyects') ? 'active' : '' }}"
                                    href="/proyects">Proyectos</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
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
</body>

</html>
