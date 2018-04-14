<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addressbook;

class AddressbookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $addressbook=Addressbook::all();
        return view('list',compact('addressbook'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $addressbook 					= 	new Addressbook();
        $addressbook->name 				=	$request->get('name');
        $addressbook->title 			=	$request->get('title');
        $addressbook->contact_number 	=	$request->get('contact_number');
        $addressbook->address_from_1 	=	$request->get('address_from_1');
        $addressbook->address_from_2 	=	$request->get('address_from_2');
        $addressbook->address_from_3 	=	$request->get('address_from_3');
        $addressbook->address_to_1 		=	$request->get('address_to_1');
        $addressbook->address_to_2 		=	$request->get('address_to_2');
        $addressbook->address_to_3 		=	$request->get('address_to_3');
        $addressbook->address_to_3 		=	$request->get('address_to_3');
        $addressbook->pincode 			=	$request->get('pincode');
        $addressbook->city 				=	$request->get('city');
        $addressbook->state 			=	$request->get('state');
        $addressbook->country 			=	$request->get('country');
        
        $addressbook->save();
        
        return redirect('addressbook')->with('success', 'Information has been added');
    }

    public function update(Request $request, $id)
    {
        $addressbook                    =   Addressbook::find($id);
        $addressbook->name              =   $request->get('name');
        $addressbook->title             =   $request->get('title');
        $addressbook->contact_number    =   $request->get('contact_number');
        $addressbook->address_from_1    =   $request->get('address_from_1');
        $addressbook->address_from_2    =   $request->get('address_from_2');
        $addressbook->address_from_3    =   $request->get('address_from_3');
        $addressbook->address_to_1      =   $request->get('address_to_1');
        $addressbook->address_to_2      =   $request->get('address_to_2');
        $addressbook->address_to_3      =   $request->get('address_to_3');
        $addressbook->address_to_3      =   $request->get('address_to_3');
        $addressbook->pincode           =   $request->get('pincode');
        $addressbook->city              =   $request->get('city');
        $addressbook->state             =   $request->get('state');
        $addressbook->country           =   $request->get('country');

        $addressbook->save();
        return redirect('addressbook');
    }

    public function edit($id)
    {
        $addressbook = Addressbook::find($id);
        return view('edit',compact('addressbook','id'));
    }

    public function destroy($id)
    {
        $addressbook = Addressbook::find($id);
        $addressbook->delete();
        
        return redirect('addressbook')->with('success','Information has been deleted');
    }

    public function show($id)
    {
        return view('view',['id'=>$id]);
    }
}