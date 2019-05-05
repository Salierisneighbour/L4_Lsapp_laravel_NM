@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
        <div class="row" style="margin-bottom:2rem;">
            <div class="col-6">
                    <form class="needs-validation" action="{{route('PrintFacture',$Patient->id_patient)}}" method="post" novalidate>
                        @csrf
                            <div class="form-group">
                                <label for="Date">Date</label>
                                <input name="Date" type="date" class="form-control" id="Date"
                                    placeholder="Date" required>
                            </div>

                            <div class="form-group">
                                    <label for="IDfact">Numero de la facture</label>
                                    <input name="NumFac" type="text" class="form-control" id="IDfact"
                                        placeholder="Numero de la facture" required>
                                </div>
                                <div class="form-group">
                                        <label for="Nomdupatient">Nom du patient</label>
                                <input name="NomPatient" type="text" class="form-control" id="Nomdupatient" value="{{$Patient->NomPatient." ".$Patient->PrenomPatient}}"
                                            readonly>
                                    </div>
                                <div class="form-group">
                                        <label for="Modepay">Mode de payement</label>
                                        <select name="modepay"class="form-control" id="Modepay" required>
                                                <option value="Espéces">Espéces</option>
                                                <option value="Chéque">Chéque</option>
                                                <option value="Virement">Virement</option>
                                              </select>
                                    </div>
                                    <div class="form-group">
                                            <label for="Montant">Montant</label>
                                            <input name="montant" type="text" class="form-control" id="Montant"
                                                placeholder="Montant" required>
                                        </div>  
                                        <div class="form-group">
                                                <label for="Pharmacie">Pharmacie</label>
                                                <input name="Pharmacie" type="text" class="form-control" id="Pharmacie"
                                                    placeholder="Pharmacie" required>
                                            </div>  
                                            <div class="form-group">
                                                    <label for="Hospitalisation">Hospitalisation</label>
                                                    <input name="hospita" type="text" class="form-control" id="Hospitalisation"
                                                        placeholder="Hospitalisation" required>
                                                </div>  
                                                <div class="form-group">
                                                        <label for="Consultation">Consultation</label>
                                                        <input name="consulta" type="text" class="form-control" id="Consultation"
                                                            placeholder="Consultation" required>
                                                </div>  
                     


            </div>
            <div class="col-4" style="margin-top:2rem; margin-left:2rem;">
                <div class="row">
                    
                  
                               
                                <button type="submit" class="btn btn-info">Imprimer</button>

                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection

@section('javascript')

@endsection