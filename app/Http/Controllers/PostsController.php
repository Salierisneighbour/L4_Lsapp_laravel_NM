<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('Nouveaute.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Nouveaute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:191|string|max:191',
            'ReadMore' => 'required|string|max:16777216',
            'ToShow' => 'required|string|max:16777216',
            'cover_image' => 'image|nullable|max:1999'

     ],
     [
          'title.required' => 'Le titre doit être remplis',
          'ToShow.required'  => "le texte à afficher doit être remplis",
          'ReadMore.required' => "le champ 'lire plus' doit être remplis",
          'cover_image.image' => "le format de l'image n'est pa valide",
          'title.max' => "le titre est trop long ",
          'title.string' => "le format du titre n'est pa valide",
          'ToShow.string' => "le format du champ lire plus n'est pa validee",
          'title.string' => "le format du titre n'est pa valide",
          'cover_image.max' => "la taille de max de l'image est dépassée",
          'title.max' => "la taille de max de titre est dépassée maximun 191",
          'ToShow.max' => "la taille du texte à afficher est dépassée",
          'ToShow.max' => "la taille maximun du champ lire plus  est dépassée"
           
     ]
          
     );

       //Handle file upload
       if($request->hasFile('cover_image')){
           //Get filename with the extension
           $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
           //Get just filename
           $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
           //Get just Ext
           $extension = $request->file('cover_image')->getClientOriginalExtension();
           //file name to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;
           //upload image
           $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
           
           
       }else
       {
           $fileNameToStore = "noimage.jpg";
       }

       //create post
       $post = new Post;
       $post->title = $request->input('title');
       $post->Fbody = $request->input('ToShow');
       $post->Mbody = $request->input('ReadMore');
       $post->cover_image = $fileNameToStore;
       $post->save();

       return redirect('/posts')->with('success','La nouveauté à été crée');
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('Nouveaute.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required|max:191|string|max:191',
            'ToShow' => 'required|string|max:16777216',
            'ToShow' => 'required|string|max:16777216',
            'cover_image' => 'image|nullable|max:1999'

     ],
     [
          'title.required' => 'Le titre doit être remplis',
          'ToShow.required'  => "le texte à afficher doit être remplis",
          'ReadMore.required' => "le champ 'lire plus' doit être remplis",
          'cover_image.image' => "le format de l'image n'est pa valide",
          'title.max' => "le titre est trop long ",
          'title.string' => "le format du titre n'est pa valide",
          'ToShow.string' => "le format du champ lire plus n'est pa validee",
          'title.string' => "le format du titre n'est pa valide",
          'cover_image.max' => "la taille de max de l'image est dépassée",
          'title.max' => "la taille de max de titre est dépassée maximun 191",
          'ToShow.max' => "la taille du texte à afficher est dépassée",
          'ToShow.max' => "la taille maximun du champ lire plus  est dépassée"
           
     ]
          
     );
     //Handle file upload
     if($request->hasFile('cover_image')){
         //Get filename with the extension
         $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
         //Get just filename
         $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
         //Get just Ext
         $extension = $request->file('cover_image')->getClientOriginalExtension();
         //file name to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         //upload image
         $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
         
         
     }

     //create post
     $post =  Post::find($id);
     $post->title = $request->input('title');
     $post->Fbody = $request->input('ToShow');
     $post->Mbody = $request->input('ReadMore');
     if($post->cover_image != 'noimage.jpg'){
        Storage::delete('public/cover_images/'.$post->cover_image);

     }
     if($request->hasFile('cover_image')){
        $post->cover_image = $fileNameToStore;
     }
    
     $post->save();

     return redirect('/posts')->with('success','La nouveauté à été modifié avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if($post->cover_image != 'noimage.jpg'){
            Storage::delete('public/cover_images/'.$post->cover_image);

        }



        $post->delete();

        return redirect('/posts')->with('success','La nouveaté à été supprimé avec succes');
    }

}
