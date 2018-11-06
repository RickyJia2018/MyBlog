<?php
/**
 * Created by PhpStorm.
 * User: ningqianjia
 * Date: 11/2/18
 * Time: 1:07 PM
 */
namespace App\Http\Controllers;

class PagesController extends Controller{

    public function getIndex(){
        return view('pages.welcome');
    }


    public function getContact(){
        return view('pages.contact');
    }

    public function getAbout(){
        $firstName = 'Ricky';
        $lastName = 'Jia';
        $fullName = $firstName . " " .$lastName;

//        return view('pages.about')->with("fullname",$fullName);
        return view('pages.about')->withFullname($fullName);
    }
}