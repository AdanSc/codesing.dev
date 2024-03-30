@extends('home.layout.layout_footer')

@section('title')
    Codesing { Dev }
@endsection()

@section('content')
    <div class="container-fluid">
        <div class="container col-xxl-9 px-5 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <h1 data-aos="fade-up" class="display-5 fw-bold lh-1 mb-3" style="text-align: center;">¿Qué hacemos?</h1>
                <div class="col-10 col-sm-8 col-lg-6 mx-auto text-center"> <img data-aos="fade-up"
                        src="{{ asset('images/code.webp') }}" class="d-block img-fluid" alt="Codesign simbol" width="700"
                        height="500" loading="lazy"> </div>
                <div class="col-lg-6">
                    <p data-aos="fade-up" class="fs-5 text-muted">En <span class="logo">Codesing <span
                                class="dev-text">{</span> dev <span class="dev-text">}</span></span>, creamos sitios web,
                        aplicaciones a medida y autoadministrables.</p>
                    <ul data-aos="fade-up" class="fs-5 text-muted">
                        <li>PHP</li>
                        <li>Python</li>
                        <li>WordPress</li>
                        <li>Woocommerce</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container col-xxl-9 px-5 py-3">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <h1 data-aos="fade-up" class="display-5 fw-bold lh-1 mb-3" style="text-align: center;">Conexiones Globales
                </h1>
                <div class="col-lg-6">
                    <p data-aos="fade-up" class="fs-5 text-muted">Hemos trabajado con clientes en México, Estados Unidos y
                        Uruguay, ofreciendo soluciones digitales globales de alta calidad.</p>
                </div>
                <div class="col-10 col-sm-8 col-lg-6 mx-auto text-center"> <img data-aos="fade-up"
                        src="{{ asset('images/mapa.webp') }}" class="d-block img-fluid" alt="Codesign simbol" width="700"
                        height="500" loading="lazy"> </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="container col-xxl-9 px-5 py-3">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <h1 data-aos="fade-up" class="display-5 fw-bold lh-1 mb-3" style="text-align: center;">Nuestra huella</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <p data-aos="fade-up" class="fs-5 text-muted" target="_blank">Campestres la paloma <a
                            href="https://campestreslapaloma.com/" style="color: #01CC00; text-decoration: none;"
                            target="_blank">ver sitio</a></p><img data-aos="fade-up"
                        src="{{ asset('images/image_1.webp') }}" style="max-width: 98%;" alt="Proyecto 1" class="mx-auto">
                </div>
                <div class="col">
                    <p data-aos="fade-up" class="fs-5 text-muted">Levity <a href="https://levity.com.mx/"
                            style="color: #01CC00; text-decoration: none;" target="_blank">ver sitio</a></p><img
                        data-aos="fade-up" src="{{ asset('images/image_2.webp') }}" style="max-width: 98%;" alt="Proyecto 2"
                        class="mx-auto">
                </div>
                <div class="col">
                    <p data-aos="fade-up" class="fs-5 text-muted">Estudio 24 Música
                        <!--<a href="#" style="color: #01CC00; text-decoration: none;">ver sitio</a>-->
                    </p><img data-aos="fade-up" src="{{ asset('images/image_3.webp') }}" style="max-width: 98%;"
                        alt="Proyecto 3" class="mx-auto">
                </div>
                <div class="col">
                    <p data-aos="fade-up" class="fs-5 text-muted">Kalcos Zapatería <a href="https://kalcos.com.mx/"
                            style="color: #01CC00; text-decoration: none;" target="_blank">ver sitio</a></p><img
                        data-aos="fade-up" src="{{ asset('images/image_4.webp') }}" style="max-width: 98%;" alt="Proyecto 4"
                        class="mx-auto">
                </div>
                <div class="col">
                    <p data-aos="fade-up" class="fs-5 text-muted">Longevity <a href="https://longevitymc.com/"
                            style="color: #01CC00; text-decoration: none;" target="_blank">ver sitio</a></p><img
                        data-aos="fade-up" src="{{ asset('images/image_5.webp') }}" style="max-width: 98%;" alt="Proyecto 5"
                        class="mx-auto">
                </div>
                <div class="col">
                    <p data-aos="fade-up" class="fs-5 text-muted">Diconsa S.A. de
                        C.V.<!--<a href="#" style="color: #01CC00; text-decoration: none;" target="_blank">ver app</a>-->
                    </p><img data-aos="fade-up" src="{{ asset('images/image_6.webp') }}" style="max-width: 98%;"
                        alt="Proyecto 6" class="mx-auto">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding-top: 200px; padding-bottom: 100px;">
        <div class="container col-xxl-8 px-5 py-4 background-container">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5"> <img data-aos="fade-up"
                    src="{{ asset('images/codesing_logo.svg') }}" alt="Codesing logo" width="200" height="100">
            </div>
            <p data-aos="fade-up" class="fs-5 text-muted">Trabajar con nosotros significa tener acceso a un equipo de
                programadores apasionados y experimentados que crean soluciones digitales innovadoras para impulsar el éxito
                de tu empresa.</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container col-xxl-9 px-5 py-3">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6 mx-auto text-center"> <img data-aos="fade-up"
                        src="{{ asset('images/adansc.webp') }}" class="d-block img-fluid" alt="Codesign simbol"
                        width="700" height="500" loading="lazy"> </div>
                <div class="col-lg-6">
                    <h1 data-aos="fade-up" class="custom-h1 display-5 fw-bold lh-1 mb-3">Hola, mi nombre es <span
                            style="color: #01CC00;">Adan Suarez</span>!</h1>
                    <p data-aos="fade-up" class="fs-7 text-muted">Soy cofundador y desarrollador web en <span
                            class="logo">Codesing <span class="dev-text">{</span> dev <span
                                class="dev-text">}</span></span><br><br>Mi enfoque emprendedor y compromiso con el éxito
                        son
                        fundamentales para nuestro trabajo.<br><br>Lidero un equipo de desarrollo de software y aplicaciones
                        web, aportando soluciones creativas y técnicas a nuestros proyectos.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
