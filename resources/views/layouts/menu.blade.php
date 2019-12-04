@auth
    
    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link" id="menuInicio">Inicio</a></li>
    <li class="nav-item"><a href="{{ route('planes') }}" class="nav-link" id="menuPlanes">PLANES</a></li>
    <li class="nav-item"><a href="{{ route('clientes') }}" class="nav-link" id="menuClientes">CLIENTES</a></li>
    <li class="nav-item"><a href="{{ route('facturas') }}" class="nav-link" id="menuFactura">FACTURA</a></li>
    <li class="nav-item"><a href="contact.html" class="nav-link">SOPORTE</a></li>

@else
    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link" id="menuInicio">Inicio</a></li>
    <li class="nav-item"><a href="{{ route('nosotros') }}" class="nav-link" id="menuNosotros">Nosotros</a></li>
    <li class="nav-item"><a href="{{ route('equipo') }}" class="nav-link" id="menuEquipo">Equipo</a></li>
    <li class="nav-item"><a href="{{ route('servicios') }}" class="nav-link" id="menuServicios">Servicios</a></li>
    <li class="nav-item"><a href="{{ route('precios') }}" class="nav-link" id="menuPrecios">Precios</a></li>
    <li class="nav-item"><a href="{{ route('preguntas') }}" class="nav-link" id="menuPreguntas">Preguntas</a></li>
    <li class="nav-item"><a href="{{ route('contacto') }}" class="nav-link" id="menuContacto">Contacto</a></li>
@endauth

{{--  <li class="nav-item"><a href="#" class="nav-link">Blog <i class="fas fa-chevron-down"></i></a>
    <ul class="dropdown-menu">
        <li class="nav-item"><a href="blog-1.html" class="nav-link">Blog Grid</a></li>

        <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Right Sidebar</a></li>

        <li class="nav-item"><a href="single-blog.html" class="nav-link">Blog Details</a></li>
    </ul>
</li>  --}}

