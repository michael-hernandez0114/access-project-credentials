<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Project;
use App\Logging;

use Illuminate\Support\Facades\DB;

class ProjectsDataController extends Controller
{
    public function getAll() {
        
        $all_projects = DB::select('SELECT * FROM projects');
        

        // dd($all_projects);

        return response()->json($all_projects);
    }

    public function storePasswordRetrieval($id, $currentUser) {

        //dd($id, $currentUser);

        $project = DB::table('projects')->where('id', $id)->first();

        //dd($project);

        $loggingData['project'] = $project->project;
        $loggingData['service'] = $project->service;
        $loggingData['username'] = $project->username;
        $loggingData['user_id'] = $currentUser;


        $logging = new Logging;         
        $logging->fill($loggingData);
        
        //dd($logging);

        $saved = $logging->save();
        if (!$saved) {
            abort('404');
        }


        return redirect()->route('home')->with('success', 'Log Added.');
    }
}
