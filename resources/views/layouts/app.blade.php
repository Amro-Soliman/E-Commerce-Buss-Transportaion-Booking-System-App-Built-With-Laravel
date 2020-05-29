<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
                <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{URL::asset('css/styles\themes\style10\stylesheet10.css')}}" />
                @toastr_css


     

        
        <script src="{{URL::asset('inc/js/styleswitch.js')}}" type="text/javascript">

/***********************************************

* Style Sheet Switcher v1.1- © Dynamic Drive DHTML code library (www.dynamicdrive.com)

* This notice MUST stay intact for legal use

* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more

***********************************************/

</script>





        <!-- Flexslider -->

        <link rel="stylesheet" href="{{URL::asset('css/styles/flexslider.css')}}" />



        <!-- fontawesome -->

        <link rel="stylesheet" href="{{URL::asset('css/styles/fontawesome/font-awesome.min.css')}}" />



        <!-- Datepicker UI -->

        <link rel="stylesheet" href="{{URL::asset('css/styles/jquery-ui-1.10.3.custom.min.css')}}" />



        <!-- MI slider -->

        <link rel="stylesheet" href="{{URL::asset('css/styles/mi-slider.css')}}" />	



        <!-- Chozen UI -->

        <link rel="stylesheet" href="{{URL::asset('css/styles/chosen.css')}}" />	



        <!-- Range Slider UI #2 -->

        <link rel="stylesheet" href="{{URL::asset('css/styles/rangeslider-classic.css')}}" />



        <!-- Elegant Font -->

        <link rel="stylesheet" href="{{URL::asset('inc/elegant-font/style.css')}}" />

        <!--[if lte IE 7]><script src="inc/elegant-font/lte-ie7.js"></script><![endif]-->



     <link rel="stylesheet" href="demo/switcher.css" />

    </head>

    <body>


        <div id="preloader">

            <div id="status">&nbsp;</div>

            <noscript>JavaScript is off. Please enable to view full site.</noscript>

        </div>

        <div id="site">





            <header id="header" class="wide-fat">



                <div class="container">



                    <div class="col-xs-12 col-sm-2 no-margin">

                        <div class="branding">



                            <h1 class="site-title">



                                <a href="#"><img src="{{URL::asset('images/site-logo.png')}}" alt="Traveline" /> <span>Travel<span class="higlight">ine</span></span></a>



                            </h1>



                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-10 no-margin">



                        <div id="main-menu">



                            <nav class="navigation">

                                <ul class="hidden-xs hidden-sm hidden-md">

                                    <li class="menu-item about-us">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon_group"></i> Home</a>

                                        <ul class="dropdown-menu" role="menu">

                                            <li class="active" role="presentation">

                                                <a role="menuitem" tabindex="-1" href="index.html">Homepage-1</a>

                                                <a role="menuitem" tabindex="-1" href="index-2.html">Homepage-2</a>

                                                <a role="menuitem" tabindex="-1" href="index-mini.html">Homepage-3</a>

                                            </li>







                                        </ul>

                                    </li>

                                    <li class="menu-item destinations">

                                        <a href="destinations.html"><i class="icon_pin"></i> Destinations</a>

                                    </li>

                                    <li class="menu-item our-travel">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon_globe_alt"></i> Our Travel</a>

                                        <ul class="dropdown-menu" role="menu">

                                            <li class="active" role="presentation">

                                                <a role="menuitem" tabindex="-1" href="our-travel.html">our travel</a>

                                                <a role="menuitem" tabindex="-1" href="our-travel-sidebar.html">our travel-sidebar</a>

                                                <a role="menuitem" tabindex="-1" href="our-travel-right-sidebar.html">our travel-right sidebar</a>

                                                <a role="menuitem" tabindex="-1" href="our-travel-detail.html">our travel-detail</a>

                                            </li>







                                        </ul>

                                    </li>

                                    <li class="menu-item special-offers">

                                        <a href="special-offers.html"><i class="icon_ribbon"></i> Special Offers</a>

                                    </li>

                                    <li class="menu-item hotel">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon_building_alt"></i> List</a>

                                        <ul class="dropdown-menu" role="menu">

                                            <li class="active" role="presentation">

                                                <a role="menuitem" tabindex="-1" href="hotel-list.html">hotel list</a>

                                                <a role="menuitem" tabindex="-1" href="hotel-list-wide.html">hotel list-wide</a>

                                                <a role="menuitem" tabindex="-1" href="hotel-list-right-sidebar.html">hotel list-sidebar</a>

                                                <a role="menuitem" tabindex="-1" href="hotel-list-fullwidth.html">hotel list-fullwidth</a>

                                            </li>







                                        </ul>

                                    </li>

                                    <li class="menu-item shortcodes">

                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon_map"></i> Hotels</a>

                                        <ul class="dropdown-menu" role="menu">

                                            <li class="active" role="presentation">

                                                <a role="menuitem" tabindex="-1" href="hotel-detail.html">hotel detail</a>

                                                <a role="menuitem" tabindex="-1" href="hotel-detail-travel-info.html">hotel detail-travel info</a>

                                                <a role="menuitem" tabindex="-1" href="hotel-detail-payment.html">hotel detail-payment</a>

                                                <a role="menuitem" tabindex="-1" href="hotel-detail-confirm.html">hotel detail-confirm</a>

                                            </li>

                                        </ul>

                                    </li>



                                    <li class="menu-item contact">

                                        <a href="page-site-map.html"><i class="icon_contacts"></i> Pages</a>

                                    </li>



                                </ul>



                                <select class="top-drop-menu nav visible-sm visible-xs visible-md">

                                    <optgroup label="Homepage">



                                        <option value="index.html">

                                            Homepage-1

                                        </option>

                                        <option value="index-2.html">

                                            Homepage-2

                                        </option>

                                        <option value="index-mini.html">

                                            Homepage-3

                                        </option>







                                    </optgroup>

                                    <optgroup label="Destinations">

                                        <option value="destinations.html">

                                            Destinations

                                        </option>

                                    </optgroup>

                                    <optgroup label="Our Travels">

                                        <option value="our-travel.html">

                                            Our Travel

                                        </option>

                                        <option value="our-travel-sidebar.html">

                                            Our Travel-Sidebar

                                        </option>

                                        <option value="our-travel-right-sidebar.html">

                                            Our Travel-Right Sidebar

                                        </option>

                                        <option value="our-travel-detail.html">

                                            Our Travel-Detail

                                        </option>





                                    </optgroup>  

                                    <optgroup label="Special Offers">

                                        <option value="special-offers.html">

                                            Special Offers

                                        </option>

                                    </optgroup>

                                    <optgroup label="Hotels List">

                                        <option value="hotel-list.html">

                                            Hotel List

                                        </option>

                                        <option value="hotel-list-wide.html">

                                            Hotel List-Wide

                                        </option>

                                        <option value="hotel-list-right-sidebar.html">

                                            Hotel List-Sidebar

                                        </option>

                                        <option value="hotel-list-fullwidth.html">

                                            Hotel List-Fullwidth

                                        </option>





                                    </optgroup>





                                    <optgroup label="Hotels Detail">

                                        <option value="hotel-detail.html">

                                            Hotel Detail

                                        </option>

                                        <option value="hotel-detail.html">

                                            Hotel Detail-Travel Info

                                        </option>

                                        <option value="hotel-detail.html">

                                            Hotel Detail-Payment

                                        </option>

                                        <option value="hotel-detail.html">

                                            Hotel Detail-Confirm

                                        </option>

                                    </optgroup>













                                    <optgroup label="Contact">

                                        <option value="contact.html">

                                            Contact

                                        </option>

                                    </optgroup>









                                </select>

                            </nav>



                        </div><!-- /#main-menu -->

                    </div>



                </div>



                <div class="toggle-menu-holder">



                    <a class="toggle-menu" href="#"></a>

                    <div class="menu-body closed">

                        <ul>
                        @if(auth()->check())
                        <li style="text-align:center"> <p> <i class="fa fa-user"></i> {{auth()->user()->name}} </p></li>
                        @endif
                        @guest
                        <li><a href="{{ route('login') }}"><i class="fa fa-user"></i> login</a></li>
                            
                            <li><a href="{{ route('register') }}"><i class="fa fa-user"></i> register</a></li>
                        @else
                        <li><a href="{{ route('logout') }}"><i class="fa fa-user"></i> logout</a></li>
                        @endguest
                            <li><a href="#"><i class="fa fa-bullseye"></i> newsletter</a></li>

                            <li><a href="#"><i class="fa fa-volume-down"></i> newletter</a></li>

                            <li><a href="#"><i class="fa fa-comments"></i> blog</a></li>

                            <li><a href="#"><i class="fa fa-phone"></i> support center</a></li>

                            <li><a href="#"><i class="fa fa-dollar"></i> price</a></li>

                        </ul>

                    </div>







                </div>





            </header><!-- /#header -->





            <div class="modal fade" id="loginBox" tabindex="-1" role="dialog"  aria-hidden="true">

                <div class="modal-dialog">

                    <div class="modal-content">



                        <div class="modal-body">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                            <div class="custom-checkbox-holder">

<input class="custom-checkbox" type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} >



<span>Remember me on this computer.</span>

</div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                                







                             
                        </div>



                    </div>

                </div>

            </div>


       

      


       <div>
       @yield('journeyResult')
       </div>


        <main class="py-4">
            @yield('content')

        </main>
    </div>
         
<footer id="footer-black" class="widefat ">







<div class="container">





    <div class="col-xs-12 col-md-4">

        <div class="footer-logo">

            <h1 class="site-title">



                <a href="#"><img src="{{URL::asset('images/site-logo.png')}}" alt="Traveline" /> <span>Travel<span class="higlight">ine</span></span></a>



            </h1>

            <p>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit.

            </p>

            <p>

                Sed sed malesuada orci, eu ornare sem. Pellentesque quis metus porta, varius nunc vitae, laoreet nisi. Aenean vitae est dui.

            </p>

        </div>

    </div>





    <div class="col-xs-12 col-md-4">

        <div class="newsletter-holder">

            <h3>



                news letter

            </h3>

            <p>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit.

            </p>

            <input type="text" placeholder="Your Name">

            <input type="text" placeholder="Your Email Address">

            <input type="submit" class="button green" value="Subscribe Now">

        </div>

    </div>



    <div class="col-xs-12 col-md-4">

        <div class="newsletter-holder">

            <h3>



                contact info

            </h3>

            <p>

                Traveline - Copyright 2014. Designed by jThemes<br>

                Email: info@example.com<br>

                Address: Lorem Ipsuum, Manchester M12 345, UK<br>

                +44 123 456 7890

            </p>



            <ul class="footer-social-icons">

                <li><a href="#" class="fa fa-facebook"></a></li>

                <li><a href="#" class="fa fa-twitter"></a></li>

                <li><a href="#" class="fa fa-pinterest"></a></li>

                <li><a href="#" class="fa fa-tumblr"></a></li>

                <li><a href="#" class="fa fa-vimeo-square"></a></li>

            </ul>

        </div>

    </div>





</div>







</footer><!-- /#footer -->








    </div><!-- /#site -->







    <!-- Scripts -->



    <!-- jQuery -->





    <script src="{{URL::asset('inc/js/jquery-1.10.2.min.js')}}"></script>

    <script src="{{URL::asset('inc/js/jquery-migrate-1.2.1.js')}}"></script>



    <!-- modernizer -->





    <script src="{{URL::asset('inc/js/modernizr.custom.63321.js')}}"></script>



    <!-- FlexSlider -->

    <script type="text/javascript" src="{{URL::asset('inc/js/jquery.flexslider-min.js')}}"></script>	





    <!-- CatSlider -->

    <script type="text/javascript" src="{{URL::asset('inc/js/jquery.catslider.js')}}"></script>	





    <!-- Datepicker -->

    <script type="text/javascript" src="{{URL::asset('inc/js/jquery.ui.datepicker.min.js')}}"></script>	




 
    <!-- Masonry -->

    <script type="text/javascript" src="{{URL::asset('inc/js/masonry.min.js')}}"></script>	







    <!-- Increase/decrease quantity -->

    <script type="text/javascript" src="{{URL::asset('inc/js/increase-decrease-qty.js')}}"></script>	



    <!-- Mixitup (filterable item) -->

    <script type="text/javascript" src="{{URL::asset('inc/js/jquery.mixitup.min.js')}}"></script>	





    <!-- Google Map JS -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script type="text/javascript" src="{{URL::asset('inc/js/google-map-infobox.js')}}"></script>		





    <!-- Responsive Google Map (Fitmaps) JS -->

    <script type="text/javascript" src="{{URL::asset('inc/js/jquery.fitmaps.js')}}"></script>	



    <!-- Chozen UI JS -->

    <script type="text/javascript" src="{{URL::asset('inc/js/chosen.jquery.js')}}"></script>	





    <!-- Checkbox/Radio UI JS -->

    <script type="text/javascript" src="{{URL::asset('inc/js/jquery.screwdefaultbuttonsV2.js')}}"></script>	





    <!-- Range Slider UI JS #2 -->

    <script type="text/javascript" src="{{URL::asset('inc/js/jquery.mousewheel.min.js')}}"></script>	

    <script type="text/javascript" src="{{URL::asset('inc/js/jQRangeSlider-min.js')}}"></script>	

    <!-- bootstrap JS -->

    <script type="text/javascript" src="{{URL::asset('inc/bootstrap/js/bootstrap.min.js')}}"></script>		

    <!-- raty JS -->

        <script type="text/javascript" src="{{URL::asset('inc/js/jquery.raty.min.js')}}"></script>	

    <!-- Custom JS -->

    <script type="text/javascript" src="{{URL::asset('inc/js/custom.js')}}"></script>	




    @jquery
    @toastr_js
    @toastr_render

</body>

</html>
    

