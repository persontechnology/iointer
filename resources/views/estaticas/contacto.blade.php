@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Contacto</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li>Contacto</li>
                </ul>
            </div>
        </div>
    </div>
<!-- End Page Title Area -->

<!-- Start Contact Info Box Area -->
<section class="contact-info-box-area ptb-100 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-contact-info">
                    <div class="icon">
                        <i class="flaticon-place"></i>
                    </div>
                    <h3>Dirección</h3>
                    <p>LATACUNGA-ECUADOR</p>

                    <div class="image-box">
                        <img src="{{ asset('assets/img/shape-image/1.png') }}" alt="image">
                        <img src="{{ asset('assets/img/shape-image/1.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-contact-info">
                    <div class="icon">
                        <i class="flaticon-address-book"></i>
                    </div>
                    <h3>Email</h3>
                    <p><a href="#">info@yoursitename.com</a></p>
                    <p><a href="#">www.yourname@gmail.com</a></p>

                    <div class="image-box">
                        <img src="{{ asset('assets/img/shape-image/1.png') }}" alt="image">
                        <img src="{{ asset('assets/img/shape-image/1.png') }}" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-contact-info">
                    <div class="icon">
                        <i class="flaticon-signal"></i>
                    </div>
                    <h3>Teléfono</h3>
                    <p><a href="#">+(593) 123456789</a></p>
                    <p><a href="#">+(593) 123456789</a></p>

                    <div class="image-box">
                        <img src="{{ asset('assets/img/shape-image/1.png') }}" alt="image">
                        <img src="{{ asset('assets/img/shape-image/1.png') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Box Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Enviar mensaje</span>
            <h2>Envíenos un mensaje para cualquier consulta</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra.</p>
        </div>

        <form id="contactForm">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Por favor, escriba su nombre" name="nombre" id="name" required data-error="Por favor, escriba su nombre">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Por favor, escriba su correo electrónico" name="email" id="email" required data-error="Por favor, escriba su correo electrónico">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="telefono" placeholder="Por favor, escriba su número" id="phone_number" required data-error="Por favor, escriba su número">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="tema" placeholder="Por favor, escriba su tema" id="msg_subject" required data-error="Por favor, escriba su tema">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <textarea name="mensaje" class="form-control" id="message" cols="30" rows="10" placeholder="Escribe tu mensaje" required data-error="Escribe tu mensaje"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Start Contact Area -->

<!-- Start Map Area -->
<div class="row">
    <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.30630166389!2d-78.63507538514675!3d-0.9179279993303826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d460483c1c1a3b%3A0x694a140aab02b1c!2sUniversidad%20T%C3%A9cnica%20de%20Cotopaxi!5e0!3m2!1ses-419!2sec!4v1574520123913!5m2!1ses-419!2sec" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>
<!-- End Map Area -->

@push('linksCabeza')
    <script>
        $.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
    </script>
    <script src="{{ asset('assets/js/blockui.min.js') }}"></script>
@endpush
@prepend('linksPie')
    <script>
    $('#menuContacto').addClass('active');  
    </script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
@endprepend
@endsection