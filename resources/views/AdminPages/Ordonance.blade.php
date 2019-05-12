@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
        <div class="row" style="margin-bottom:2rem;">
            <div class="col-6">
                    <form class="needs-validation" action="{{route('PrintOrdonance',$Patient->id_patient)}}" method="post" novalidate> 
                            @csrf    
                        <div class="form-group">

                                <label for="Date">Date</label>
                                <input name="Date" type="date" class="form-control" id="Date"
                                    placeholder="Date" required>
                            </div>
                            <div class="form-group">
                                <label for="Num">Numero de l'ordonance</label>
                                <input name="Num" type="text" class="form-control" id="Num"
                                    placeholder="Numero de l'ordonance" required>
                            </div>
                            <div class="form-group">
                                    <label for="tire">Titre de l'ordonance</label>
                                    <input name="Titre" type="text" class="form-control" id="tire"
                                        placeholder="Titre de l'ordonance" required>
                                </div>
                                <div class="form-group">
                                        <label for="Nomdupatient">Nom du patient</label>
                                        <input type="text" class="form-control" id="Nomdupatient"
                                        value="{{$Patient->NomPatient." ".$Patient->PrenomPatient}}" readonly>
                                    </div>
                                    <div class="form-group">
                                            <label for="obrservation">Obrservation</label>
                                            <textarea name="obrservation" class="form-control" id="obrservation" rows="5" required></textarea>
                                        </div>
                                        <div class="form-group">
                                                <label for="Traitement">Traintement</label>
                                                <textarea name="Traitement" class="form-control" id="Traitement" rows="5" required></textarea>
                                            </div>
                        


            </div>
            <div class="col-4" style="margin-top:2rem; margin-left:2rem;">
                <div class="row">
                    <button type="submit" class="btn btn-primary btn-lrg">Imprimer</button>
                </form>
                </div>
            
            </div>
        </div>
    
    </div>
@endsection

@section('javascript')

@endsection