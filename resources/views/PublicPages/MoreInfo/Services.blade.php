@extends('layouts.PublicPages')


@section('Css')

@endsection
<link href="{{asset('css/Services.css')}}" rel="stylesheet">
<link href="{{asset('css/HomeCss.css')}}" rel="stylesheet">
@section('content')

    
        <!-- Sidebar -->
       


        


            <div class="container-fluid padding margin">
                <div class="container margin">
                    <div class="jumbotron">
                        <h1 class="text-left text-success">DES SERVICES POUR VOTRE SANTÉ</h1>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#RDVMODEL" data-whatever="@patients">Rendez-vous</button>

                    </div>
                    <div class="row text center padding">
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <h3>MÉDECIN DE FAMILLE</h3>
                            <p class="text-justify">La clinique médicale de Coaticook compte plus d’une douzaine
                                d’omnipraticiens réunit dans un
                                groupe de médecine familiale (GMF) afin d’assurer un travail de collaboration avec une
                                vaste
                                équipe professionnelle en santé.

                                Ce travail de groupe permet d’assurer une meilleure réponse aux besoins de plus en plus
                                diversifiés des patients.</p>

                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <h3>VISITE À DOMICILE</h3>
                            <p class="text-justify">Les médecins de famille de la clinique effectuent des visites à
                                domicile pour les patients en
                                perte d’autonomie sévère entraînant une incapacité à se rendre à la clinique.</p>

                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <h3>CLINIQUE DE DÉPANNAGE / URGENCES MINEURES</h3>
                            <p class="text-justify">La clinique de dépannage est réservée aux patients inscrits auprès
                                d’un omnipraticien faisant
                                partie de notre GMF. Le mercredi, les patients sans médecins de famille de la région de
                                la
                                MRC de Coaticook peuvent s’inscrire à ces consultations d’urgence.</p>

                        </div>
                    </div>
                </div>
                <div class="container padding margin">
                    <div class="row padding">
                        <div class="col-lg-6">
                            <h2>CHIRURGIES MINEURES</h2>
                            <p>
                                La clinique possède maintenant une salle de chirurgies mineures où plusieurs petites
                                interventions sont effectuées, tels les retraits de petites lésions cutanées, la
                                cryothérapie (azote liquide) les infiltrations, les biopsies ou ponctions, réparations
                                simples de plaies, ongles incarnés et ce après consultation avec un de nos
                                professionnels.
                            </p>
                            <br>
                        </div>
                        <div class="col-lg-6">
                            <img src="images/bloc.jpg" class="img-fluid">
                        </div>
                    </div>



                </div>
                <div class="container margin">
                <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    INFIRMIÈRES PRATICIENNES SPÉCIALISÉES 
                              </button>
                            </h2>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                    Les IPS en soins de première ligne donnent des soins de santé à une clientèle diversifiée : nouveau-nés, enfants, adolescents, adultes, femmes enceintes et personnes âgées. Ses activités sont principalement liées à la gestion des problèmes de santé courants (exemple : infection urinaire, infection vaginale, sinusite, amygdalites, etc.), le suivi des patients souffrant de maladies chronique (diabète, asthme, hypertension artérielle, etc. ) ainsi qu’au suivi de grossesse. Les IPS peuvent prescrire les médicaments, les radiographies les examens de laboratoires et les prélèvements simples dans le cadre d’un suivi périodique.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    LES INFIRMIÈRES GMF
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                    Les infirmières GMF assurent un suivi conjoint avec le médecin des patients atteints de maladies chroniques (exemple : diabète, haute pression artérielle, etc. ) et des enfants de 0 à 5 ans. Elles font l’enseignements aux patients pour la prévention et la gestion des maladies. Elles participent aux activités de dépistage telles que les ITSS, les cytologies gynécologiques et peuvent collaborer aux visites pour la contraception.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    INFIRMIÈRE AUXILIAIRE
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                    L’infirmière auxiliaire collabore à la collecte des informations qui seront nécessaires à votre suivi avec votre médecin. Elle peut également assister les médecins lors des chirurgies mineures, des examens gynécologiques et injecter certains médicaments.
                            </div>
                          </div>
                        </div>
                      </div>
            </div>

        </div>
        
      

        </div>


        <!--RDVMODEL--> 
        @include('Modules.rdvmodule')

       @endsection
    @section('Javasctipt')
   
    @endsection


