<?php

namespace App\Http\Controllers;

use App\Category;
use App\Clasification;
use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        //
        $news = News::with('user')->orderBy('id','desc')->paginate(10);
        $totalNews = News::with('user')->count();
        return view('news.index')->with(compact('news','totalNews'));
    }


    public function create()
    {
        //
        $now = Carbon::now();
        $date = $now->format('Y-m-d\TH:i');
        $categories = Category::all();
        $clasifications = Clasification::all();

        return view('news.create')->with(compact('categories','clasifications','date'));
    }


    public function store(Request $request)
    {
        //
        if ($image = $request->hasFile()){
            dd($image);
        }
        $news = new News();
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $date = $request->input('publish_date');
        $news->publish_date = date("Y-m-d H:i:s",strtotime($date));

        if ($request->input('featured')!=null){
            $news->featured = true;
        }else{
            $news->featured = false;
        }

        if ($request->input('category') == "Playstation"){
            $news->category_id = 1;
        }elseif ($request->input('category') == "Xbox"){
            $news->category_id = 2;
        }elseif ($request->input('category') == "Nintendo"){
            $news->category_id = 3;
        } elseif ($request->input('category') == "PC"){
            $news->category_id = 4;
        }elseif ($request->input('category') == "Movil"){
            $news->category_id = 5;
        }else{
            $news->category_id = null;
        }

        if ($request->input('clasification') == "Noticia"){
            $news->clasification_id = 1;
        }elseif ($request->input('clasification') == "Reseña"){
            $news->clasification_id = 2;
        }elseif ($request->input('clasification') == "Especial"){
            $news->clasification_id = 3;
        } elseif ($request->input('clasification') == "Podcast"){
            $news->clasification_id = 4;
        }elseif ($request->input('clasification') == "Unboxing"){
            $news->clasification_id = 5;
        }else{
            $news->clasification_id = null;
        }

        $news->user_id = $request->input('author');
        //dd($news);

        $news->save();

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }
}
