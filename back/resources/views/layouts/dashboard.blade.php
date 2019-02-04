<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Stylimmo') }}</title>
    <!-- Styles -->
   
<!--material design-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--material design-->
 <link href="{{ asset('css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/rangSlider/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/rangSlider/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/unix.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/select2/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/data-table/jquery.dataTables.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css"> --}}


    
    <link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('css/dropzone-custom.css')}}">
   
    {{-- <link href="{{ asset('css/jquery.datatable.min.css') }}" rel="stylesheet"> --}}
    <!-- Fonts -->
    <!-- cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">


</head>
<body>
        @yield('navbar')
        @yield('header')
            <div class="content-wrap">
                <div class="main">
                    <div class="container-fluid">
                        <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>@yield('header_name')</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <!-- choix de langue avec drapeaux? -->  
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">UI-Blank</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                     <!-- /# column -->
                </div>
                <div id="main-content">
                    @yield('content')
                </div>
                <div id="main-content">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="footer">
                                            <p>Generated on <span id="date-time"></span> Styl'Immo LTD all rights reserved <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
    <div id="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" placeholder="Que voulez vous chercher ?" />
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </form>
        </div>
    <!-- jquery vendor -->

    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.nanoscroller.min.js') }}"></script>
    
    <script src="{{ asset('js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('js/lib/preloader/pace.min.js') }}"></script>
    <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <script src="{{ asset('js/lib/select2/select2.full.min.js') }}"></script>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <!--range sliders-->
    <script src="{{ asset('js/lib/rangeSlider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('js/lib//rangeSlider/rangeslider.init.js') }}"></script>
    <!--range sliders end-->
    <!--charts-->
    <script src="{{ asset('js/lib/morris-chart/raphael-min.js') }}"></script>
    <script src="{{ asset('js/lib/morris-chart/morris.js') }}"></script>
    <!--chartsend-->
    
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-fr_FR.min.js"></script>


    {{-- dropzone --}}
    <script src="{{ asset('js/dropzone.js') }}"></script>
    <script src="{{ asset('js/dropzone-config.js') }}"></script>


    <!--depot-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>

    <script>
            document.getElementById("date-time").innerHTML = Date();
        
            $('.page-refresh').on("click", function() {
                location.reload();
            });
            </script>
        
            <!-- /*  Auto date in footer and refresh-->
            <script>
                $('a[href="#search"]').on('click', function(event) {
                        event.preventDefault();
                        $('#search').addClass('open');
                        $('#search > form > input[type="search"]').focus();
                    });
                    
                    $('#search, #search button.close').on('click keyup', function(event) {
                        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                            $(this).removeClass('open');
                        }
                    });        
            </script>
            <script>
                $('#verticalCarousel').carousel({
                interval: 2000
            })
        
            $(window).bind("resize", function() {
                
                if ($(this).width() < 680) {
                    $('.logo').addClass('hidden')
                    $('.sidebar').removeClass('sidebar-shrink')
                    $('.sidebar').removeClass('sidebar-shrink, sidebar-gestures')
                }
                else {
                    $('.logo').removeClass('hidden')
                    $('.sidebar').addClass('sidebar-shrink')
                    $('.sidebar').addClass('sidebar-shrink, sidebar-gestures')
                }
            }).trigger('resize');
            $('.header li, .sidebar li').on('click', function() {
                $(".header li.active, .sidebar li.active").removeClass("active");
                $(this).addClass('active');
            });
        
            $(".header li").on("click", function(event) {
                event.stopPropagation();
            });
        
            $(document).on("click", function() {
                $(".header li").removeClass("active");
        
            });
        
            $(".hamburger").on('click', function() {
                $(this).toggleClass("is-active");
            });
            
            </script>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable( {
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                        }
                    } );
                } );

                $(document).ready(function() {
                    $('#example2').DataTable( {
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                        }
                    } );
                } );

                $(document).ready(function() {
                    $('#example3').DataTable( {
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                        }
                    } );
                } );

            </script>


{{-- Patch pour les inout de type date sue les navigateurs autre que chrome --}}
{{-- fin --}}
    @yield('js-content')
    <!-- scripit init-->

</body>
</html>
