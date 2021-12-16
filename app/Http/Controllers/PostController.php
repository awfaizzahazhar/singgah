<?php

namespace App\Http\Controllers;

Use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use \File;
use Auth;

class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sell()
    {
        $posts= Post::where('user_id', auth()->user()->id)->get();
       return view('sell',compact("posts"));
        
    }

   public function dashboard()
    {
        $posts=Post::all();
       return view('dashboard',compact("posts"));
    }


    /**
     * Show the form for creatissng a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
           $USER = auth::user()->id;

        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $post =new Post([
           
                "food"=>$request->food,
                "caption"=>$request->caption,
                "location"=>$request->location,
                "price"=>$request->price,
                "stock"=>$request->stock,
                "cover"=>$imageName,
                "user_id"=>$USER,
            ]);
            // dd($post);
            $post->save();
        }

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){

                $imageName=time().'_'.$file->getClientOriginalName();
                $request['post_id']=$post->id;
                $request['image']=$imageName;
                $file->move(\public_path("/images"),$imageName);
                Image::create($request->all());


            }
        }

        return redirect('/sell');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $posts=Post::findOrFail($id);
        return view('edit')->with('posts',$posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $post=Post::findOrFail($id);
     if($request->hasFile("cover")){
         if (File::exists("cover/".$post->cover)) {
             File::delete("cover/".$post->cover);
         }
         $file=$request->file("cover");
         $post->cover=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/cover"),$post->cover);
         $request['cover']=$post->cover;
     }

        $post->update([
            "food" =>$request->food,
            "caption"=>$request->caption,
            "location"=>$request->location,
            "price"=>$request->price,
            "stock"=>$request->stock,
            "cover"=>$post->cover,
        ]);

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request["post_id"]=$id;
                $request["image"]=$imageName;
                $file->move(\public_path("images"),$imageName);
                Image::create($request->all());

            }
        }
            return redirect('/sell');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
         $posts=Post::findOrFail($id);

         if (File::exists("cover/".$posts->cover)) {
             File::delete("cover/".$posts->cover);
         }
         $images=Image::where("post_id",$posts->id)->get();
         foreach($images as $image){
         if (File::exists("images/".$image->image)) {
            File::delete("images/".$image->image);
        }
         }
         $posts->delete();
         return back();
    }

    public function deleteimage($id){
         $images=Image::findOrFail($id);
        if (File::exists("images/".$images->image)) {
           File::delete("images/".$images->image);
    }

    return back();
}

 public function deletecover($id){
    $cover=Post::findOrFail($id)->cover;
    if (File::exists("cover/".$cover)) {
       File::delete("cover/".$cover);
   }
   return back();
}
}