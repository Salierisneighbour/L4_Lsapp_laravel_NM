@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
        <div class="row">

           
            <div class="col-md-12">
                @if(count($Medecins)>0)
                <h4>Liste des Medecins</h4>


                <div class="col-12" style="margin-top:2rem;margin-bottom:2rem;">
                    <form action="#" method="get">
                        <div class="input-group">

                            <input class="form-control" id="system-search" name="q" placeholder="Search for"
                                required>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-default btn-outline-dark"><i
                                        class="fas fa-search-plus"></i></button>
                            </span>
                        </div>
                    </form>
                </div>


                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped table-list-search">

                        <thead>


                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Addresse</th>
                            <th>Telephone</th>
                            <th>email</th>
                            <th>Sexe</th>
                            <th>Date de naissance</th>
                            <th>Prestation</th>
                            <th>Etat civil</th>

                            <th>Agenda</th>

                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($Medecins as $Medecin)
                                
                            
                            <tr>
                                <td>{{$Medecin->id_medecin}}</td>
                                <td>{{$Medecin->NomMedecin}}</td>
                                <td>{{$Medecin->PrenomMedecin}}</td>
                                <td>{{$Medecin->AdrsMedecin}}</td>
                                <td>{{$Medecin->TelMedecin}}</td>
                                <td>{{$Medecin->email}}</td>
                                <td>{{$Medecin->Sexe}}</td>
                                <td>{{$Medecin->DateNaissance}}</td>
                                <td>{{$Medecin->Prestation}}</td>
                                <td>{{$Medecin->EtatCivil}}</td>

                                <td><button type="button" class="btn btn-success">Agenda</button></td>

                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                            data-target="#edit{{ $loop->iteration }}"><i class="fas fa-edit"></i></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                            class="btn btn-danger btn-xs" data-title="Delete"
                                            data-toggle="modal" data-target="#delete{{$loop->iteration}}"><i
                                                class="fas fa-trash-alt"></i></span></button></p>
                                </td>
                            </tr>




                            
                           <?php $recordid=$Medecin->id_medecin ?>
                            @include('Modules.deletemodule')
                            

                       <!--update model-->
        <div class="modal fade" id="edit{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="RDVMODEL"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit">Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form class="my-form needs-validation" method="POST" action="{{route('Medecin.update',$Medecin->id_medecin)}}"  novalidate>
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="form-name">Nom</label>
                                <input  name="nom" type="text" class="form-control" id="form-name" placeholder="Nom" value="{{$Medecin->NomMedecin}}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-email">Prenom</label>
                                <input name="prenom" type="text" class="form-control" id="form-email" placeholder="Prenom" value="{{$Medecin->PrenomMedecin}}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-adrs">Adresse</label>
                                <input name="adresse" type="text" class="form-control" id="form-adrs" placeholder="Adresse" value="{{$Medecin->AdrsMedecin}}" required>
                            </div>
    
                            <div class="form-group">
                                <label for="form-tel">Telephone</label>
                                <input name="telephone" type="text" class="form-control" id="form-tel" placeholder="Telephone" value="{{$Medecin->TelMedecin}}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-email">Email</label>
                                <input name="email" type="email" class="form-control" id="form-email" placeholder="email" value="{{$Medecin->email}}" required>
                            </div>
                            <div class="form-group">
                                    <p><label for="form-subject">Sexe</label></p>
                                    @if($Medecin->Sexe=='Masculin')

                                    <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="Masculin" checked required>
                                            <label class="form-check-label" for="inlineRadio1">Masculin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="Feminin" required>
                                            <label class="form-check-label" for="inlineRadio2">Feminin</label>
                                   @else 
                                   <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="Masculin" required>
                                        <label class="form-check-label" for="inlineRadio1">Masculin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="Feminin" checked required>
                                        <label class="form-check-label" for="inlineRadio2">Feminin</label>
                                   @endif
                                </div>
                            <div class="form-group">
                                <label for="form-date">Date de naissance</label>
                                <input  name="DateN" type="date" class="form-control" id="form-date" placeholder="Date de naissance" value="{{$Medecin->DateNaissance}}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-presta">Prestation</label>
                                <input  name="prestation" type="text" class="form-control" id="form-presta" placeholder="Prestation" value="{{$Medecin->Prestation}}" required>
                            </div>
                            <div class="form-group">
                                <label for="form-etat">Etat Civil</label>
                                <input name="etatcivil" type="text" class="form-control" id="form-etat" placeholder="Etat Civil" value="{{$Medecin->EtatCivil}}" required>
                            </div>
    
                            <input type="hidden" name="_method" value="PUT">
                       
                    </div>
    
                <div class="modal-footer">
                   
                    <button type="submit" class="btn btn-success btn-lg" style="width:100%"><i
                            class="fas fa-check-circle"></i>Update</button>
                </div>
            </div>
        </form>
        </div>
    </div>
























   























                            @endforeach
                           




                        </tbody>

                    </table>


                </div>
            </div>
            {{$Medecins->links()}}
            @else
            <div class="container margin">
                    <div class="jumbotron">
                    <h2 class="text-info">Pas de medecin</h2>
                    </div>
                </div> 
            @endif
        </div>

        


    </div>





    <div class="container" style="margin-top:3rem;">
        <div class=jumbotron>
            <h3>Ajouter un medecin</h3>
            <p data-placement="top" data-toggle="tooltip" title="Add"><button class="btn btn-primary btn-xs"
                    data-title="Add" data-toggle="modal" data-target="#Add"><i
                        class="fas fa-user-plus"></i></span> Ajouter</button></p>
        </div>

    </div>





    <!--Add model-->
    <div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="Add" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Add">Ajouter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="my-form needs-validation" method="POST" action="{{route('Medecin.store')}}" novalidate>
                            {{csrf_field()}}
                        <div class="form-group">
                            <label for="form-name">Nom</label>
                            <input  name="nom" type="text" class="form-control" id="form-name" placeholder="Nom" required>
                        </div>
                        <div class="form-group">
                            <label for="form-email">Prenom</label>
                            <input name="prenom" type="text" class="form-control" id="form-email" placeholder="Prenom" required>
                        </div>
                        <div class="form-group">
                            <label for="form-adrs">Adresse</label>
                            <input name="adresse" type="text" class="form-control" id="form-adrs" placeholder="Adresse" required>
                        </div>

                        <div class="form-group">
                            <label for="form-tel">Telephone</label>
                            <input name="telephone" type="text" class="form-control" id="form-tel" placeholder="Telephone" required>
                        </div>
                        <div class="form-group">
                            <label for="form-email">Email</label>
                            <input name="email" type="email" class="form-control" id="form-email" placeholder="email" required>
                        </div>
                        <div class="form-group">
                            <p><label for="form-subject">Sexe</label></p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio1" value="Masculin" required>
                                <label class="form-check-label" for="inlineRadio1">Masculin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                    id="inlineRadio2" value="Feminin" required>
                                <label class="form-check-label" for="inlineRadio2">Feminin</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-date">Date de naissance</label>
                            <input  name="DateN" type="date" class="form-control" id="form-date"
                                placeholder="Date de naissance" required>
                        </div>
                        <div class="form-group">
                            <label for="form-presta">Prestation</label>
                            <input  name="prestation" type="text" class="form-control" id="form-presta" placeholder="Prestation" required>
                        </div>
                        <div class="form-group">
                            <label for="form-etat">Etat Civil</label>
                            <input name="etatcivil" type="text" class="form-control" id="form-etat" placeholder="Etat Civil" required>
                        </div>


                   
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info btn-lg" style="width:100%"><i
                            class="fas fa-check-circle"></i>Ajouter</button>
                </div>
            </div>
        </form>
        </div>
    </div>
















@endsection

@section('javascript')

@endsection