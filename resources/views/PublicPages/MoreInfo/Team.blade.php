@extends('layouts.PublicPages')


@section('Css')
  
<link href="css/HomeCss.css" rel="stylesheet">
@endsection


@section('content')

  
        <!-- Sidebar -->
        


        <div class="container">


            <div class="jumbotron">
                <h1 class="text-success text-center">UNE EQUIPE MÉDICALE ET PARAMÉDICALE PERFORMANTE</h1>
                <p class="lead">
                    La CIM assure au quotidien ses services médicaux grâce à une équipe de plus de 50 praticiens dans
                    tous les domaines de la médecine générale, spécialisée et de la chirurgie. Le personnel paramédical,
                    administratif et technique est composé de plus de 250 personnes. Notre investissement permanent,
                    dans la formation, la formation continue, l’évaluation et la recherche continue de la qualité des
                    actes et des soins, forme le socle de notre politique de gouvernance des ressources humaines.
                </p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Conceil" data-whatever="@patients">Demander Conceil</button>
            </div>
            <div class="container-fluid padding">
                <img src="images/Team.jpg" class="img-fluid">
            </div>

        </div>


        <!-- Model Coneil-->
        @include('Modules.moduleconseil')
        
          @section('Javasctipt')
          <script type="text/javascript">
              $(document).ready(function () {
                  $('#sidebarCollapse').on('click', function () {
                      $('#sidebar').toggleClass('active');
                  });
              });
          </script>
          @endsection
   
          @endsection      
