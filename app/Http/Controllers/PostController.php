<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Image;
use Illuminate\Http\Request;
use Session;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();

        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request,array(
              'title'           => 'required|max:255',
              'slug'            => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
              'category_id'     =>'required|integer',
              'body'            => 'required'
        ));
        // store in the database
        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body = $request->body;
        //save image
        if ($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $fileName=time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/'.$fileName);
            Image::make($image)->resize(800,400)->save($location);

            $post->image = $fileName;
        }else{
            $post->image = "No image file";
        }


        $post->save();

        Session::flash('success','The blog post was successfully saved!');  //put is permenit

        // redirect to another page

        return redirect()->route('posts.show',$post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show') ->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save as a var
        $post = Post::find($id);
        $categories = Category::all();
        $cates = array();
        foreach ($categories as $category){
            $cates[$category->id] = $category->name;
        }
        return view('posts.edit')->withPost($post)->withCategories($cates);
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
        $post = Post::find($id);

        //validation
        if ($request->input('slug')== $post->slug) {
              $this->validate($request,array(
            'title' => 'required|max:255',
            'category_id' => 'required|integer',
            'body' => 'required'
        ));
        }else{
              $this->validate($request,array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                  'category_id' => 'required|integer',
                  'body' => 'required'
        ));
        }
      
        //
        

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');

        $post->save();

        Session::flash('success', 'This post was successfully saved.');
        return redirect()->route('posts.show',$post->id);

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
        $post = Post::find($id);
        $post->delete();
        Session::flash('success','The post was successfully deleted.');

        return redirect()->route('posts.index');
    }
}
