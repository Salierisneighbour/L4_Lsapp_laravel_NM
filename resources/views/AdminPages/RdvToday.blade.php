@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
        <div class="row">
            
            @if(count($RDVS)>0)
            <div class="col-md-12">
                <h4>Liste des patients qui ont rendez-vous aujourd'hui </h4>
               
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

                            <th>Date</th>
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
                            <th>id medecin</th>
                            <th>Medecin</th>
                            <th>Ordonance</th>
                            <th>Facture</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($RDVS as $RDV)
                            
                            @foreach($Patients as $patient)
                            @if($patient->id_patient == $RDV->id_patient)
                            <tr>
                                <td>{{$RDV->Date_RDV}}</td>
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
                                <td>{{$RDV->id_medecin}}</td>
                                @foreach($Medecins as $Medecin)
                                @if($Medecin->id_medecin == $RDV->id_medecin)
                                <td>{{$Medecin->NomMedecin." ".$Medecin->PrenomMedecin}}</td>
                                @endif
                                @endforeach
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



                            @foreach($Patients as $patient)
                            @if($patient->id_patient == $RDV->id_patient)
                            
                            @include('Modules.deletemodule')
                            <?php $recordid = $RDV->id_rdv ?>
                             <!--update model -->
 <div class="modal fade" id="edit{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="edit{{ $loop->iteration }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit">Modifier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            <form class="my-form needs-validation" method="POST"  action="{{route('RdvDemande.updating',$RDV->id_rdv)}}" novalidate>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="form-id">id du patient</label>
                        <input name ="idpatient" type="text" class="form-control" id="form-id" value="{{$patient->id_patient}}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="form-non">Nom complet du patient</label>
                        <input name ="nomprenompatient" type="text" class="form-control" id="form-non" value="{{$patient->NomPatient." ".$patient->PrenomPatient}}" readonly>
                    </div>


                        <div class="form-group">
                                <label for="inputState2">Selectioner un medecin</label>
                                <select name="idmedecin" id="inputState2" class="form-control" required>
                                 @foreach ($Medecins as $Medecin)
                                 @if($Medecin->id_medecin == $RDV->id_medecin)
                                <option  value="{{$Medecin->id_medecin}}" selected>{{$Medecin->NomMedecin." ".$Medecin->PrenomMedecin}}</option>
                                @endif
                                @endforeach
                                @foreach ($Medecins as $Medecin)
                                @if($Medecin->id_medecin != $RDV->id_medecin)
                               
                                
                                <option value="{{$Medecin->id_medecin}}">{{$Medecin->NomMedecin." ".$Medecin->PrenomMedecin}}</option>
                               @endif
                                @endforeach
                                </select>
                            </div>
                
                <div class="form-group">
                    <label for="form-Drdv">Date du rendez-vous</label>
                    <input name ="daterendezvous" type="text" class="form-control" id="form-Drdv" value="{{$RDV->Date_RDV}}" required>
                </div>
                <div class="form-group">
                    <label for="form-motif">Motif</label>
                    <input name ="motif" type="text" class="form-control" id="form-motif" value="{{$RDV->Motif}}" required>
                </div>

           

            
        
                <input type="hidden" name="_method" value="PUT">
            </div>
            <div class="modal-footer">
                
                <button type="submit" class="btn btn-info btn-lg" style="width:100%"><i
                        class="fas fa-check-circle"></i>Ajouter</button>
            </div>
        </div>
    </form>
    </div>
</div>
@endif
@endforeach














                            @endif
                            @endforeach
                           


                            



                           

                        <?php $recordid=$patient->id_patient?>
                        @include('Modules.deletemodule')
                      
                  @endforeach          

                        </tbody>

                    </table>


                </div>
            </div>
        </div>

        @else
        <div class="container margin">
                <div class="jumbotron">
                <h2 class="text-info">Pas de rendez-vous ajourd'hui</h2>
                </div>
            </div> 
        @endif

        
        










    </div>
    



@endsection

@section('javascript')

@endsection