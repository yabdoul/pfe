<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function about()
    {
        return view('user.about');
    }

    public function services()
    {
        return view('user.services');
    }
    public function posterCV(){
        return view('user.posterCv');
    }
    public function tst2(){
        return view('tst2');
    }
    public function sendcv(Request $request)
    {
        // Validation
        $request->validate([
            'cv' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048',
        ]);
    
        if ($request->file('cv')) {
            $file = $request->file('cv');
            $filename = time() . '_' . $file->getClientOriginalName();
    
            // File upload location
            $location = public_path('/cvs');
    
            // Upload file
            $file->move($location, $filename);
    
            Session::flash('message', 'Upload Successfully.');
            Session::flash('alert-class', 'alert-success');
        } else {
            Session::flash('message', 'File not uploaded.');
            Session::flash('alert-class', 'alert-danger');
        }
       
        return redirect('/postercv')->with("modal_message_success", "aploaded by secces");;
    }
    
    }
