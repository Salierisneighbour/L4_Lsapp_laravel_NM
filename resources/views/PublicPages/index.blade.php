@extends('layouts.PublicPages')

@section('Css')
 <!-- Custom Home Css -->
  
<link href="{{asset('css/HomeCss.css')}}" rel="stylesheet">

@endsection


@section('content')
    <!-- Masthead -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/mastheadslid1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1 class="display-1 ">NomClinique</h1>
                    <p> <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
                    </p>
                    <p>
                        <i class="fa fa-phone"></i> +1 5589 55488 55
                    </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Conceil" data-whatever="@patients">Demander Conceil</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/mastheadslid2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h1 class="display-3">RENDEZ VOUS EN LIGNE</h1>
                    <h4>Tous les médecins de la Clinique Médicale offrent maintenant des rendez-vous en ligne !
                    </h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#RDVMODEL" data-whatever="@patients">Rendez-vous</button>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container" style="margin-top:3rem">
        <div class="row">
            <div class="col-12">
                @include('inc.messages')
            </div>
        </div>
    </div>

    <!-- About us -->
    <div class="container" style="margin-top:3rem;">


        <div class="row ">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 tableimage ">
                <img src="images/clinique1.jpg">
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 tableimage">
                            <div class="card bg-dark text-white">
                                <img src="images/radiologie.jpg" class="card-img" alt="..." style=" opacity: 0.5;">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Reanimation </h5>
                                    <p class="card-text">Le plus grand service de réanimation au Maroc avec 20 boxes
                                        conformes aux normes.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 tableimage">
                            <div class="card bg-dark text-white">
                                <img src="images/radiologie.jpg" class="card-img" alt="..." style=" opacity: 0.5;">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">radiologie</h5>
                                    <p class="card-text">Un service de radiologie performant avec des équipements de
                                        dernier cri : Centre IRM, Scan multibarettes .</p>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 tableimage ">
                            <div class="card bg-dark text-white">
                                <img src="images/bloc.jpg" class="card-img" alt="..." style=" opacity: 0.5; ">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Bloc Operatoire</h5>
                                    <p class="card-text">Un service de radiologie performant avec des équipements de
                                        dernier cri : Centre IRM, Scan multibarettes .</p>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6 tableimage ">
                            <div class="card bg-dark text-white">
                                <img src="images/bloc.jpg" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Medecin</h5>
                                    <p class="card-text">130 Médecins de toutes spécialités, compétents et hautement
                                        qualifiés .</p>

                                </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>
   
    <div class="container" style="margin-top:3rem;">


        <div class="card">
            <div class="row no-gutters">
                <div class="col-auto">
                    <img src="images/Directeur.jpg" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <div class="card-block px-2">
                        <h4 class="card-title" style="margin:2rem;"><span class="text-success">Mot du directeur</span>
                        </h4>
                        <p class="card-text" style="margin:2rem;"></p>

                    </div>
                </div>
            </div>
            <div class="card-footer w-100 text-muted">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Motpresident">
                    Read More
                </button>
            </div>
            <div class="modal fade" id="Motpresident" tabindex="-1" role="dialog" aria-labelledby="Motpresident"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="Motpresident">Mot Directeur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Agir convenablement pour la Santé et le Bien être de ses patients est en principe une
                            Responsabilité Sociale. Jusqu’à quelle mesure nous assumons cette Responsabilité?
                            Sommes-nous à la hauteur des aspirations de notre population ? Sommes-nous au quotidien de
                            part nos gestes les plus élémentaires à la hauteur des attentes de nos patients ?

                            Plus que jamais et au sein de notre Clinique Internationale de Marrakech, ces questions on
                            se les pose ? Et on a la profonde et véritable volonté d’assurer notre Responsabilité
                            Sociale. Et labelliser notre Clinique, la Clinique Socialement Responsable… Plus que jamais,
                            nos infrastructures, nos programmes, nos projets doivent impérativement répondre à un seul
                            et unique souci celui de la population, celui de nos patients…

                            Les infrastructures sanitaires au sein de la ville de Marrakech, dieu merci, se multiplie.
                            L’effort aussi bien public que privé en matière d’installation des infrastructures médicales
                            ne cesse de croitre, et tant mieux pour notre ville, notre région et pour notre nation. La
                            région Marrakech-Safi avec sa nouvelle nomenclature, ses huit provinces compte désormais 4,5
                            millions d’habitants, 60 % de la population est rurale. Les Indicateurs de la santé restent
                            malgré tous les efforts loin des ambitions de notre Maroc moderne.

                            Notre région s’ouvre sur tous les territoires du sud de notre royaume, il draine en matière
                            de besoins de santé toutes les régions du sud. Notre région est par ailleurs, une véritable
                            porte vers notre continent l’Afrique, et là encore notre responsabilité est si grande par
                            rapport aux besoins de notre continent en matière de besoins de santé.

                            Notre ville, Marrakech est aussi notre portail à l’International. Visitée, aimée de tous,
                            nous considérons en devoir d’apporter à nos visiteurs les meilleurs services de santé aux
                            normes et aux compétences indéniables.

                            Plus que jamais, nous sommes déterminés à relever ces défis et faire de notre nouvelle
                            vision au sein de la Clinique Internationale de Marrakech, la véritable infrastructure
                            sanitaire privée Socialement Responsable…

                            Pas en slogans, ni en mots arbitraires, ni en programmes de charité ou de bienfaisance, mais
                            avec une véritable stratégie de développement qui vise de plus en plus la modernisation de
                            notre mode de gouvernance, l’extension de nos infrastructures par rapport à de véritables
                            besoins en terme de spécialisation et de qualité des soins et des interventions, l’ouverture
                            sur les véritables compétences nationales et internationales en matière de médecins mais
                            aussi du corps paramédical. Se sont là les lignes directrices de notre gage pour assurer
                            notre responsabilité sociale.

                            Par ce mot de présentation et d’orientation de notre Clinique, je ne veux nullement parler
                            de nos compétences ni de notre plateau technique, éléments qui seront largement décrits sur
                            notre site, j’ai insisté plutôt sur notre système de valeurs et sur notre responsabilisé et
                            sur notre réelle détermination à l’assumer…

                            C’est exactement ce qui nous différencie et va continuer à nous différencier et fais de nous
                            la plus grande structure médicale privée à Marrakech au service de sa population Locale,
                            Régionale, Nationale et Internationale... Nous sommes à votre service, au service de votre
                            santé, votre patrimoine le plus noble…

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Nouveauté 
    This part will be dynamic the adimin can add posts from the back-end once he signs in he can also edit straight from here 
    -->
    <section id="newsfeed" class="newsfeed">
        <div class="container-fluid">
            <div class="row welcome text-center" style="margin:3rem;">
                <div class="col-12">
                    <h1 class="display-4 text-wrap font-weight-bold"><span class="text-success">Nouveauté</span></h1>


                </div>
            </div>
            <div class="jumbotron">
               @if(count($posts)>0)
               <div class="container-fluid">
                   <div class="row">
                       @foreach($posts as $post)
                       <div class="col-md-6" style="margin-bottom:2rem;">
                           <div class="card">
                               <img class="card-img-top img-fluid" src="images/Directeur.jpg" >
                               <div class="card-body">
                               <h4 class="card-title">{{$post->title}}</h4>
                               <p class="card-text">{{$post->Fbody}}</p>
                               <p class="card-text"><small class="text-muted">Ecris le {{$post->created_at}}</small></p>
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $loop->iteration }}" href="/posts/{{$post->id}}">
                                        Read More
                                    </button>
                               </div>
                              
                           </div>
                       </div>




    <div class="modal fade" id="exampleModalCenter{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">{{$post->title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 {{$post->Mbody}}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


















                     @endforeach 
                     
                   </div>
               </div>
              
               @else
               <h3 class="text-info">Pas de nouveauté<h3>
               @endif
                      
                            
           
            
        </div>
    </section>

   




    




    <!-- gallery -->
    <section id="Gallery" class="Gallery">

        <div id="slides2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slides2" data-slide-to="0" class="active"></li>
                <li data-target="#slides2" data-slide-to="1"></li>
                <li data-target="#slides2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/mastheadslid1.jpg" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="images/mastheadslid2.jpg" class="d-block w-100" alt="...">

                </div>
                <div class="carousel-item">
                    <img src="images/mastheadslid1.jpg" class="d-block w-100" alt="...">

                </div>

            </div>
            <a class="carousel-control-prev" href="#slides2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slides2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!--Contact -->

    <section id="Contact" class="Contact">
        <div class="container" style="margin-top:3rem; margin-bottom:3rem;">
            <div class="text-center">
                <h1><span class="text-success">Contacter nous</span></h1>
            </div>
            <hr>
            <br />
            <div class="row">

                <br />
                <div class="col-md-4">
                    <form class="my-form" method="post"  action="{{route('DemandeConseil.store')}}">
                        {{csrf_field()}}
                          <div class="form-group">
                              <label for="form-name">Full Name</label>
                              <input type="text" class="form-control" id="form-name" placeholder="Full Name" name="fullname">
                          </div>
                          <div class="form-group">
                              <label for="form-email">Email Address</label>
                              <input type="email" class="form-control" id="form-email" placeholder="Email Address" name="email">
                          </div>
                          <div class="form-group">
                              <label for="form-subject">Telephone</label>
                              <input type="text" class="form-control" id="form-subject" placeholder="Subject" name="telephone">
                          </div>
                          <div class="form-group">
                              <label for="form-message">Send your Message</label>
                              <textarea class="form-control" id="form-message" placeholder="Message" name="message"></textarea>
                          </div>
                          
                        <button class="btn btn-default col-12 col-md-12 mb-2 mb-md-0" type="submit">Contact Us</button>
                    </form>
                </div>
                <div class="col-md-5">
                    <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <p>Veuillez vous rendre à l'adresse suivante</p>
                        </div>
                        <div class="col-md-12">
                            <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
                            <p>San Francisco, CA 94126</p>
                            <p>United States</p>
                        </div>

                        <div class="col-md-12">
                            <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
                            <p>+ 01 234 567 89</p>
                            <p>Mon - Fri, 8:00-22:00</p>
                        </div>

                        <div class="col-md-12">
                            <a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
                            <p>info@gmail.com</p>
                            <p>sale@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Model Coneil-->
    @include('Modules.moduleconseil')

     @include('Modules.rdvmodule')

@endsection






