<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Contributor;
use DB;
use App\Video;
class HomeMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $post_headlines = Post::select('title','id')->get();
        $post_is_main = Post::where('position','=', 'main-high')->take(1)->orderBy('id', 'desc')->get();
        $post_is_isright= Post::where('position','=', 'main-right')->take(10)->orderBy('id', 'desc')->get();

        $post_is_bottom = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id as categoryid')
                        ->join('categories','posts.cat_id','=','categories.id')
                        ->where('position','=', 'main-bottom')
                        ->orderBy('postid', 'desc')
                        ->take(4)
                        ->get();

       $bang_cat = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id as categoryid')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('position','=', 'main-sub-bottom')
                ->orderBy('postid', 'desc')
                ->take(7)
                ->get();

        $vote_cat = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'ভোটের-হাওয়া')
                ->orderBy('postid', 'desc')
                ->take(10)
                ->get();
        $motamot_cat = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id as catid')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'মতামত')
                ->orderBy('postid', 'desc')
                ->take(5)
                ->get();

        $bangladesh_cat_main = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'বাংলাদেশ')
                ->orderBy('postid', 'desc')
                ->take(5)
                ->get();
       
         $opinion_cat_main = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'মতামত')
                ->orderBy('postid','=','desc')
                ->take(5)
                ->get();
   

        $sport_cat_main = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'খেলাধূলা')
                 ->orderBy('postid','desc')
                ->take(5)
                ->get();
        

        $entertainment_cat_main = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'বিনোদন')
               ->orderBy('postid','desc')
                ->take(5)
                ->get();
        
        $lifestyle_cat_main = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'লাইফস্টাইল')
                ->orderBy('postid','desc')
                ->take(5)
                ->get();

        $picture_cat_main = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'ছবি')
                ->take(3)
                ->get();
        $picture_cat_small = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'ছবি')
                ->where('posts.position','=', 'pictur-news')
                 ->orderBy('postid', 'desc')
                ->take(4)
                ->get();

        $rasifol_cat_small = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'রাশিফল')
                ->orderBy('postid', 'desc')
                ->take(3)
                ->get();
        $offer_cat_small = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'কুপন এন্ড অফারস')
                ->orderBy('postid', 'desc')
               ->take(4)
                ->get();

        $last_news = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->orderBy('postid', 'desc')
                ->take(3)
                ->get();
        $special_news = DB::table('posts')->select('posts.title','posts.id','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'বিশেষ-খবর')
                ->orderBy('posts.id', 'desc')
                ->take(3)
                ->get();
        $contributors = Contributor::all();
        $videos = Video::where('status','=',1)->get();
       $videos_right = Video::where('status','=',2)->take(1)->get()->first();
        $show_popular = Post::popularDay()->take(3)->get();

        $main_high_cat = Category::where('main_highlight','=','main-highlight')->take(4)->get();
      
        return view ('frnt_master', compact('post_headlines','post_is_main','post_is_isright',
                                        'post_is_bottom','bang_cat','vote_cat','motamot_cat',
                                        'bangladesh_cat',
                                        'opinion_cat_main','sport_cat_main',
                                        'entertainment_cat_main','lifestyle_cat_main',
                                        'rasifol_cat_small','offer_cat_small','picture_cat_main',
                                        'picture_cat_small','last_news','special_news','contributors','videos','videos_right','show_popular','main_high_cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detaispost($id)
    {    
        
        $visit_count = Post::find($id);
        $visit_count->visit();
        $show_popular = Post::popularDay()->get();
        
        $post_by_id = DB::table('posts')->select('posts.title','posts.id','posts.description','posts.image','posts.cat_id','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('posts.id','=',$id)
                ->first();

        $category_id = $post_by_id->cat_id;
                          
        $related_news = DB::table('posts')->select('posts.title','posts.id as postid','posts.description','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.id','=',$category_id)
                ->inRandomOrder()
                ->take(3)
                ->get();

         $la_news = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->orderBy('posts.id', 'desc')
                ->take(3)
                ->get();

         $show_popular = Post::popularDay()->take(3)->get();

        $sp_news = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'বিশেষ-খবর')
                ->orderBy('posts.id', 'desc')
                ->take(3)
                ->get();
        return view('frontpart.single_post',compact('post_by_id','related_news','la_news','sp_news','show_popular'));
    }

    public function categorywisepost($id)
    {  
        $category_banner_name_image = Category::find($id); 
        $category_banner = DB::table('categories')->select('categories.category_name','categories.id as categoryid','subcategories.sub_category','subcategories.id as subid')
                ->join('subcategories','categories.id','=','subcategories.category')
                ->where('categories.id','=',$id)
                ->get();

        $cat_by_post_bg = DB::table('posts')->select('posts.title','posts.id as postid','posts.description','posts.position','posts.image','posts.cat_id','categories.category_name','categories.id as categoryid')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('posts.cat_id','=',$id)
                ->where('posts.position','=','cat-main')
                ->take(1)
                ->get();
        $cat_by_post = DB::table('posts')->select('posts.title','posts.id as postid','posts.description','posts.position','posts.image','posts.cat_id','categories.category_name','categories.id as categoryid')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('posts.cat_id','=',$id)
                ->take(4)
                ->get();

        $sub_by_post = DB::table('posts')->select('title','id','position','created_at','cat_id','subcat_id')
                                            ->where('cat_id','=',$id)
                                            ->where('position','=','is-big')
                                            ->get();
        $sub_by_cat_main = DB::table('posts')->select('title','id','position','created_at','cat_id','subcat_id')
                                        ->where('cat_id','=',$id)
                                        ->where('position','=','cat_main')
                                        ->get();
        

        return view('frontpart.category_test',compact('category_banner_name_image','category_banner','cat_by_post_bg','cat_by_post','category_banner','sub_by_post','sub_by_cat_main'));


       }
    public function categorynothighlited($id){

            $not_high_cats = Category::find($id);
            $cat_by_post = DB::table('posts')->select('posts.title','posts.id','posts.cat_id','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
               ->where('posts.cat_id','=', $id)
                ->take(5)
                ->get();
                
       $picture_cat_main = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id as catid')
                        ->join('categories','posts.cat_id','=','categories.id')
                        ->where('categories.category_name','=', 'ছবি')
                        ->orderBy('postid','desc')
                        ->take(3)
                        ->get();
       $picture_cat_small = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id as catid')
                        ->join('categories','posts.cat_id','=','categories.id')
                        ->where('categories.category_name','=', 'ছবি')
                        ->where('posts.position','=', 'pictur-news')
                        ->orderBy('postid','desc')
                        ->take(4)
                        ->get();

            //$cat_by_post = Posts::where('cat_id','$id')->take(5)->get();
            return view('frontpart.category_sub',compact('not_high_cats','cat_by_post','picture_cat_main','picture_cat_small'));
    }
    public function detailgalery($id){
        
        $galary_unique = Post::find($id);

        $la_news = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->orderBy('postid', 'desc')
                ->take(3)
                ->get();

        $sp_news = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'বিশেষ-খবর')
                ->orderBy('postid', 'desc')
                ->take(3)
                ->get();

        $show_popular = Post::popularDay()->take(3)->get();

        $picture_galary_page = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id as catid')
                        ->join('categories','posts.cat_id','=','categories.id')
                        ->where('categories.category_name','=', 'ছবি')
                        ->orderBy('postid', 'desc')
                        ->take(10)
                        ->get();
        return view('frontpart.galary_php',compact('galary_unique','picture_galary_page','la_news','sp_news','show_popular'));
    }
    public function detailvideo($id){
       
        $la_news = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->orderBy('posts.id', 'desc')
                ->take(3)
                ->get();

        $sp_news = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'বিশেষ-খবর')
                ->orderBy('posts.id', 'desc')
                ->take(3)
                ->get();

        $show_popular = Post::popularDay()->take(3)->get();
           
        $videoByid = Video::find($id);
            return view ('frontpart.single_video',compact('videoByid','la_news','sp_news','show_popular'));
    }

    public function archiveserch(Request $request){

        $day = $request->dd;
        $month = $request->mm;
        $month_number = date("n",strtotime($month));
        $year = $request->yy;
        $filter_for = $year.'-'.$month_number.'-'.$day;
        $datewisefilter = DB::table('posts')->where('postdate','=',$filter_for)->paginate(10);
        $show_popular = Post::popularDay()->take(3)->get();

         $la_news = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->orderBy('posts.id', 'desc')
                ->take(3)
                ->get();

        $sp_news = DB::table('posts')->select('posts.title','posts.id as postid','posts.image','categories.category_name','categories.id')
                ->join('categories','posts.cat_id','=','categories.id')
                ->where('categories.category_name','=', 'বিশেষ-খবর')
                ->orderBy('posts.id', 'desc')
                ->take(3)
                ->get();

        //  print_r($show_popular) ;
        //                       exit();
                       //  echo $filter_for;
                       //  exit();
        return view('frontpart.archive',compact('datewisefilter', 'show_popular','la_news','sp_news'));
    }
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
