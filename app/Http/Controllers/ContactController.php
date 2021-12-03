<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'zip_code'=>'required',
            'street'=>'required',
            'number'=>'required',
            'state'=>'required',
            'city'=>'required',
        ]);

        $contact = new Contact([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'telephone' => $request->get('telephone'),
            'zip_code' => $request->get('zip_code'),
            'street' => $request->get('street'),
            'number' => $request->get('number'),
            'state' => $request->get('state'),
            'city' => $request->get('city')
        ]);
        $contact->save();
        return redirect('/')->with('success', 'Contact saved!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit', compact('contact'));
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

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'zip_code'=>'required',
            'street'=>'required',
            'number'=>'required',
            'state'=>'required',
            'city'=>'required',
        ]);


        $contact = Contact::find($id);
        $contact->first_name =  $request->get('first_name');
        $contact->last_name = $request->get('last_name');
        $contact->email = $request->get('email');
        $contact->telephone = $request->get('telephone');
        $contact->zip_code = $request->get('zip_code');
        $contact->street = $request->get('street');
        $contact->number = $request->get('number');
        $contact->state = $request->get('state');
        $contact->city = $request->get('city');
        $contact->save();

        return redirect('/')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/')->with('success', 'Contact deleted!');
    }
}
