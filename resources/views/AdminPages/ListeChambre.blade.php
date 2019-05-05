@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
        <div class="row">


            <div class="col-md-12">
                <h4>Liste des Chambres</h4>

                @if(count($chambres)>0)
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



                            <th>Numero de la chambre</th>
                            <th>Etage</th>
                            <th>Nombre de lit</th>
                            <th>Etat d'occupation</th>




                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($chambres as $chambre)
                            <tr>
                                <td>{{$chambre->NumChambre}}</td>
                                <td>{{$chambre->Etage}}</td>
                                <td>{{$chambre->Nblit}}</td>
                                <td>{{$chambre->EtatOccup}}</td>


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

                           





  <!--update model-->
  <div class="modal fade" id="edit{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="RDVMODEL"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="edit">Update</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
                  <form class="my-form needs-validation" method="POST"   action="{{ route('Chambres.update', $chambre->id_chambre) }}" novalidate >
                          {{csrf_field()}}
                          <div class="form-group">
                                  <label for="form-Num">Numero de la chambre</label>
                                  <input type="text" class="form-control" id="form-Num" placeholder="Numero de la chambre" name="Numero" value="{{$chambre->NumChambre}}" required>
                              </div>
                      <div class="form-group">
                          <label for="form-Etage">Etage</label>
                          <input type="text" class="form-control" id="form-Etage" placeholder="Etage" name="Etage" value="{{$chambre->Etage}}" required>
                      </div>
                      <div class="form-group">
                          <label for="form-Lit">Nombre de lit</label>
                          <input type="text" class="form-control" id="form-Lit" placeholder="Nombre de lit" name="Lit" value="{{$chambre->Nblit}}" required>
                      </div>
                      <div class="form-group">
                        <label for="inputState3">Etat d'occupation</label>
                        <select name="Etat" id="inputState3" class="form-control" required>
                        @if($chambre->EtatOccup=="Occupée")
                        <option selected value="Occupée">{{$chambre->EtatOccup}}</option>
                        <option value="Libre">Libre</option>
                        @else
                        <option selected value="Libre">{{$chambre->EtatOccup}}</option>
                        <option value="Occupée">Occupée</option>
                        @endif
                        </select>
                    </div>



              
          </div>
          <div class="modal-footer">
                  <input type="hidden" name="_method" value="PUT">
                  
              <button type="submit" class="btn btn-success btn-lg" style="width:100%"><i
                      class="fas fa-check-circle"></i>Update</button>
          </div>
      </form>
      </div>
  </div>
</div>
<?php  $recordid=$chambre->id_chambre ?>
@include('Modules.deletemodule')








                            @endforeach
                            


                        </tbody>

                    </table>
                 

                </div>
            </div>
        </div>
  
       

      

    </div>
    
    @else
    <div class="container margin">
        <div class="jumbotron">
        <h2 class="text-info">Pas de Demande</h2>
        </div>
    </div>
    @endif



    <div class="container" style="margin-top:3rem;">
        <div class=jumbotron>
            <h3>Ajouter une Chambre</h3>
            <p data-placement="top" data-toggle="tooltip" title="Add"><button class="btn btn-primary btn-xs"
                    data-title="Add" data-toggle="modal" data-target="#Add"><i
                        class="fas fa-user-plus"></i></span> Ajouter</button></p>
        </div>

    </div>





    <!--Add model-->
    <div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="Add" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Add">Ajouter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="my-form needs-validation" method="POST" action="{{route('Chambres.store')}}" novalidate>
                            {{csrf_field()}}
                            <div class="form-group">
                                    <label for="form-Num">Numero de la chambre</label>
                                    <input type="text" class="form-control" id="form-Num" placeholder="Numero de la chambre" name="Numero" required>
                                </div>
                        <div class="form-group">
                            <label for="form-Etage">Etage</label>
                            <input type="text" class="form-control" id="form-Etage" placeholder="Etage" name="Etage" required>
                        </div>
                        <div class="form-group">
                            <label for="form-Lit">Nombre de lit</label>
                            <input type="text" class="form-control" id="form-Lit" placeholder="Nombre de lit" name="Lit" required>
                        </div>
                       
                        <div class="form-group">
                            <label for="inputState3">Etat d'occupation</label>
                            <select name="Etat" id="inputState3" class="form-control" required>
                            <option selected value="">Selectionez...</option>
                            <option value="Occupée">Occupée</option>
                            <option value="Libre">Libre</option>
                           
                            </select>
                        </div>




                   
                </div>
                <div class="modal-footer">
                    <button type="sumbit" class="btn btn-info btn-lg" style="width:100%"><i
                            class="fas fa-check-circle"></i>Ajouter</button>
                </div>
            </form>
            </div>
        </div>
    </div>












@endsection

@section('javascript')

@endsection