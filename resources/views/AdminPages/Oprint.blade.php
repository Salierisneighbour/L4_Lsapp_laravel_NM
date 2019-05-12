@extends('layouts.BackHome')

@section('Css')
<style>
    
    @media print {
  


  footer{
          display: none;
      }
      .navbar{
          display: none;
      }
      .dontshow
      {
          visibility:hidden;
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
                <center> <a href="{{url('/OOprint/{id}')}}" class="btnprn btn btn-success btn-lg dontshow">imprimer</a></center>

        </div>
    </div>
    @foreach($lastordo as $lastordo)
<div class="row margin" >
    <div class="col-8">
        <h1>Le nom de clinique :<h1>
        <P>Adresse :<P>
        <P>CP Ville :<P>
        <P>Telephone / Fax :<P>
        <P>Référence Internet : <P>
        
    </div>
    <div class="col-4">
        <h1 >Ordonance </h1>
    </div>

</div>
<div class="row">
        <div class="col-12">
            <p>Numero facture : {{$lastordo->NumOrdo}}<p>
            <P>Date :{{$lastordo->Date}}<P>
            <P>N° Patient : {{$Patient->id_patient}}<P>
            <P>Nom Patient : {{$Patient->NomPatient}}<P>
            <P>Prenom patient : {{$Patient->PrenomPatient}}<P>
            
        </div>
        
    
</div>
<div class="row">
        <div class="col-12">
           <h2 class="text-center">RÉSUMÉ </h2>
            
        </div>
        
    
</div>
<div class="row">
        <div class="col-12">
            <div class="container">
                <table  class="table table-bordred table-striped margin">

                        <thead>


                            <th>Tire</th>
                            <th>Observation</th>
                            <th>Traitement</th>
                            
                            
                            
                            
                            
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>{{$lastordo->Titre}}</td>
                                <td>{!!$lastordo->Observation!!}</td>
                                <td>{!!$lastordo->Traintement!!}</td>
                                

                            </tr>
                           
                        </tbody>
                </table>  
            </div>  
        </div>
      
    
</div>
@endforeach
@endsection

@section('javascript')
<script type="text/javascript">
    $(document).ready(function(){
    $('.btnprn').printPage();
    });
    </script>
@endsection