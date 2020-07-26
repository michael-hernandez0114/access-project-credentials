<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Project;
use App\Logging;

use Illuminate\Support\Facades\DB;
use Facade\Ignition\QueryRecorder\Query;

class LoggingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
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
        // $data = $request->all(); 

        $data = $request->query(); 

        // dd($request->query());
        
        //dd($data);

        reset($data);
        $first_key = key($data);

        //dd($first_key);
        
        $project = DB::table('projects')->where('id', $first_key)->first();

        //dd($project);

        $loggingData['project'] = $project->project;
        $loggingData['service'] = $project->service;
        $loggingData['username'] = $project->username;
        $loggingData['user_id'] = Auth::id();

        //dd($loggingData);

        $logging = new Logging;         
        $logging->fill($loggingData);
        
        //dd($logging);

        $saved = $logging->save();
        if (!$saved) {
            abort('404');
        }


        return redirect()->route('home')->with('success', 'Log Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
