<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller{
    public function index() {

    /* $photo = new Photo();
        $photo->title = "Nouvelle photo";
        $photo->url = "/images/Portfolio/1.jpg";
        $photo->votes = 22;
        $photo->save();  //INSERT into photos VALUES (Null,..,..,..)
        die(1);

        $photo = Photo::find(1); //SELECT * FROM photos where id=1
        $photo->votes++;
        $photo->save(); //UPDATE photos set votes = votes+1 WHERE id=1
        $photo->delete(); //DELETE FROM photos WHERE id=1
        die(1); */
        $user = User::inRandomOrder()->limit(4)->get();
        $songs = Song::all();
        $allsongs = Song::inRandomOrder()->limit(5)->get();
        $allexcept = User::whereRaw("id <> ?", [Auth::id()])->get();
        return view("firstcontroller.index", ["user" => $user, "songs" => $songs, "allsongs" => $allsongs, "allexcept" => $allexcept]);
        
    }

    public function about() {
        return view("firstcontroller.about");
    }

    public function article($id) {
        return view("firstcontroller.article" , ["id" => $id]);
    }

    public function create() {
        return view("firstcontroller.create");

    }

    public function utilisateur($id) {
      

        $user = User::findOrFail($id); 

        return view("firstcontroller.utilisateur", ["user" => $user]);
    }

    
    public function search($search) {
        // SELECT * FROM users WHERE name LIKE '$search%'
       $user = User::WhereRaw("name LIKE CONCAT(?, '%')", [$search])->orderBy('id', 'desc')->get();

       $songs = Song::WhereRaw("title LIKE CONCAT('%', ?, '%')", [$search])->orderBy('votes', 'desc')->get();

        return view("firstcontroller.search", ["search" => $search, "users" => $user, "songs" => $songs]);
    }

    
    public function suivre($id) {
        Auth::user()->IlikeThem()->toggle($id);
        return back();
    }

    public function store(Request $request) {
        
        $request->validate([
            'title' => 'required|min:4|max:255',  //if(isset($_post['title]))
            'song' => 'required|file|mimes:mp3,ogg'
        ]);

      
        $song = new Song();

        $name = $request->file('song')->hashName();
        $request->file('song')->move("uploads/".Auth::id(), $name);

        $song->title = $request->input('title');
        $song->url = "/uploads/".Auth::id()."/".$name;
        $song->votes = 0;
        $song->user_id = Auth::id();
        $song->save(); // INSERT INTO songs.....

        return redirect("/");

    }


    public function updateoverview(Request $request) {
        $overview = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $request->input('overview'));
        Auth::user()->overview = $overview;
        Auth::user()->save();
        return back();
    }

}

