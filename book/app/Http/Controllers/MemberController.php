<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Smart_Book;

class MemberController extends Controller
{
    //
    public function getAdd(){
    	return view('pages.vietbai');
    }
    public function postAdd(Request $request){
        $this->validate($request,[
            'title'       => 'required|min:10|unique:Smart_Book,title',
            'desc' => 'required|min:10|',
            'author'      => 'required',
        ],
        [
            'title.required'       => 'khong duoc bo trong title',
            'title.min'            => 'Ban phai nhap hon 10 ki tu',
            'title.unique'         => 'da ton tai trong csdl',
            'desc.required' => 'khong duoc bo trong desc',
            'desc.min'      => 'no dung qua ngan ',
            'author.required'      => 'khong duoc bo trong'
        ]
    );

    	$book              = new Smart_Book;
        $book->title       = $request->title;
        $book->description = $request->desc;
        $book->author      = $request->author;
        $book->id_user     = $request->id_user;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $hinh = str_random(5) . "_".$name;
            while(file_exists("upload/img" . $hinh)){
                $hinh = str_random(4) ."_". $hinh;
            }
            $file->move("upload/img",$hinh);
            $book->img = $hinh;
        }else{
            $book->img = "";
        }
        $book->save();
        return redirect('member/book/add')->with('thongbao','Thêm thành công');
    }

    public function postEdit(Request $request){
        $this->validate($request,[
            'title'       => 'required|min:10|unique:Smart_Book,title',
            'desc' => 'required|min:10|',
            'author'      => 'required',
        ],
        [
            'title.required'       => 'khong duoc bo trong title',
            'title.min'            => 'Ban phai nhap hon 10 ki tu',
            'title.unique'         => 'da ton tai trong csdl',
            'desc.required' => 'khong duoc bo trong desc',
            'desc.min'      => 'no dung qua ngan',
            'author.required'      => 'khong duoc bo trong author'
        ]
    );

        $book2 = Smart_Book::find($request->name_id);
        $book2->title       = $request->title;
        $book2->description = $request->desc;
        $book2->author      = $request->author;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $hinh = str_random(5) . "_".$name;
            while(file_exists("upload/img" . $hinh)){
                $hinh = str_random(4) ."_". $hinh;
            }
            unlink("upload/img/".$book2->img);
            $file->move("upload/img",$hinh);
            $book2->img = $hinh;
        }
        $book2->save();

       return redirect('home')->with('thongbao','Update thành công ahihi:))');
    }

    public function destroy(Request $request){
    	$book = Smart_Book::find($request->name_id);

    	$book->delete();
    	return redirect('home')->with('thongbao','Xóa thành công');
    }
}
