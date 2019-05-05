@extends('layouts.BackHome')

@section('Css')
<style>
    
@media print {
  


footer{
        display: none;
    }
    .wrapper , .navbar{
        display: none;
    }

}
p
{
    font-size: 16px;
} 
.row
{
    margin-left:2rem;
}
.weight
{
    font-weight: bold;
}   
.margin
{
    margin-top:2rem;
}  
</style>
@endsection

@section('content')
<div class="row">
    <div class="container">
        @include('inc.messages')
    </div>
</div>
<div class="row">
        <div class="container">
                <form>
                        @csrf
                        <center><button type="submit" class="btn btn-success text-center btnprn">Imprimer</button><center>

             </form>
        </div>
    </div>
    @foreach($lastfacture as $lastfacture)
<div class="row margin" >
    <div class="col-8">
        <h1>Le nom de clinique :<h1>
        <P>Adresse :<P>
        <P>CP Ville :<P>
        <P>Telephone / Fax :<P>
        <P>Référence Internet : <P>
        
    </div>
    <div class="col-4">
        <h1 >Facture </h1>
    </div>

</div>
<div class="row">
        <div class="col-12">
            <p>Numero facture : {{$lastfacture->NumFacture}}<p>
            <P>Date :{{$lastfacture->Date}}<P>
            <P>N° Patient : {{$Patient->id_patient}}<P>
            <P>Nom Patient : {{$Patient->NomPatient}}<P>
            <P>Prenom patient : {{$Patient->PrenomPatient}}<P>
            
        </div>
        
    
</div>
<div class="row">
        <div class="col-12">
           <h2 class="text-center">RÉSUMÉ DES FRAIS A VOTRE CHARGE</h2>
            
        </div>
        
    
</div>
<div class="row">
        <div class="col-12">
            <div class="container">
                <table  class="table table-bordred table-striped margin">

                        <thead>


                            <th>Pharamacie</th>
                            <th>Hospitalisation</th>
                            <th>Consulation</th>
                            <th>Mode de payement</th>
                            
                            
                            
                            
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>{{$lastfacture->Pharmacie}}</td>
                                <td>{{$lastfacture->Hospitalisation}}</td>
                                <td>{{$lastfacture->Consultation}}</td>
                                <td>{{$lastfacture->Modepayement}}</td>

                            </tr>
                            <tr>
                                    <td class="weight" colspan="3">Montant</td>
                                    <td align="center">{{$lastfacture->Montant}}</td>  
    
                            </tr>
                        </tbody>
                </table>  
            </div>  
        </div>
        @endforeach
    
</div>
@endsection

@section('javascript')
<script type="text/javascript">
    $(document).ready(function(){
    $('.btnprn').printPage();
    });
    </script>
@endsection