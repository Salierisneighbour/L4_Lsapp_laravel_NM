@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
<h2>Demande de rendez-vous</h2>
<hr>
<p>This table will be filled automatically this is just an example to show you how it would look if filled.
    When you click on "Affecter" the list of available doctors and chambers shows up , no way of showing
    this without database
</p>
</div>
<div class="container">
<div class="row">
     @if(count($LesDemandes)>0)
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Patients</h3>
           
            <div class="float-right">
                <button class="btn btn-default btn-xs btn-filter"><i class="fas fa-filter"></i></span>
                    Filter</button>
            </div>
        </div>
        
        <table class="table table-responsive">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Nom" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Prenom" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Adresse" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Telephone" disabled></th>
                    <th><input type="text" class="form-control" placeholder="email" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Sexe" disabled></th>                    
                    <th><input type="text" class="form-control" placeholder="Date de naissance" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Profession" disabled></th>
                    <th><input type="text" class="form-control" placeholder="etat civil" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Assurence" disabled></th>
                    <th><input type="text" class="form-control" placeholder="motif" disabled></th>
                </tr>
            </thead>
            <tbody>
               @foreach($LesDemandes as $Demande)
                <tr>
                    <td>{{$Demande->id}}</td>
                    <td>{{$Demande->NomPatient}}</td>
                    <td>{{$Demande->PrenomPatient}}</td>
                    <td>{{$Demande->AdrsPatient}}</td>
                    <td>{{$Demande->TelPatient}}</td>
                    <td>{{$Demande->email}}</td>
                    <td>{{$Demande->Sexe}}</td>                    
                    <td>{{$Demande->DateNaissance}}</td>
                    <td>{{$Demande->Profession}}</td>
                    <td>{{$Demande->EtatCivil}}</td>
                    <td>{{$Demande->Assurance}}</td>
                    <td>{{$Demande->Motif}}</td>
                   
                    <td><p data-placement="top" data-toggle="tooltip" title=Affecter><button
                        class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                        data-target="#Add{{$loop->iteration}}">Affecter</span></button></p></td>




                    <!--Add model -->
                    <div class="modal fade" id="Add{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="Add{{ $loop->iteration }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="edit">Affecter</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                <form class="my-form" method="POST" action="{{route('TodaysRdvs.update',$Demande->id)}}">
                                        {{csrf_field()}}
                                          
                
        
                                            <div class="form-group">
                                                    <label for="inputState2">Selectioner un medecin</label>
                                                    <select name="idmedecin" id="inputState2" class="form-control">
                                                    <option selected>Selectioner...</option>
                                                    @foreach ($Medecins as $Medecin)
                                                   
                                                   
                                                    
                                                    <option value="{{$Medecin->id_medecin}}">{{$Medecin->NomMedecin." ".$Medecin->PrenomMedecin}}</option>
                                                   
                                                    @endforeach
                                                    </select>
                                                </div>
                                    
                                    <div class="form-group">
                                        
                                        <label for="form-Drdv">Date du rendez-vous</label>
                                    
                                        <input   name ="daterendezvous" type="text" class="form-control form_datetime" id="form-Drdv" placeholder="Date du rendez-vous">
                                       
                                                 
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="form-motif">Motif</label>
                                        <input name ="motif" type="text" class="form-control" id="form-motif" placeholder="Motif"">
                                    </div>
        
                                   
                                            
                                            
                                            
                                   
        
                                
                            
                                    <input type="hidden" name="_method" value="PUT">
                                </div>
                                <div class="modal-footer">
                                    
                                    <button type="submit" class="btn btn-info btn-lg" style="width:100%"><i
                                            class="fas fa-check-circle"></i>Affecter</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>






                    
                </tr>
               @endforeach
            </tbody>
        </table>
        @else
        <div class="col-12">
        <div class="container margin">
                <div class="jumbotron">
                <h2 class="text-info">Pas de Demande</h2>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
</div>


@endsection

@section('javascript')

@endsection