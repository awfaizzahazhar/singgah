<?php

namespace App\Http\Controllers;
Use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class peoplecontroller extends Controller
{
    //
    function show()
    {
    	// $data = DB::table('users') 
    	// ->join('posts','users.id','posts.user_id')
    	// ->select('food')
    	// ->get();

    
    	$data = Post::where('user_id', '!=', Auth::user()->id)->get();
    	
    	return view('list',['posts'=>$data]);
    }


    public function purchase($id)
    {
    	 $data = Post::find($id);
    	 return view('purchase',compact('data','id'));
    }


    // function sum()

    // {	
    // 	 return $data['stock'];
    // 	 return "hmm";
    	
    // }

     public function payment($id)
    {
    	 $data = Post::find($id);
    	 return view('payment',compact('data','id'));
    }
}
