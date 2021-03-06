<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $user_logged = Auth::id();

        //dd($user_logged);

        return view('home', compact('projects', 'user_logged'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_logged = Auth::id();

        //dd($user_logged);

        return view('create', compact('user_logged'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();        

        $validator = Validator::make($data, [
            'project' => 'required|string|min:1',
            'service' => 'required|string|min:1',
            'username' => 'required|string|min:1',
            'password' => 'required|string|min:1'
        ]);

        if ($validator->fails()) {
            return redirect()->route('create')->with('failure', 'Project not added.')
            ->withErrors($validator)
            ->withInput();
        }
        $project = new Project;
        $project['user_id'] = Auth::id();
        $project->fill($data);
        
        //dd($project);

        $saved = $project->save();
        if (!$saved) {
            abort('404');
        }


        return redirect()->route('projects.index')->with('success', 'Project Added.');
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
