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
                                    <label for="tire">Titre de l'ordonance</label>
                                    <input type="text" class="form-control" id="tire"
                                        placeholder="Numero de la facture" >
                                </div>
                                <div class="form-group">
                                        <label for="Nomdupatient">Nom du patient</label>
                                        <input type="text" class="form-control" id="Nomdupatient"
                                            placeholder="Nom du patient">
                                    </div>
                                    <div class="form-group">
                                            <label for="obrservation">Obrservation</label>
                                            <textarea class="form-control" id="obrservation" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                                <label for="Traitement">Traintement</label>
                                                <textarea class="form-control" id="Traitement" rows="5"></textarea>
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