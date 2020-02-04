<?php

namespace App\Http\Controllers\API;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        return Contact::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param
     * @return
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string|max:255'
        ]);
        return Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message'],

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @param $contactId
     * @return \Illuminate\Http\Response
     */
    public function show($contactId)
    {
        return Contact::where('id', $contactId)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
