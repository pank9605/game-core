<?php

namespace App\Http\Controllers\Staff;
use App\Http\Controllers\Controller;
use App\Category;
use App\Clasification;
use App\News;
use App\NewsImage;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

class NewsController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $name = auth()->user()->email;

            if (session('$name')){
                return session('$name');
            }else{
                session('$name','images');
            }

            $image = new NewsImage();
            $file = $request->file('upload');
            $fileName = uniqid() . '-' . $file->getClientOriginalName(); //Renombrar la Imagen
            $path = public_path('images/news_images/'. $fileName);

            $imageSave = Image::make($file->getRealPath())
                ->resize(1280,720)->fill()->save($path,72);
            $moved = true;

            //$moved = $file->move($path, $fileName);
            //Crear 1 registro en la tabla de users
            if ($moved) {
                $image->image = $fileName;
                $image->news_id = null;
                $image->save();
                $name = auth()->user()->email;
                //session($name)->push($image);
                session()->push($name, $image);
                $CKEditorFuncNum = $request->input('CKEditorFuncNum');
                $url = '/images/news_images/'.$fileName;
                $msg = 'Image cargada correctamente'.$fileName;
                $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

                // Render HTML output
                @header('Content-type: text/html; charset=utf-8');
                echo $re;
            }

        }
    }

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
        $news = new News();
        $category = Category::where('name',$request->input('category'))->first();
        $clasification = Clasification::where('name',$request->input('clasification'))->first();
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $date = $request->input('publish_date');
        $news->publish_date = date("Y-m-d H:i:s",strtotime($date));
        if ($request->input('featured')!=null){
            $news->featured = true;
        }else{
            $news->featured = false;
        }
        $news->category_id= $category->id;
        $news->clasification_id =$clasification->id;
        $news->introduction = $request->input('introduction');
        $news->user_id = auth()->user()->id;
        $news->save();
        $emailAuthor = auth()->user()->email;
        if (session($emailAuthor)){
            foreach (session($emailAuthor) as $item) {
                $images = NewsImage::find($item->id);
                $images->news_id = $news->id;
                $images->save();
            }
            Session::forget($emailAuthor);
        }

        if ($news || $images){
            $notification = "Noticia Registrada Correctamente :D";
            return redirect('/staff/news')->with(compact('notification'));
        }else{
            $notificationFaill = "La noticia no pudo se guardada :(";
            return redirect('staff/news')->with(compact('notificationFaill'));
        }

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
        $news = News::find($id);
        $date = date('Y-m-d\TH:i',strtotime($news->publish_date));
        $categories = Category::all();
        $clasifications = Clasification::all();
        $clasificationSelected = collect();
        $categorySelected = collect();
        foreach ($clasifications as $clasification){
            if ($clasification->name != $news->clasification->name){
                $clasificationSelected->push($clasification->name);
            }
        }

        foreach ($categories as $category){
            if ($category->name != $news->category->name){
                $categorySelected->push($category->name);
            }
        }

        return view('news.edit')->with(compact('news','categories','clasifications','date','clasificationSelected','categorySelected'));
    }


    public function update(Request $request, $id)
    {
        //
        $news = News::find($id);
        $category = Category::where('name',$request->input('category'))->first();
        $clasification = Clasification::where('name',$request->input('clasification'))->first();

        $news->title = $request->input('title');
        $news->introduction = $request->input('introduction');
        $news->category_id= $category->id;
        $news->clasification_id =$clasification->id;
        $news->publish_date = date("Y-m-d H:i:s",strtotime($request->input('publish_date')));
        $featured = false;
        if ($request->input('featured') != null){
            $featured = true;
        }
        $news->featured = $featured;
        $news->description = $request->input('description');

        $emailAuthor = auth()->user()->email;
        if (session($emailAuthor)){
            foreach (session($emailAuthor) as $item) {
                $images = NewsImage::find($item->id);
                $images->news_id = $news->id;
                $images->save();
            }
            Session::forget($emailAuthor);
        }

        if ($news->save() || $images){
            $notification ="Noticia Modificada con Exito, Ahora puede Verificar sus Imagenes";
            return redirect('/staff/news')->with(compact('notification'));
        }else{
            $notificationFaill ="La Noticia no pudo Modificarse :(";
            return redirect('/staff/news')->with(compact('notificationFaill'));

        }
    }


    public function destroy($id)
    {
        //
    }

}


//dd($news);

//$images = NewsImage::all();
//$null = $images->where('news_id',null);




/* //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->move(public_path() . '/images/news_images', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = '/images/news_images/'.$filenametostore;
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;*/
//Guardar la imagen en nuestro Proyecto

/*$file = $request->file('upload');
            $path = public_path() . '/images/news_images';
            $fileName = uniqid() . '-' . $file->getClientOriginalName(); //Renombrar la Imagen
            $moved = $file->move($path, $fileName);
            //Crear 1 registro en la tabla de users
            if ($moved) {
                $user->porfile_image = $fileName;
            }*/


