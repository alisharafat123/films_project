<?php namespace App\Http\Controllers;

use App\Films;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class FilmsController extends Controller {

    public function __construct()
       {
           $this->middleware('auth');
       }
    public function index() {
        $data['page_title'] = 'Films';
        $students = Films::all();
        $data['films'] = $students;
        return view('films')->with($data);
    }
    public function create(Request $request){

        if($request->has('post')){
            $film = new Films();
            $film->name = $request->input('name');
            $film->description = $request->input('description');
            $film->release_date = date('Y-m-d',strtotime($request->input('release_date')));
            $film->rating = $request->rating;
            $film->ticket_price = $request->input('ticket_price');
            $film->genre_id = $request->input('genre_id');
            $film->photo = $request->input('photo');
            $film->slug = $request->input('slug');
            $film->country_id = $request->input('country_id');

            if($film->save()){
                return redirect('films_list');
            }
        }
        $data['page_title'] = 'Create New Film';
        return view('create_film', $data);
    }
    public function check_registrationExist(){
        $check_rno = Students::where('registration_no', $_GET['id'])->first();
        if($check_rno != null){
            $success = 1;
        }
        else{
            $success = 0;
        }
        return ['success' => $success];
    }

}