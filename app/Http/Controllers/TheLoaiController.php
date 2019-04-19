<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;

class TheLoaiController extends Controller
{
    public function getDanhsach()
    {
    	$theloai = TheLoai::all();
    	return view('admin.theloai.danhsach',['theloai' => $theloai]);
    }

    public function getSua($id){
    	$theloai = TheLoai::find($id);
    	return view('admin.theloai.sua',['theloai' => $theloai]);
    }

    public function postSua(Request $request, $id){
    	$theloai = TheLoai::find($id);
    	$this->validate($request,
    	[
    		'Ten' => 'required|unique:TheLoai,Ten|min:3|max:100'
    	],
    	[
    		'required' => 'Bạn chưa nhập',
    		'unique' => 'Thể loại đã tồn tại',
    		'min' => 'Tên thể loại độ dài từ 3-100 ký tự',
    		'max' => 'Tên thể loại độ dài từ 3-100 ký tự',
    	]);
    	$theloai->Ten = $request->Ten;
    	$theloai->save();

        return redirect('admin/theloai/sua/' . $theloai->id)->with('thongbao','Sửa thành công');
    }

    public function getThem(){
        return view('admin.theloai.them');
    }
}
