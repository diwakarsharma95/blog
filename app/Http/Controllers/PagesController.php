<?php
/**
 * Created by PhpStorm.
 * User: diwakar
 * Date: 12/11/18
 * Time: 4:25 PM
 */

namespace App\Http\Controllers;

class PagesController extends Controller{

    public function getIndex(){
        return view('pages/welcome');
    }

    public function getAbout(){
        $first = 'Diwakar';
        $last = 'Sharma';

        $fullname = $first." ".$last;
        $email = 'diwakarsharma95@gmail.com';

        return view('pages/about')->withFullname($fullname)->withEmail($email);
    }

    public function getContact(){
        return view('pages/contact');
    }

}