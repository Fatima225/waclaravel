<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   function index(){
       return view ("page.index");
   }
   function charts(){
    return view ("page.charts");
    }
    function tables(){
        return view ("page.tables");
    }
    function buttons(){
        return view ("page.buttons");
    }
    function cards(){
        return view ("page.cards");
    }
    function animation(){
        return view ("page.animation");
    }
    function border(){
        return view ("page.border");
    }
    function color(){
        return view ("page.color");
    }
    function other(){
        return view ("page.other");
    }


}
