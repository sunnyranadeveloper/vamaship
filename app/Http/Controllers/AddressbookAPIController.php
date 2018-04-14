<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addressbook;

class AddressbookAPIController extends Controller
{
	public function sendResponse($result, $message)
    {
    	$response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return response()->json($response, 200);
    }


    public function sendError($error, $errorMessages = [], $code = 404)
    {
    	$response = [
            'success' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }
    
    public function show($id)
    {
        $addressbook = Addressbook::find($id);
        if (is_null($addressbook)) {
            return $this->sendError('Post not found.');
        }
        return $this->sendResponse($addressbook->toArray(), 'Post retrieved successfully.');
    }
}
