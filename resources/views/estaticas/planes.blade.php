<!-- Start Pricing Area -->
<section class="pricing-area ptb-100 extra-mb pb-0" id="preciosDetalle">
    <div class="container">
        <div class="section-title">
            <span>
                <span class="icon">
                    <i class="flaticon-resume"></i>
                </span>
                
                <span>Precios de {{ config('app.name','INTERNET') }}</span>
            </span>
            <h2>Descubre nuestros mejores planes</h2>
            <h3 class="text-danger">Costos de la instalación gratis</h3>
            <p>
                Solo paga el valor de la suscripción 
            </p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-pricing-table">
                    <div class="pricing-header">
                        <div class="icon">
                            <i class="flaticon-online-shop"></i>
                        </div>

                        <span>Plan Básico</span>
                        <h3>Paquete estudiantil</h3>
                    </div>

                    <ul class="pricing-features-list">
                        <li><i class="flaticon-check-mark"></i> Navega y descarga ilimitadamente</li>
                        <li><i class="flaticon-check-mark"></i> 2 Megas de Bajada/Subida</li>
                        <li><i class="flaticon-check-mark"></i> 2048 Kbps</li>
                        <li><i class="flaticon-check-mark"></i> Compartición 2:1</li>
                        <li><i class="flaticon-check-mark"></i> Incluye Route Wifi</li>
                    </ul>

                    <div class="price">
                        <span>Desde</span>
                        <span>$</span>
                        19.99
                        <span>/mes</span>
                    </div>

                    <a href="{{ route('precios') }}" class="view-plans-btn">Ver planes</a>

                    <div class="image-box">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-pricing-table active">
                    <div class="pricing-header">
                        <div class="icon">
                            <i class="flaticon-online-shop"></i>
                        </div>

                        <span>Plan Hogar</span>
                        <h3>Paquete hogar</h3>
                    </div>

                    <ul class="pricing-features-list">
                        <li><i class="flaticon-check-mark"></i> Navega y descarga ilimitadamente</li>
                        <li><i class="flaticon-check-mark"></i> 3.5 Megas de Bajada/subida</li>
                        <li><i class="flaticon-check-mark"></i> 3584 Kbps</li>
                        <li><i class="flaticon-check-mark"></i> Compartición 2:1</li>
                        <li><i class="flaticon-check-mark"></i> Incluye Route Wifi</li>
                    </ul>

                    <div class="price">
                        <span>Desde</span>
                        <span>$</span>
                        29.99
                        <span>/mes</span>
                    </div>

                    <a href="{{ route('precios') }}" class="view-plans-btn">Ver planes</a>

                    <div class="image-box">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-pricing-table">
                    <div class="pricing-header">
                        <div class="icon">
                            <i class="flaticon-online-shop"></i>
                        </div>

                        <span>Plan Xtreme</span>
                        <h3>Paquete negocio</h3>
                    </div>

                    <ul class="pricing-features-list">
                        <li><i class="flaticon-check-mark"></i> Navega y descarga ilimitadamente</li>
                        <li><i class="flaticon-check-mark"></i> 6 Megas de Bajada/subida</li>
                        <li><i class="flaticon-check-mark"></i> 6144 Kbps</li>
                        <li><i class="flaticon-check-mark"></i> Compartición 2:1</li>
                        <li><i class="flaticon-check-mark"></i> Incluye Route Wifi</li>
                    </ul>

                    <div class="price">
                        <span>Desde</span>
                        <span>$</span>
                        44.99
                        <span>/mes</span>
                    </div>

                    <a href="{{ route('precios') }}" class="view-plans-btn">Ver planes</a>

                    <div class="image-box">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                        <img src="{{ asset('assets/img/shape-image/2.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Area -->