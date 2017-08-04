<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;


class RegistrationController extends Controller
{

    public function create(){

        return view('registration/create');
    }

    public function store(RegistrationRequest $request){

        $request->persist();

        flash('Thanks for signing up :D')->success();



        return redirect('/');

    }     

}
