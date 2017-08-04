<?php


namespace App\Repositories;



class Posts
{

    public function __construct()
    {

    }

    public function all(){

        \App\Post::all();

    }



}