<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BackendHome</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('Fonts/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('Icons/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Icons/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic')}}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="{{asset('css/BackendCss.css')}}">
     @yield('Css')

    
</head>

<body>



    <!-- Navigation -->

    @include('inc.navbar')

    <!-- Masthead -->


    <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Navigation</h3>
                </div>
    
                <ul class="list-unstyled components">
                    <p></p>
                    <li class="active">
                        <a href="#PatientSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle lafleche">Patient</a>
                        <ul class="collapse list-unstyled" id="PatientSubmenu">
                            <li>
                                <a href="https://lsapp.dev/lsapp/public/DRDV">Demande de rendez vous</a>
                            </li>
                            <li>
                                <a href="https://lsapp.dev/lsapp/public/DConseil">Demande de conceil</a>
                            </li>
                            <li>
                                <a href="#listePSubmenu" data-toggle="collapse" aria-expanded="false"
                                    class="dropdown-toggle lafleche">Liste patient</a>
                                <ul class="collapse list-unstyled" id="listePSubmenu">
                                        <li>
                                                <a href="https://lsapp.dev/lsapp/public/Patients">Tout les Patients</a>
                                        </li>
                                    <li>
                                        <a href="https://lsapp.dev/lsapp/public/PatHosp">Hospitalisé</a>
                                    </li>
                                    <li>
                                        <a href="https://lsapp.dev/lsapp/public/TodaysRdvs">RDV Ajourd'hui</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="#MedecinSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle lafleche">Medecin</a>
                        <ul class="collapse list-unstyled" id="MedecinSubmenu">
                            <li>
                                <a href="https://lsapp.dev/lsapp/public/Medecin">Liste des medecins</a>
                            </li>
                            <li>
                                <a href="https://lsapp.dev/lsapp/public/LstMedecins">Libre pour ajourd'hui</a>
                            </li>
    
                        </ul>
                    </li>
                    <li>
                        <a href="https://lsapp.dev/lsapp/public/Chambres">Liste des chambres</a>
                        
                    </li>
                    <li>
                            <a href="#MedecinSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle lafleche">Nouveauté
                                </a>
                            <ul class="collapse list-unstyled" id="MedecinSubmenu">
                                    <li>
                                            <a href="https://lsapp.dev/lsapp/public/posts">Lister</a>
                                        </li>
                                <li>
                                    <a href="https://lsapp.dev/lsapp/public/posts/create">Ajouter</a>
                                </li>
                               
        
                            </ul>
                        </li>
                    
                    <li>
                        <a href="https://lsapp.dev/lsapp/public/Statistiques">Statistiques</a>
                    </li>
                </ul>
            </nav>
    
            <!-- Page Content  -->
            <div id="content" style="width:100%">
                   <div class="container margin">
                       <div class="row">
                           <div class="col-12">
                               @include('inc.messages')
                           </div>
                       </div>
                   </div>
            
                         
                @yield('content')
    
    
    
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
        <!-- Footer -->
        @include('inc.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/Backendjs.js')}}"></script>
    
    <script type="text/javascript">
    /*Side bar function */
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>
    <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
    <script>
         $('textarea').ckeditor();
         //$('.textarea').ckeditor(); // if class is prefered.
    </script>
    @yield('javascript')
</body>

</html>