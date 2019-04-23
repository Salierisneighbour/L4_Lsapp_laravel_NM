@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
        <div class="row" style="margin-bottom:2rem;">
            <div class="col-6">
                    <form>
                            <div class="form-group">
                                <label for="Date">Date</label>
                                <input type="text" class="form-control" id="Date"
                                    placeholder="Date">
                            </div>

                            <div class="form-group">
                                    <label for="IDfact">Numero de la facture</label>
                                    <input type="text" class="form-control" id="IDfact"
                                        placeholder="Numero de la facture">
                                </div>
                                <div class="form-group">
                                        <label for="Nomdupatient">Nom du patient</label>
                                <input type="text" class="form-control" id="Nomdupatient" value="{{$Patient->NomPatient." ".$Patient->PrenomPatient}}"
                                            readonly>
                                    </div>
                                <div class="form-group">
                                        <label for="Modepay">Mode de payement</label>
                                        <select class="form-control" id="Modepay">
                                                <option>Espéces</option>
                                                <option>Chéque</option>
                                                <option>Virement</option>
                                              </select>
                                    </div>
                                    <div class="form-group">
                                            <label for="Montant">Montant</label>
                                            <input type="text" class="form-control" id="Montant"
                                                placeholder="Montant" >
                                        </div>  
                                        <div class="form-group">
                                                <label for="Pharmacie">Pharmacie</label>
                                                <input type="text" class="form-control" id="Pharmacie"
                                                    placeholder="Pharmacie" >
                                            </div>  
                                            <div class="form-group">
                                                    <label for="Hospitalisation">Hospitalisation</label>
                                                    <input type="text" class="form-control" id="Hospitalisation"
                                                        placeholder="Hospitalisation" >
                                                </div>  
                                                <div class="form-group">
                                                        <label for="Consultation">Consultation</label>
                                                        <input type="text" class="form-control" id="Consultation"
                                                            placeholder="Consultation" >
                                                    </div>  
                        </form>


            </div>
            <div class="col-4" style="margin-top:2rem; margin-left:2rem;">
                <div class="row">
                    <button type="button" class="btn btn-primary btn-lrg">Imprimer</button>

                </div>

            </div>
        </div>
    </div>

@endsection

@section('javascript')

@endsection