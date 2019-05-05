 <!--RDVMODEL--> 
 <div class="modal fade" id="RDVMODEL" tabindex="-1" role="dialog" aria-labelledby="RDVMODEL" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="RDVMODEL">Demander un rendez-vous</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="my-form" method="post"  action="{{route('RdvDemande.store')}}">
                {{csrf_field()}}
                    <div class="form-group needs-validation"  novalidate> 
                        <label for="form-name">Nom</label>
                        <input type="Text" class="form-control" id="form-name" placeholder="Nom" name="NomPatient" required>
                    </div>
                    <div class="form-group">
                        <label for="form-email">Prenom</label>
                        <input type="Text" class="form-control" id="form-email" placeholder="Prenom" name="PrenomPatient" required>
                    </div>
                    <div class="form-group">
                            <label for="form-email">Adresse</label>
                            <input type="Text" class="form-control" id="form-email" placeholder="Adresse" name="AdrsPatient" required>
                        </div>
                        
                    <div class="form-group">
                        <label for="form-subject">Telephone</label>
                        <input type="text" class="form-control" id="form-subject" placeholder="Telephone" name="TelPatient" required>
                    </div>
                    <div class="form-group">
                            <label for="form-subject">Email</label>
                            <input type="email" class="form-control" id="form-subject" placeholder="email" name="EmailPatient" required>
                        </div>
                    <div class="form-group">
                            <p><label for="form-subject">Sexe</label></p>
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Masculin" required>
                                    <label class="form-check-label" for="inlineRadio1">Masculin</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Feminin" required>
                                    <label class="form-check-label" for="inlineRadio2">Feminin</label>
                                  </div>
                    </div>
                    <div class="form-group">
                            <label for="form-subject">Date de naissance</label>
                            <input type="date" class="form-control" id="form-subject" placeholder="Date de naissance" name="DNPatient" required>
                        </div>
                        <div class="form-group">
                                <label for="form-subject">Profession</label>
                                <input type="text" class="form-control" id="form-subject" placeholder="Profession" name="ProfessionPatient" required>
                            </div>
                            <div class="form-group">
                                    <label for="form-subject">Etat Civil</label>
                                    <input type="text" class="form-control" id="form-subject" placeholder="Etat Civil" name="EtatCivil" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="Assurence">Assurence</label>
                                    <select name="AssurencePatient" id="Assurence" class="form-control" required>
                                    <option selected value="">Selectionez...</option>
                                    <option value="CNSS">CNSS</option>
                                    <option value="CNOPS">CNOPS</option>
                                    <option value="Autre">Autre</option>
                                    </select>
                                </div>
                    <div class="form-group">
                        <label for="form-message">Motif</label>
                        <textarea class="form-control" id="form-message" placeholder="Motif" name="Motif" required></textarea>
                    </div>
                    
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="Submit" class="btn btn-primary">Demander RDV</button>
            </div>
          </div>
        </form>
        </div>
      </div>