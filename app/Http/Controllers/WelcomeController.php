<?php

namespace App\Http\Controllers;

use App\News;
use App\Podcast;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        //
        $news = News::where('featured',true)->orderBy('updated_at','desc')->get();
        $featuredNews = collect();
        foreach ($news as $item) {
            if ($item->category->name == "Playstation" && $item->clasification->name == "Noticias" ||
                $item->category->name == "Xbox" && $item->clasification->name == "Noticias" ||
                $item->category->name == "Nintendo" && $item->clasification->name == "Noticias" ||
                $item->category->name == "Multi Consola" && $item->clasification->name == "Noticias"){
                $featuredNews->push($item);
            }
        }
        $featuredNews = $featuredNews->forPage(0,8);


        $mobileSection=collect();
        foreach ($news as $item) {
            if ($item->category->name == "Movil" && $item->clasification->name == "Noticias"){
                $mobileSection->push($item);
            }
        }
        $mobileSection = $mobileSection->forPage(0,10);


        $reviewSection= collect();
        foreach ($news as $item) {
            if ($item->category->name == "Playstation" && $item->clasification->name == "Reseñas" ||
                $item->category->name == "Xbox" && $item->clasification->name == "Reseñas" ||
                $item->category->name == "Nintendo" && $item->clasification->name == "Reseñas" ||
                $item->category->name == "Multi Consola" && $item->clasification->name == "Reseñas"){
                $reviewSection->push($item);
            }
        }
        $reviewSection= $reviewSection->forPage(0,10);


        $featuredPcMobile=collect();
        foreach ($news as $item) {
            if ($item->category->name == "PC" && $item->clasification->name == "Noticias" ||
                $item->category->name == "Movil" && $item->clasification->name == "Noticias"){
                $featuredPcMobile->push($item);
            }
        }
        $featuredPcMobile= $featuredPcMobile->forPage(0,8);


        $news = News::with('user')->orderBy('id','desc')->paginate(10);

        return view('welcome')->with(compact('news','featuredNews','mobileSection','reviewSection','featuredPcMobile'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($category,$clasification,$id)
    {
        //
        $news=News::with('category')
            ->whereHas('category', function ($query) use ($category) {
                $query->where('categories.name', '=', $category);
            })
            ->whereHas('clasification', function ($query) use ($clasification) {
                $query->where('clasifications.name', '=', $clasification);
            })->where('id',$id)
            ->first();
        if ($news!=null)
            return view('general.news')->with(compact('news'));
        return back();
    }


    public function showCategories($section)
    {
        //
        $news = null;
        $newsCategory=News::with('category')
            ->whereHas('category', function ($query) use ($section) {
                $query->where('categories.name', '=', $section);
            })
            ->paginate(10);

        $newsClasification=News::with('clasification')
            ->whereHas('clasification', function ($query) use ($section) {
                $query->where('clasifications.name', '=', $section);
            })
            ->paginate(10);

        if (count($newsCategory)>0){
            $news = $newsCategory;
            return view('general.categories')->with(compact('news'));
        }elseif (count($newsClasification)>0) {
            $podcast=false;
            foreach ($newsClasification as $item){
                if ($item->clasification->name == "Podcast"){
                    $podcast = true;
                }
            }
            if ($podcast){
                $podcast =Podcast::all();
                return view('general.podcast')->with(compact('podcast'));
            }else{
                $news = $newsClasification;
                return view('general.categories')->with(compact('news'));
            }

        }else{
        return back();
        }
    }




    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
