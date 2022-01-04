<?php

namespace App\Http\Controllers;
Use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\past_purchase;

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

    function showw()
    {

        $dataa=past_purchase::where('user_id', auth()->user()->id)->get();
        return view('history',['past_purchases'=>$dataa]);
    }

    function history()
    {
    	return view('history'); 

    }

    function complete()
    {
        return view('complete');


    }

    function purchasehistory(Request $request)
    {
         $USER = auth::user()->id;
       $query = DB::table('past_purchases')->insert([

        'food'=>$request->input('food'),
         'caption'=>$request->input('caption'),
          'location'=>$request->input('location'),
           'price'=>$request->input('price'),
            'quantity'=>$request->input('quantity'),
             'method'=>$request->input('method'),
             'user_id'=>$USER
       ]);

       return redirect('/complete');
    }

 public function pastpurchasereceipt()
    {
         $dataa=past_purchase::where('user_id', auth()->user()->id)->get();
        return view('dynamic_pdf',['past_purchases'=>$dataa]);

    }

 

    public function purchase($id)
    {
    	 $data = Post::find($id);
    	 return view('purchase',compact('data','id'));
    }

    public function search()
    {
    	$search_text = $_GET['query'];
    	$posts = Post::where('location','LIKE', '%'.$search_text. '%')->get();
    	

    	return view('/search',compact('posts'));


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
