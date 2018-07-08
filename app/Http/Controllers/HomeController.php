<?php

namespace App\Http\Controllers;

use App\Films;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_tile = 'Home';
        $data['page_title'] = $page_tile;
        return view('home',$data);
    }
    public function posts()

    {
        $page_tile = 'Home';
        $data['posts'] = Films::all();
        $data['page_title'] = $page_tile;
        return view('posts')->with($data);

    }



    public function show($slug)

    {
        $page_tile = 'Home';
        $data['film'] = Films::where(['slug'=>$slug])->first();
        //var_dump($data); exit;

        $data['page_title'] = $page_tile;
        return view('postsShow')->with($data);

    }



    public function postFilms(Request $request)

    {
        $this->validate($request, [
            'rate' => 'required',
        ]);
        $post = Films::find($request->id);



        $rating = new \willvincent\Rateable\Rating;

        $rating->rating = $request->rate;

        $rating->user_id = auth()->user()->id;



        $post->ratings()->save($rating);



        return redirect()->route("posts");

    }
}
