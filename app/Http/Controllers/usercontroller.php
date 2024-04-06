<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //to use controller make function 
    //to call this function we have to make route for this
    //for that we have import controller to web.php
    function show($id)
    {
        echo $id,"<br>";
        return "hello from controller";
    }
}
