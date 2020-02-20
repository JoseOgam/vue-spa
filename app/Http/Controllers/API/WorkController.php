<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
//construct function that protect other functions from unauthorized users
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Work::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return
     */
    public function store(Request $request)
    {
        return Work::create([
            'title' => $request['title'],
            'image' => $request['image'],
            'url' => $request['url'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return
     */
    public function update(Request $request, $id)
    {

        $work = Work::findOrFail($id);

        $work->update($request->all());


        return ['message' => 'portfolio updated'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return
     */
    public function destroy($id)
    {
        $work = Work::findOrFail($id);

        $work->delete();
    }
}
