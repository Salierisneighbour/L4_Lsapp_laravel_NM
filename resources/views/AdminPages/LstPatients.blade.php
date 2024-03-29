@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
        <div class="row">
            
            @if(count($Patients)>0)
            <div class="col-md-12">
                <h4>Liste des patients </h4>
               
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
                            <th>Profession</th>
                            <th>Etat civil</th>
                            <th>Assurence</th>
                            
                            
                            <th>Ordonance</th>
                            <th>Facture</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($Patients as $patient)
                            <tr>
                                <td>{{$patient->id_patient}}</td>
                                <td>{{$patient->NomPatient}}</td>
                                <td>{{$patient->PrenomPatient}}</td>
                                <td>{{$patient->AdrsPatient}}</td>
                                <td>{{$patient->TelPatient}}</td>
                                <td>{{$patient->email}}</td>
                                <td>{{$patient->Sexe}}</td>
                                <td>{{$patient->DateNaissance}}</td>
                                <td>{{$patient->Profession}}</td>
                                <td>{{$patient->EtatCivil}}</td>
                                <td>{{$patient->Assurance}}</td>
                                <td> <form action="{{route('Ordonance',$patient->id_patient)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Ordonance</button>
                                   
                                </form></td>
                                <td><form action="{{route('Facture',$patient->id_patient)}}" method="GET">
                                    @csrf
                                    <button type="submit" class="btn btn-info">Facture</button>

                                </form></td>
                                
                                
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                            data-target="#edit{{ $loop->iteration }}"><i class="fas fa-edit"></i></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                            class="btn btn-danger btn-xs" data-title="Delete"
                                            data-toggle="modal" data-target="#delete{{ $loop->iteration }}"><i
                                                class="fas fa-trash-alt"></i></span></button></p>
                                </td>
                            </tr>

                           


                            



                           

                        <?php $recordid=$patient->id_patient?>
                        @include('Modules.deletemodule')
                          <!--update model-->
                        <div class="modal fade" id="edit{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form class="my-form needs-validation" method="POST" action="{{route('Patients.update', $patient->id_patient)}}" novalidate>
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="form-nom">Nom</label>
                                    <input name="nom" type="text" class="form-control" id="form-nom" placeholder="Nom" value="{{$patient->NomPatient}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="form-prenom">Prenom</label>
                                    <input  name="prenom"  type="text" class="form-control" id="form-prenom" placeholder="Prenom" value="{{$patient->PrenomPatient}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="form-adrs">Adresse</label>
                                    <input  name="adresse" type="text" class="form-control" id="form-adrs" placeholder="Adresse" value="{{$patient->AdrsPatient}}" required>
                                </div>
    
                                <div class="form-group">
                                    <label for="form-tel">Telephone</label>
                                    <input name="telephone" type="text" class="form-control" id="form-tel"   placeholder="Telephone" value="{{$patient->TelPatient}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="form-email">Email</label>
                                    <input   name="email" type="email" class="form-control" id="form-email" placeholder="email" value="{{$patient->email}}" required>
                                </div>
                                <div class="form-group">
                                    <p><label for="form-subject">Sexe</label></p>
                                    @if($patient->Sexe=='Masculin')

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
                                    <label for="form-DN">Date de naissance</label>
                                    <input name="datedenaissance" type="text" class="form-control" id="form-DN" placeholder="Date de naissance" value="{{$patient->DateNaissance}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="form-prof">Profession</label>
                                    <input name="profession" type="text" class="form-control" id="form-prof" placeholder="Profession" value="{{$patient->Profession}}" required>
                                </div>
                                <div class="form-group">
                                    <label for="form-etat">Etat civil</label>
                                    <input name="etatcivil" type="text" class="form-control" id="form-etat" placeholder="Etat Civil" value="{{$patient->EtatCivil}}" required>
                                </div>
                                
                                @if($patient->Assurance=="CNSS")
                                <div class="form-group">
                                        <label for="form-assure">Assurence</label>
                                        <select name="assurence" id="form-assure" class="form-control" required>
                                        <option selected value="CNSS">CNSS</option>
                                        <option value="CNOPS">CNOPS</option>
                                        <option value="Autre">Autre</option>
                                        </select>
                                </div>
                                @else
                                    @if($patient->Assurance=="CNOPS")
                                    <div class="form-group">
                                            <label for="form-assure">Assurence</label>
                                            <select name="assurence" id="form-assure" class="form-control" required>
                                            <option selected value="CNOPS">CNOPS</option>
                                            <option value="CNSS">CNSS</option>
                                            <option value="Autre">Autre</option>
                                            </select>
                                    </div>
                                    @else
                                    <div class="form-group">
                                            <label for="form-assure">Assurence</label>
                                            <select name="assurence" id="form-assure" class="form-control" required>
                                            <option selected value="Autre">Autre</option>
                                            <option value="CNSS">CNSS</option>
                                            <option value="CNOPS">CNOPS</option>
                                            </select>
                                    </div>
                                    @endif
                                @endif
                                <input type="hidden" name="_method" value="PUT">
                                
                            
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" value="{{$recordid=$patient->id_patient}}"> 
                            <button type="submit" class="btn btn-success btn-lg" style="width:100%"><i
                                    class="fas fa-check-circle"></i>Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
                  @endforeach          

                        </tbody>

                    </table>


                </div>
            </div>
        </div>
        {{$Patients->links()}}
        @else
        <div class="container margin">
                <div class="jumbotron">
                <h2 class="text-info">Pas de patients hospitalisés</h2>
                </div>
            </div> 
        @endif

        
        <!--Add  model-->
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
                    <form class="my-form needs-validation" method="POST" action="{{route('Patients.store')}}" novalidate> 
                            {{csrf_field()}}
                            
                            <div class="form-group">
                                <label for="form-name">Nom</label>
                                <input  name="nom" type="text" class="form-control" id="form-name" placeholder="Nom" required>
                            </div>
                            <div class="form-group">
                                <label for="form-prenom">Prenom</label>
                                <input name="prenom" type="text" class="form-control" id="form-prenom" placeholder="Prenom" required>
                            </div>
                            <div class="form-group">
                                <label for="form-adrs">Adresse</label>
                                <input  name="adresse" type="text" class="form-control" id="form-adrs" placeholder="Adresse" required>
                            </div>

                            <div class="form-group">
                                <label for="form-tel">Telephone</label>
                                <input name="telephone" type="text" class="form-control" id="form-tel"  placeholder="Telephone" required>
                            </div>
                            <div class="form-group">
                                <label for="form-email">Email</label>
                                <input  name="email" type="email" class="form-control" id="form-email" placeholder="email" required>
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
                                <label for="form-Dn">Date de naissance</label>
                                <input  name="datedenaissance" type="date" class="form-control" id="form-Dn"  placeholder="Date de naissance" required>
                            </div>
                            <div class="form-group">
                                <label for="form-prof">Profession</label>
                                <input  name="profession" type="text" class="form-control" id="form-prof"
                                    placeholder="Profession" required>
                            </div>
                            <div class="form-group">
                                <label for="form-etat">Etat Civil</label>
                                <input  name="etatcivil" type="text" class="form-control" id="form-etat"
                                    placeholder="Etat Civil" required>
                            </div>
                          
                            <div class="form-group">
                                    <label for="form-assure">Assurence</label>
                                    <select name="assurence" id="form-assure" class="form-control" required>
                                    <option selected value="">Selectionez...</option>
                                    <option value="CNSS">CNSS</option>
                                    <option value="CNOPS">CNOPS</option>
                                    <option value="Autre">Autre</option>
                                    </select>
                            </div>
                           

                        
                    </div>
                    <div class="modal-footer">

                        <button type="Submit" class="btn btn-info btn-lg" style="width:100%"><i
                                class="fas fa-check-circle"></i>Ajouter</button>
                    </div>
                </div>
            </form>
            </div>
        </div>










    </div>
    <div class="container" style="margin-top:3rem">
        <div class=jumbotron>
            <h3>Ajouter un patient</h3>
            <p data-placement="top" data-toggle="tooltip" title="Add"><button class="btn btn-primary btn-xs"
                    data-title="Add" data-toggle="modal" data-target="#Add"><i
                        class="fas fa-user-plus"></i></span>Ajouter</button></p>
        </div>
    </div>




@endsection

@section('javascript')

@endsection