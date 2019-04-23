<div class="modal fade" id="Conceil" tabindex="-1" role="dialog" aria-labelledby="Conceil" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="Conceil">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="my-form" method="post"  action="{{route('DemandeConseil.store')}}">
                  {{csrf_field()}}
                    <div class="form-group">
                        <label for="form-name">Full Name</label>
                        <input type="text" class="form-control" id="form-name" placeholder="Full Name" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="form-email">Email Address</label>
                        <input type="email" class="form-control" id="form-email" placeholder="Email Address" name="email">
                    </div>
                    <div class="form-group">
                        <label for="form-subject">Telephone</label>
                        <input type="text" class="form-control" id="form-subject" placeholder="Subject" name="telephone">
                    </div>
                    <div class="form-group">
                        <label for="form-message">Email your Message</label>
                        <textarea class="form-control" id="form-message" placeholder="Message" name="message"></textarea>
                    </div>
                    
               
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Send message</button>
            </div>
          </div>
        </form>
        </div>
      </div>