@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
        <div class="row">

            @if(count($Occups)>0)
            <div class="col-md-12">
                <h4>Patients Hospitalisés</h4>
               
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
                            <th>Numero Chambre</th>
                            <th>Date debut d'occupation</th>
                            <th>Date fin d'occupation</th>
                            
                            <th>Ordonance</th>
                            <th>Facture</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($Occups as $Occup)
                            <tr>
                                
                                <td>{{$Occup->id_patient}}</td>
                                @foreach($Patients as $patient)
                                @if($patient->id_patient == $Occup->id_patient)
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
                                @endif 
                                @endforeach
                                @foreach ($Chambres as $chambre)
                                @if($chambre->id_chambre == $Occup->id_chambre)
                                <td>{{$chambre->NumChambre}}</td> 
                                @endif 
                                @endforeach
                                
                                <td>{{$Occup->DateDebutOccup}}</td>
                                <td>{{$Occup->DateFinOccup}}</td>
                                <td><button type="button" class="btn btn-success">Ordonance</button></td>
                                <td><button type="button" class="btn btn-info">Facture</button></td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                            data-target="#edit{{$loop->iteration}}"><i class="fas fa-edit"></i></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                            class="btn btn-danger btn-xs" data-title="Delete{{ $loop->iteration }}"
                                            data-toggle="modal" data-target="#delete{{ $loop->iteration }}"><i
                                                class="fas fa-trash-alt"></i></span></button></p>
                                </td>
                            </tr>

                           


                            



                           

                        
                        @include('Modules.deletemodule')
                          <!--update model-->
                        <div class="modal fade" id="edit{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="edit{{ $loop->iteration }}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="edit">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="my-form" method="POST" action="{{route('PatHosp.update' ,$Occup->id)}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                <label for="form-ID">ID Patient</label>
                                <input name ="idpatient" type="text" class="form-control" id="form-ID" value="{{$Occup->id_patient}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="inputState3">Selectioner une chambre</label>
                                <select name="idchambre" id="inputState3" class="form-control">
                                @foreach ($Chambres as $chambre)
                                @if($chambre->id_chambre == $Occup->id_chambre)
                                <option selected>{{$chambre->NumChambre}}</option>
                                @endif
                                @endforeach
                                @foreach($Chambreslibre as $Chambrelibre)
                                @if($Chambrelibre->id_chambre != $Occup->id_chambre )
                                <option value="{{$Chambrelibre->id_chambre}}">{{$Chambrelibre->NumChambre}}</option>
                                @endif
                                @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="form-DB">Date debut d'occupation</label>
                                <input name ="DBOcuup" type="text" class="form-control" id="form-DB"  value="{{$Occup->DateDebutOccup}}">
                            </div>
                            <div class="form-group">
                                <label for="form-DF">Date fin d'occupation</label>
                                <input name ="DFOcuup" type="text" class="form-control" id="form-DF"  value="{{$Occup->DateFinOccup}}">
                            </div>

                            <input type="hidden" name="_method" value="PUT">

                        
                    
                
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" value="{{$recordid=$Occup->id}}"> 
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
        </div>

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
                        <h5 class="modal-title" id="Add">Affecter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="my-form" method="POST" action="{{route('PatHosp.store')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                        <label for="inputState1">Selectioner un patient</label>
                                        <select name="idpatient" id="inputState1" class="form-control">
                                          <option selected>Selectioner...</option>
                                          
                                          @foreach($PatientsNonHosp as $PatientNonHosp)        
                                          <option value="{{$PatientNonHosp->id_patient}}">{{$PatientNonHosp->NomPatient." ".$PatientNonHosp->PrenomPatient}}</option>
                                          @endforeach      
                                                   
                                         
                                        </select>
                                 </div>
                                 <div class="form-group">
                                                <label for="inputState2">Selectioner une chambre</label>
                                                <select name="idchambre" id="inputState2" class="form-control">
                                                <option selected>Selectioner...</option>
                                                @foreach($Chambreslibre as $Chambreslibre)
                                                <option value="{{$Chambreslibre->id_chambre}}">{{$Chambreslibre->NumChambre}}</option>
                                                @endforeach
                                                </select>
                                </div>
                              
                            <div class="form-group">
                                <label for="form-DB">Date debut d'occupation</label>
                                <input name ="DBOcuup" type="text" class="form-control" id="form-DB" placeholder="Date debut d'occupation">
                            </div>
                            <div class="form-group">
                                <label for="form-DF">Date fin d'occupation</label>
                                <input name ="DFOcuup" type="text" class="form-control" id="form-DF" placeholder="Date fin d'occupation">
                            </div>

                            

                        
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-info btn-lg" style="width:100%"><i
                                class="fas fa-check-circle"></i>Ajouter</button>
                    </div>
                </form>
                </div>
            </div>
        </div>










    </div>
    <div class="container" style="margin-top:3rem">
        <div class=jumbotron>
            <h3>Affecter un patient a une chambre</h3>
            <p data-placement="top" data-toggle="tooltip" title="Add"><button class="btn btn-primary btn-xs"
                    data-title="Add" data-toggle="modal" data-target="#Add"><i
                        class="fas fa-user-plus"></i></span>Affecter</button></p>
        </div>
    </div>




@endsection

@section('javascript')

@endsection