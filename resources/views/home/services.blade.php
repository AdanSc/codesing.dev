@extends('home.layout.layout')

@section('title') Codesing { Servicios } @endsection()

@section('content')

<div class="album py-5 bg-body-tertiary">
  <div class="container col-lg-7">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 data-aos="fade-up" data-aos-delay="100" class="display-4 fw-normal">Servicios</h1>
      <p data-aos="fade-up" data-aos-delay="200" class="fs-5 text-muted">
        Creamos soluciones adaptadas a las necesidades de tu empresa, todo dentro del entorno de WordPress, para una
        gestión eficiente y efectiva.
    </div>

    <main>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div data-aos="fade-up" data-aos-delay="300" class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Sitio web estático</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$3,990<small class="text-muted fw-light"> MXN</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>CMS Wordpress</li>
                <li>Nombre de dominio (1 Año)</li>
                <li>12 GB de Almacenamiento SSD</li>
                <li>Certificado SSL</li>
                <li>10 Cuentas de Correo</li>
              </ul>
              <button type="button" class="w-100 btn contact-button" onclick="window.open('https://wa.me/+526625228052?text=Me%20interesa%20un%20sitio%20est%C3%A1tico%20Wordpress', '_blank');">Contacto</button>
            </div>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="400" class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Sitio web informativo</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$8,790<small class="text-muted fw-light"> MXN</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>CMS Wordpress</li>
                <li>Nombre de dominio (1 Año)</li>
                <li>24 GB de Almacenamiento SSD</li>
                <li>Certificado SSL</li>
                <li>15 Cuentas de Correo</li>
              </ul>
              <button type="button" class="w-100 btn contact-button" onclick="window.open('https://wa.me/+526625228052?text=Me%20interesa%20un%20sitio%20web%20informativo%20Wordpress', '_blank');">Contacto</button>
            </div>
          </div>
        </div>
        <div data-aos="fade-up" data-aos-delay="500" class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal">Tienda en línea</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$14,839<small class="text-muted fw-light"> MXN</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Woocommerce</li>
                <li>Nombre de dominio (1 Año)</li>
                <li>25 GB de Almacenamiento SSD</li>
                <li>Certificado SSL</li>
                <li>20 Cuentas de Correo</li>
              </ul>
              <button type="button" class="w-100 btn contact-button" onclick="window.open('https://wa.me/+526625228052?text=Me%20interesa%20una%20tienda%20en%20l%C3%ADnea%20con%20WooCommerce', '_blank');">Contacto</button>
            </div>
          </div>
        </div>
      </div>
    <div>
      <p data-aos="fade-up" data-aos-delay="200" class="fs-5 text-muted">
        Todos los precios son más IVA.
      </p>
    </div>

      <h2 style="margin-top: 50px;" data-aos="fade-up" data-aos-delay="0" class="display-6 text-center mb-4">Comparación técnica</h2>

      <div data-aos="fade-up" data-aos-delay="100" class="table-responsive">
        <table class="table text-center">
          <thead>
            <tr>
              <th style="width: 34%;"></th>
              <th style="width: 22%;">Estático</th>
              <th style="width: 22%;">Informativo</th>
              <th style="width: 22%;">Tienda en línea</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="text-start">Sistema Operativo</th>
              <td>CentOS 7</td>
              <td>CentOS 7</td>
              <td>CentOS 7</td>
            </tr>
            <tr>
              <th scope="row" class="text-start">Memoria RAM</th>
              <td>1 Gb</td>
              <td>2 Gb</td>
              <td>3 Gb</td>
            </tr>
          </tbody>

          <tbody>
            <tr>
              <th scope="row" class="text-start">Número de Procesos</th>
              <td>50</td>
              <td>75</td>
              <td>85</td>
            </tr>
            <tr>
              <th scope="row" class="text-start">Transferencia de datos</th>
              <td>Ilimitada</td>
              <td>Ilimitada</td>
              <td>Ilimitada</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>


  <div class="album py-5 bg-body-tertiary">
    <div class="container col-lg-7">
      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h2 data-aos="fade-up" data-aos-delay="100" class="display-6 text-center mb-4">Servicios a medida</h2>
        <p data-aos="fade-up" data-aos-delay="200" class="fs-5 text-muted">
          Ofrecemos soluciones empresariales y de administración a medida. Desde el desarrollo de aplicaciones web hasta
          software personalizado, creamos soluciones adaptadas a las necesidades de tu empresa.
        </p>
      </div>

      <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div data-aos="fade-up" data-aos-delay="300" class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Sitio web estático</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">$7,980<small class="text-muted fw-light"> MXN</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>1 página estática</li>
                  <li>HTML, CSS, JS básico</li>
                  <li>Nombre de dominio (1 Año)</li>
                  <li>12 GB de Almacenamiento SSD</li>
                  <li>Certificado SSL</li>
                  <li>10 Cuentas de Correo</li>
                </ul>
                <button type="button" class="w-100 btn contact-button" onclick="window.open('https://wa.me/+526625228052?text=Me%20interesa%20un%20sitio%20web%20est%C3%A1tico%20hecho%20a%20c%C3%B3digo', '_blank');">Contacto</button>
              </div>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-delay="400" class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Sitio web informativo</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">17,580<small class="text-muted fw-light"> MXN</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Hasta 5 páginas</li>
                  <li>HTML, CSS, JS básico</li>
                  <li>Nombre de dominio (1 Año)</li>
                  <li>24 GB de Almacenamiento SSD</li>
                  <li>Certificado SSL</li>
                  <li>15 Cuentas de Correo</li>
                </ul>
                <button type="button" class="w-100 btn contact-button" onclick="window.open('https://wa.me/+526625228052?text=Me%20interesa%20un%20sitio%20web%20informativo%20hecho%20a%20c%C3%B3digo', '_blank');">Contacto</button>
              </div>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-delay="500" class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
              <div class="card-header py-3 text-white bg-primary border-primary">
                <h4 class="my-0 fw-normal">Desarrollos a medida</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">Cotización</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Frameworks a medida</li>
                  <li>Software a medida</li>
                  <li>Configuración de servidor VPS</li>
                  <li>Garantía de funcionamiento</li>
                  <li>Asesoría remota</li>
                  <li>Póliza de mantenimiento</li>
                </ul>
                <button type="button" class="w-100 btn contact-button" onclick="window.open('https://wa.me/+526625228052?text=Necesito%20un%20desarrollo%20a%20medida%20para%20mi%20empresa', '_blank');">Cotizar</button>
              </div>
            </div>
          </div>
        </div>
        <p data-aos="fade-up" data-aos-delay="200" class="fs-5 text-muted">
          Todos los precios son más IVA.
        </p>
      </main>
    </div>

    @endsection()
