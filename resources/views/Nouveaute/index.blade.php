@extends('layouts.BackHome')

@section('content')

<section id="newsfeed" class="newsfeed">
        <div class="container">
                
            <div class="row welcome text-center" style="margin:3rem;">
                <div class="col-12">
                    <h1 class="display-4 text-wrap font-weight-bold"><span class="text-success">Nouveauté</span></h1>


                </div>
            </div>
            <div class="jumbotron">
               @if(count($posts)>0)
               <div class="container-fluid">
                   <div class="row">
                       @foreach($posts as $post)
                       <div class="col-md-6" style="margin-bottom:2rem;">
                           <div class="card">
                               <img class="card-img-top img-fluid" src="images/Directeur.jpg" >
                               <div class="card-body">
                               <h4 class="card-title">{{$post->title}}</h4>
                               <p class="card-text">{{$post->Fbody}}</p>
                               <p class="card-text"><small class="text-muted">Ecris le {{$post->created_at}}</small></p>
                               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $loop->iteration }}" href="/posts/{{$post->id}}">
                                        Show 
                                    </button>
                               </div>
                              
                           </div>
                       </div>




    <div class="modal fade" id="exampleModalCenter{{ $loop->iteration }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">{{$post->title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 {{$post->Mbody}}

            </div>
            <div class="modal-footer">
                <a  class="btn btn-info"  href="posts/{{$post->id}}/edit">Edit</a>
                <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


















                     @endforeach 
                     
                   </div>
               </div>
              
               @else
               <h3 class="text-info">Pas de nouveauté<h3>
               @endif
                      
                            
           
            
        </div>
        
    </section>

@endsection