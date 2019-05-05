@extends('layouts.BackHome')

@section('Css')

@endsection

@section('content')
<div class="container margin">
<div class="row" style="margin-bottom:2rem;">
        <div class="col-12">
            <h2>Modifier les nouvautés</h2>
        </div>
    </div>
    <div class=container>
        <div class="row">
            <div class="col-12">
                <form method="post" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data" class="needs-validation" novalidate>
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="Title">Titre de la nouvauté</label>
                        <input type="Text" class="form-control" id="Title" name="title"
                            placeholder="Titre de la nouvauté" , value="{{$post->title}}" required>
                    </div>

                    <div class="form-group">
                        <label for="ToShow">Texte à afficher </label>
                        <textarea name="ToShow"  class="form-control" id="ToShow" rows="3" placeholder="Texte à afficher">{{$post->Fbody}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="ReadMore">Read More</label>
                        <textarea  name="ReadMore" class="form-control" id="ReadMore" rows="9"   placeholder="Lire plus">{{$post->Mbody}}</textarea>
                    </div>
               

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Ajouter l'image</label>
                    <input name="cover_image" type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
        </div>
        <div class="row">
            <input type="hidden" name="_method" value="PUT">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-lg" >Modifier</button> 
            </div>

  
        </div>
    </form>
    </div>

</div>
</div>


    
   





@endsection

@section('javascript')

@endsection