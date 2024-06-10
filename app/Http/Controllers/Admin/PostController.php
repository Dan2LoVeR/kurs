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
        $ra =[];
        foreach ($users as $user) {
            $ra[] = $user->group_id;
        }       
        // dd( $na, $ra);

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

            $gra[]=$ch;
            $gre = array_sum($test);
            $ch++;
            // $gra[] = array_sum($result[$ch])/($chel*8); 
            
            
            
        }
        
        $gri = [];
        $grw = [];
       $ch = 0;
       
        foreach($test as $key ){
            $chel = 0;
            $gri= [];
            foreach($key as $k){
                $gri[] =array_sum($k);
                $chel++;
            }
            $ch++;
            $grw[] = array_sum($gri)/($chel*8);
            
        }

        
        

        return view("admin.posts.index",[
            "users" => $users,
            "grades" => $grades,
            "logotips" => $logotips,
            "path" => $path,
            "names" => json_encode($names),
            "grade" => json_encode($grw),
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
