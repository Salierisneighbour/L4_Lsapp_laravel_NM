@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
<div class="row" style="margin-bottom:2rem;">
        <div class="col-12">
            <h2>Ajouter des nouvautés</h2>
        </div>
    </div>
    <div class=container>
        <div class="row">
            <div class="col-12">
                <form method="post"  action="{{route('posts.store')}}" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="Title">Titre de la nouvauté</label>
                        <input type="Text" class="form-control" id="Title" name="title"
                            placeholder="Titre de la nouvauté">
                    </div>

                    <div class="form-group">
                        <label for="ToShow">Texte à afficher </label>
                        <textarea name="ToShow" class="form-control" id="ToShow" rows="3" placeholder="Ce que va être afficher"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="ReadMore">Read More</label>
                        <textarea  name="ReadMore" class="form-control" id="ReadMore" rows="9" placeholder="Ce que va être afficher apres click sur read more"></textarea>
                    </div>
               

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ajouter l'image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-lg" >Ajouter</button> 
            </div>

  
        </div>
    </form>
    </div>

</div>
</div>


    
   





@endsection

@section('javascript')

@endsection