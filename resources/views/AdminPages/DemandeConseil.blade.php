@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
        <h2>Demande de Conseil</h2>
        <hr>
        <p>Voici la liste des demande triée par le plus recenet</p>
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
                            <th><input type="text" class="form-control" placeholder="FullName" disabled></th>
                            <th><input type="text" class="form-control" placeholder="email" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Telephone" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Message" disabled></th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($LesDemandes as $Demande)
                        <tr>
                            <td>{{$Demande->id}}</td>
                            <td>{{$Demande->FullName}}</td>
                            <td>{{$Demande->email}}</td>
                            <td>{{$Demande->Telephone}}</td>
                            <td>{{$Demande->Message}}</td>

                            <td><button type="button" class="btn btn-primary">Repondre</button></td>
                        </tr>
                    @endforeach 
                    </tbody>
                </table>
            </div>
            @else
            <div class="container margin">
                <div class="jumbotron">
                <h2 class="text-info">Pas de Demande</h2>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection

@section('javascript')



@endsection