<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\post;
use App\Category;
use App\Subcategory;
use DB;
use Illuminate\Support\Facades\Redirect;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts =  DB::table('posts')
                 ->join('categories','posts.cat_id','=','categories.id')
                //  ->join('subcategories','posts.subcat_id','=','subcategories.id')
                ->select('posts.title','posts.image','posts.id','posts.cat_id','posts.subcat_id','posts.description','posts.position','categories.category_name')
                ->orderBy('posts.id', 'desc')
                ->get();
      
        return view('backend.post.managepost',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function findsubbycat($id){

        $data = Subcategory::where('category','=', $id)->select('id','sub_category')->get();
        return response()->json($data);

    }
    public function create()
    {
        $categories = Category::select('category_name','id')->get();
        return view('backend.post.createpost',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        
            $postimage= $request->file('imagename');
            $name = time().'.'.$postimage->getClientOriginalExtension();
            $image_name =$postimage->move(public_path().'/images/', $name);
           
           
            $post = new Post();
            $post->title = $request->title;
            $post->cat_id = $request->cat_id;
            $post->subcat_id = $request->subcat_id;
            $post->image = $name;
            $post->description = $request->description;
            $post->position = $request->position;
            $post->postdate = date('Y-m-d');
            $post->save();
            return Redirect::to('post');

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
        $post = Post::where('id','=',$id)->first();
        $categories = Category::all();
        $sub_categories = Subcategory::all();
        return view('backend.post.editpost',compact('post','categories','sub_categories'));
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
        $postimage = $request->file('imagename');
        if (!empty($postimage)){
        $name = time().'.'.$postimage->getClientOriginalExtension();
        $image_name =$postimage->move(public_path().'/images/', $name);
        $post = Post::where('id','=',$id)->first();
        $post->title = $request->title;
        $post->cat_id = $request->cat_id;
        $post->subcat_id = $request->subcat_id;
        $post->image = $name;
        $post->description = $request->description;
        $post->position = $request->position;
        $post->save();
        return Redirect::to('post');
       } else {
        $post = Post::where('id','=',$id)->first();
        $post->title = $request->title;
        $post->cat_id = $request->cat_id;
        $post->subcat_id = $request->subcat_id;
        $post->description = $request->description;
        $post->position = $request->position;
        $post->save();
        return Redirect::to('post');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $unlinkimage = $post->image;
        unlink('images/'.$unlinkimage);
        $post->delete();
        return Redirect::to('post');
    }
}
