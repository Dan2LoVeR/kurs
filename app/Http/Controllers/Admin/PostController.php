<?php

namespace App\Http\Controllers\Admin;

use App\DTO\PostForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Grades;
use App\Models\Groups;
use App\Models\Image;
use App\Models\Logotips;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grades::orderBy("created_at",'DESC')->get();
        $users = User::orderBy("created_at", "DESC")->get();
        $path = Image::orderBy("created_at", "DESC")->get();
        $logotips = Logotips::orderBy("created_at", "DESC")->get();
        $groups = Groups::all();
        $collection = collect($groups);
        $names = $collection->pluck('name')->toArray();
        
        $result = [];
        $ch =0;
        
        $test =[];
        
       $na = [];
        foreach($groups as $group){
            $na[] = $group->id; 
        }
       
        
        
        foreach ( $groups as $group) {
            $result = [];
            $chel = 0;
            foreach ($users as $user) {
           
                if ($user->group_id == $group->id) {
                    $result[] = Grades::where('user_id', $user->id)->pluck('result')->toArray();
                    $test[$ch] = $result;
                    $chel++;
                }
                
                
            }

            
            $gra[] = array_sum($result[$ch])/($chel*8); 
            
            $ch=$group->id;
            
        }
        

        

        return view("admin.posts.index",[
            "users" => $users,
            "grades" => $grades,
            "logotips" => $logotips,
            "path" => $path,
            "names" => json_encode($names),
            "grade" => json_encode($gra),
            "groups" => $groups
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.posts.create", []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PostFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $name = $request->input("name");
        
        DB::insert('insert into `groups` (`id`, `created_at`, `updated_at`, `name`) values (null, null, null, ?)', [$name]);
        return redirect(route("admin.posts.index"));
    }

}
