<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function test(){
        // $news = new News;
        // $news->title = "Halo";
        // $news->slug = "NewsPertama";
        // $news->imagelink = "ini image link 1";
        // $news->excerpt = "lorem";
        // $news->desc = "lorem";
        // $news->save();

        // $news = new News;
        // $news->title = "Today";
        // $news->imageLinkHeader = "./picture references/News/news1.png";
        // $news->imageLinkContent = "../picture references/News/news1.png";
        // $news->slug = "today";
        // $news->excerpt = "New Heroes Update 'Arkan' The Guardian Temple of the West";
        // $news->desc = "Arkhan is a hero that looks and feels very much like an old 
        // school Knight. The character is a melee hero that excels in
        // clearing waves of minions, but can also deal high burst damage 
        // to opponents.";

        $news = new News;
        $news->title = "Apr 7th";
        $news->imageLinkHeader = "./picture references/News/mapbaru.jpg";
        $news->imageLinkContent = "../picture references/News/mapbaru.jpg";
        $news->slug = "7apr";
        $news->excerpt = "Coming Soon 5 vs 5 Arena model";
        $news->desc = "The 5 vs 5 arena model is an effective way to structure online 
        team play for online games. It is the same as the 
        classic 5 vs 5 team play but with 2 separate teams (5 vs 5) 
        of 5 players each.";

        $news->save();
        dump($news);
    }

    public function index(){
        return view('NewsPage',[
            "title" => "News",
            "news" => News::all()
        ]);
    }

    public function show(News $news){
        return view('New', [
            "title" => "Single News",
            "news" => $news
        ]);
    }
}
