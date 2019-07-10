<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_1 extends Controller
{
    public  function get_trangchu(){
    	return view('pages.trangchu');
    }
    public  function get_lienhe(){
    	return view('pages.lienhe');
    }
    public  function get_about(){
    	return view('pages.about');
    }
    public  function get_sukien(){
    	return view('pages.sukien');
    }
    public  function get_thietbi(){
    	return view('pages.thietbi');
    }
    public  function get_nhansu(){
    	return view('pages.nhansu');
    }
    public  function get_team(){
    	return view('pages.team');
    }
    public  function get_tintuc(){
    	return view('pages.tintuc');
    }

}
