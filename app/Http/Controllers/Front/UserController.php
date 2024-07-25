<?php

namespace App\Http\Controllers\Front;


use Illuminate\Routing\Controller;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{
   public function showUserName(){

          return 'OMAIR ';
   }


   public function getIndex(){



     /*$obj = new \stdClass();

     $obj->name = 'OMAIR';
     $obj->id = 5;
     $obj->gender= 'male';*/



       return view('welcome')->with('name','OMAIR ');


   }
}
