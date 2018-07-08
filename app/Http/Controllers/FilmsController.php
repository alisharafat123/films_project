<?php namespace App\Http\Controllers;

use App\Films;
use App\Genre;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmsController extends Controller {

    public function __construct()
       {
           $this->middleware('auth');
       }
    public function index() {
        $data['page_title'] = 'Films';
        $films = Films::all();
        $data['films'] = $films;
        return view('films')->with($data);
    }
    public function create(Request $request){

        if($request->has('post')){
            $photo = '';
            if ($request->file('file') && $request->file('file')->isValid()) {
                $folder = 'img';

                $extension = $request->file->extension();
                $name = $request->input('name').'_'.time().'.'.$extension;
                $path = $request->file->storeAs($folder, $name);
                $photo = $name;
            }
            $film = new Films();
            $film->name = $request->input('name');
            $film->description = $request->input('description');
            $film->release_date = date('Y-m-d',strtotime($request->input('release_date')));
            $film->rating = $request->rating;
            $film->ticket_price = $request->input('ticket_price');
            $film->photo = $photo;
            $film->slug = $request->input('slug').str_random(9);
            $film->country_id = $request->input('country_id');

            if($film->save()){
                $genres = $request->input('genre');
                foreach($genres as $genre){
                    $film_genre = DB::table('films_genre')->insert(
                            ['genre_id' => $genre, 'film_id' => $film->id]
                        );
            }
                return redirect('films_list');
            }
        }
        $data['page_title'] = 'Create New Film';
        return view('create_film', $data);
    }
    public function create_genre(Request $request){

        if($request->has('post')){
            $genre= new Genre();
            $genre->genre_title = $request->input('genre_title');
            if($genre->save()){
                return redirect('genre');
            }
        }
        $data['page_title'] = 'Create New Genre';
        return view('create_genre', $data);
    }
    public function genre(Request $request){
        $class = Genre::all();
        $data['genres'] = $class;
        $data['page_title'] = 'Genre';
        return view('genre', $data);

    }


}