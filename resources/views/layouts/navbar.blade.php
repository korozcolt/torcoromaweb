 <!-- Start Navbar Area -->
 <div class="navbar-area">
     <div class="ferry-responsive-nav">
         <div class="container">
             <div class="ferry-responsive-menu">
                 <div class="logo">
                     <a href="{{ url('/') }}">
                         <img src="{{ asset('images/logo.png') }}" alt="TORCOROMA LOGO">
                     </a>
                 </div>
             </div>
         </div>
     </div>

     <div class="ferry-nav">
         <div class="container">
             <nav class="navbar navbar-expand-md navbar-light">
                 <a class="navbar-brand" href="/">
                     <img src="{{ asset('images/logo.png') }}" width="150" alt="logo torcoroma">
                 </a>

                 <div class="collapse navbar-collapse mean-menu">
                     <ul class="navbar-nav ms-auto">
                         <li class="nav-item">
                             <a href="{{ url('/home') }}" class="nav-link active">Inicio</a>
                         </li>

                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 Torcoroma <i class='bx bx-chevron-down'></i>
                             </a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item">
                                     <a href="{{ url('/about') }}" class="nav-link">Acerca de</a>
                                 </li>
                                 {{-- <li class="nav-item">
                                <a href="{{ url ('/team')}}" class="nav-link">Equipo</a>
                            </li> --}}

                                 <li class="nav-item">
                                     <a href="{{ url('/faq') }}" class="nav-link">Formatos para transporte
                                         especializado</a>
                                 </li>

                                 <li class="nav-item">
                                     <a href="{{ url('/faq') }}" class="nav-link">Preguntas Frecuentes</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 Servicios <i class='bx bx-chevron-down'></i>
                             </a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item">
                                     <a href="{{ url('/service#services') }}" class="nav-link">Servicios</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('/service#buy-ticket') }}" class="nav-link">Compra tu
                                         tiquete</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('/service#tracking') }}" class="nav-link">Rastrea tu
                                         ruta</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 Transparencia <i class='bx bx-chevron-down'></i>
                             </a>
                             <ul class="dropdown-menu">
                                 <li class="nav-item">
                                     <a href="{{ url('/policy') }}#rights" class="nav-link">Derechos y
                                         Deberes De Los Pasajeros</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('/policy') }}#security" class="nav-link">Políticas de
                                         seguridad</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ url('/policy') }}#terms" class="nav-link">Terminos y
                                         condiciones</a>
                                 </li>
                             </ul>
                         </li>

                         <li class="nav-item">
                             <a href="{{ url('/contact') }}" class="nav-link">Contacto</a>
                         </li>

                         <li class="nav-item">
                             <a href="javascript:void(0)" class="nav-link search-box">
                                 <i class='bx bx-search'></i>
                             </a>
                         </li>
                     </ul>
                 </div>
             </nav>
         </div>
     </div>
 </div>
 <!-- End Navbar Area -->
