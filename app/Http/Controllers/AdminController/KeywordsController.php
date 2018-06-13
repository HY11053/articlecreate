<?php

namespace App\Http\Controllers\AdminController;

use App\AdminModel\Keyword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KeywordsController extends Controller
{
    public function GetKeywords()
    {
        $keywords=Keyword::orderBy('id','asc')->paginate(30);
        return view('admin.keywords',compact('keywords'));
    }

    public function DeleteKeywords($id)
    {
        Keyword::where('id',$id)->delete();
        return back();
    }

    public function UpdateKeywords(Request $request)
    {
        Keyword::where('id',$request->id)->update(['status'=>1]);
        return '已使用';
    }

    public function SearchKeywords(Request $request)
    {
        $keywords=Keyword::where('keywords','like','%'.$request->title.'%')->orderBy('id','asc')->paginate(30);
        $title=$request->title;
        return view('admin.keywords',compact('keywords','title'));
    }
}
