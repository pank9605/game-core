<?php

namespace App\Http\Controllers\Staff;
use App\Http\Controllers\Controller;
use App\News;
use App\NewsImage;
use Illuminate\Http\Request;
use File;

class NewsImagesController extends Controller
{

    public function index($id)
    {
        //
        $news = News::find($id);
        $images = $news->images()->orderBy('featured','desc')->get();

        return view('news.news_images.index')->with(compact('images','news'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
        $image = NewsImage::find($id);

        if ($image->image != null) {

            if (substr($image->image, 0, 4) == "http") {
                $deleted = true;
            } else {
                $images = File::files(public_path() . '/storage/images/news_images');

                $fullPath = public_path() . '/storage/images/news_images/' . $image->image;
                foreach ($images as $key => $img) {
                    if ($image->image == pathinfo($img)['basename']) {
                        $deleted = File::delete($fullPath);
                    } else {
                        $deleted = true;
                    }
                }
            }
            //Eliminar el registro
            if ($deleted) {
                $image->delete();

                $notification = "!La imagen se ha eliminado correctamente¡";
                return back()->with(compact('notification'));
            }else{
                $notificationFaill = "La imagen no se ha podido eliminar :(";
                return back()->with(compact('notificationFaill'));
            }
        }
    }


    public  function imageFeatured($id, $image){
        NewsImage::where('news_id',$id)->update([
            'featured' => false
        ]);

        $image = NewsImage::find($image);
        $image->featured = true;
        if ($image->save()){
            return back();
        }
    }
}
