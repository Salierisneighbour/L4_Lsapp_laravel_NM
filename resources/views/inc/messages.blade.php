@if(count($errors) > 0)
    @foreach($errors->all() as $error)
         <div class="alert alert-danger">
             {{$error}}
         </div>
    @endforeach     
@endif


@if(session('success'))
    <div class="alert alert-success" id="successMessage">
        {{session('success')}}

    </div>
  <script>
         window.setTimeout(function() {
                    $(".alert:not(.alert-danger)").fadeTo(700, 0).slideUp(700, function(){
                    $(this).remove(); 
         });
        }, 8000)
  </script>
@endif


@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif 
