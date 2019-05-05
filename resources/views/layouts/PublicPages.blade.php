<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NomClinique</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet"> 
    
    <!-- Custom fonts for this template -->
    <link href="Fonts/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="Icons/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="Icons/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">


   @yield('Css')
    


   
</head>

<body>



    <!-- Navigation -->

    @include('inc.navbar')

    @yield('content')











    <!-- Footer -->
    @include('inc.footer')



    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/FormValidation.js')}}"></script>
   
    @yield('Javasctipt')


</body>

</html>