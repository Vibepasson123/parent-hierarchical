<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class showHierarchical extends Controller
{
    public function getHierarchical(Request $request) {
        if (Auth::check()) {
            $validator = Validator::make($request->all() ,[
                'email'=>'required|email',
            ]);

            if($validator->fails()) {
                return response()->json(['success'=>false,'message'=>'validation Error','result'=>'validation_error']);
           }
           return response()->json(['success'=>false,'message'=>'the work is done in this filed','result'=>'ok']);
        }
    }

}
