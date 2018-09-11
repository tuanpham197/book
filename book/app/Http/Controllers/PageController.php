<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smart_Book;
use App\User;

class PageController extends Controller
{
    function __construct(){
    	$book = Smart_Book::all();
    	view()->share('book',$book);
    } 

    function trangChu(){
    	return view('pages.home');
    }

    public function index(){
    	echo "Ádas";
    	return view('admin.book.list');
    }
    public function destroy(Request $request){
    	$book = Smart_Book::find($request->category_id);

    	$book->delete();
    	return redirect('admin/book/list')->with('thongbao','Xóa thành công');
    }

    public function getRegister(){
        return view('pages.register');
    }

    function postRegister(Request $request){
        $this->validate($request,[
            'name'          => 'required|min:10',
            'email'         => 'required|unique:users,email',
            'password'      => 'required|min:8',
            'passwordAgain' => 'required|same:password'
        ],
        [
            'name.required'      => 'Không được bỏ trống',
            'name.min'           => 'Tên quá ngắn',
            'email.required'     => 'Không được bỏ trống',
            'email.unique'       => 'Đã tồn tại ',
            'password.required'  => 'Không được bỏ trống',
            'password.min'       => 'Password phải dài hơn 8 kí tự',
            'passwordAgain.same' => 'Mật khẩu không trùng khớp',
            'passwordAgain.required' => 'Không được bỏ trống'
        ]);

        $user           = new User;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->level    = 2;
        $user->save();

        return redirect('admin/login')->with('thongbao','Đăng kí thành công');
    }
}
