@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
        <div class="row">


            <div class="col-md-12">
                <h4>Agenda des medecins</h4>

                
                <div class="col-12" style="margin-top:2rem;margin-bottom:2rem;">
                        <form action="#" method="get">
                            <div class="input-group">
                                
                                <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default btn-outline-dark"><i class="fas fa-search-plus"></i></button>
                                </span>
                            </div>
                        </form>
              </div>


                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped table-list-search">

                        <thead>

                         
                            <th>ID Medecin</th>
                            <th>Nom Medecin</th>
                            <th>Prenom Medecin</th>
                            <th>Date et Heure</th>
                            <th>ID Patient</th>
                            
                            
                            <th>Nom patient</th>
                            <th>Prenom patient</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>

                            <tr>
                                    <td>1</td>
                                    <td>Mouad</td>
                                    <td>Nassif</td>
                                   
                                    <td>10/10/2018 12:30</td>
                                    <td>1</td>
                                    <td>Nom patient</td>
                                    <td>Prenom patient</td>
                                    
                                    
                                    
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                            data-target="#edit"><i class="fas fa-edit"></i></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                            class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                            data-target="#delete"><i class="fas fa-trash-alt"></i></span></button></p>
                                </td>
                            </tr>

                            <tr>
                                    
                                    <td>1</td>
                                    <td>Mouad</td>
                                    <td>Nassif</td>
                                    
                                    <td>10/10/2018 12:30</td>
                                    <td>2</td>
                                    <td>Nom patient</td>
                                    <td>Prenom patient</td>
                                    <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                            data-target="#edit"><i class="fas fa-edit"></i></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                            class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                            data-target="#delete"><i class="fas fa-trash-alt"></i></span></button></p>
                                </td>
                            </tr>


                            <tr>
                                    <td>1</td>
                                    <td>Mouad</td>
                                    <td>Nassif</td>
                                   
                                    <td>10/10/2018 13:30</td>
                                    <td>3</td>
                                    <td>Nom patient</td>
                                    <td>Prenom patient</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                            data-target="#edit"><i class="fas fa-edit"></i></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                            class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                            data-target="#delete"><i class="fas fa-trash-alt"></i></button></p>
                                </td>
                            </tr>



                            <tr>
                                    <td>1</td>
                                    <td>Mouad</td>
                                    <td>Nassif</td>
                                    
                                    <td>10/10/2018 14:30</td>
                                    <td>4</td>
                                    <td>Nom patient</td>
                                    <td>Prenom patient</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                            data-target="#edit"><i class="fas fa-edit"></i></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                            class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                            data-target="#delete"><i class="fas fa-trash-alt"></i></span></button></p>
                                </td>
                            </tr>


                            <tr>
                                    <td>1</td>
                                    <td>Mouad</td>
                                    <td>Nassif</td>
                                    
                                    <td>10/10/2018 15:30</td>
                                    <td>5</td>
                                    <td>Nom patient</td>
                                    <td>Prenom patient</td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                            class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                            data-target="#edit"><i class="fas fa-edit"></i></span></button></p>
                                </td>
                                <td>
                                    <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                            class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                            data-target="#delete"><i class="fas fa-trash-alt"></i></span></button></p>
                                </td>
                            </tr>





                        </tbody>

                    </table>


                </div>
            </div>
        </div>

<!--update model-->
        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="RDVMODEL" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="edit">Update</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form class="my-form">
                            <div class="form-group">
                                <label for="form-name">Nom Medecin</label>
                                <input type="email" class="form-control" id="form-name" placeholder="Nom Medecin" readonly >
                            </div>
                            <div class="form-group">
                                <label for="form-name">Prenom Medecin</label>
                                <input type="name" class="form-control" id="form-name" placeholder="Prenom Medecin" readonly>
                            </div>
                            <div class="form-group">
                                    <label for="form-name">Date et heure</label>
                                    <input type="name" class="form-control" id="form-name" placeholder="Date et heure">
                                </div>
                                
                            <div class="form-group">
                                <label for="id-patient">id patient</label>
                                <input type="text" class="form-control" id="id-patient" placeholder="id patient">
                            </div>
                            
                                        
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-lg" style="width:100%"><i class="fas fa-check-circle"></i>Update</button>
                    </div>
                  </div>
                </div>
              </div>


        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                                class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i> Are you sure you
                            want to delete this Record?</div>

                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-success"><i class="fas fa-check-circle"></i> Yes</button>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>No
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

</div>





<div class="container" style="margin-top:3rem;">
<div class=jumbotron>
        <h3>Ajouter </h3>
        <p data-placement="top" data-toggle="tooltip" title="Add"><button
            class="btn btn-primary btn-xs" data-title="Add" data-toggle="modal"
            data-target="#Add"><i class="fas fa-calendar-plus"></i>Ajouter</button></p>
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
                <form class="my-form">
                        <div class="form-group">
                            <label for="form-name">Nom Medecin</label>
                            <input type="email" class="form-control" id="form-name" placeholder="Nom Medecin" readonly >
                        </div>
                        <div class="form-group">
                            <label for="form-name">Prenom Medecin</label>
                            <input type="name" class="form-control" id="form-name" placeholder="Prenom Medecin" readonly>
                        </div>
                        <div class="form-group">
                                <label for="form-name">Date et heure</label>
                                <input type="name" class="form-control" id="form-name" placeholder="Date et heure">
                            </div>
                            
                        <div class="form-group">
                            <label for="id-patient">id patient</label>
                            <input type="text" class="form-control" id="id-patient" placeholder="id patient">
                        </div>
                        
                                    
                        
                    </form>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-info btn-lg" style="width:100%"><i class="fas fa-check-circle"></i>Ajouter</button>
        </div>
      </div>
    </div>
  </div>















@endsection

@section('javascript')

@endsection