<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smart_Book;

class InsertDataController extends Controller
{
    function insertData(){
    	$book              = new Smart_Book;
    	$book->title       = "Lập trình C/C++";
    	$book->description = "Sách về lập trình c căn bản cho người mới bắt đầu";
    	$book->img  	   = "a.jpg";
    	$book->author      = "Lê Đình Quang";
    	$book->save();
    	echo "done";
    }
}
