<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    function page(Request $request)
    {
        return view('pages.contact');
    }

    function contactRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('errorMessage', 'Form Validation Failed');
        }

        try {
            return DB::table('contacts')->insert($request->input());
        } catch (Exception $e) {
            DB::rollback();
        }
    }
}
