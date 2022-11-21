<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use App\Models\PostModel;
use App\Models\categoriesModel;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryCommentModel;
use App\Models\CommentModel;
// use Symfony\Component\HttpFoundation\Request;
// use function Spatie\FlareClient\view;
// use function Spatie\FlareClient\view;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('Blog.index', [
            'posts'=>PostModel::latest()->filter(request(['post_models', 'q']))->paginate(4),
            'cats'=>DB::select('select * from categories_models limit ?', [3]),
            'ca'=>DB::select('select * from categories_models limit ?', [3]),
            // categoriesModel::all(),
            'Comm'=>DB::select('select * from comment_models limit ?', [3])
            
            ]);
        // return view('Blog.index', [
        // 'Blogs'=>PostModel::get()->all()
        // ]);
        // ZYJXYD
        // ZYM73F
        // ZYNFXB
        // ZYNM6Y
        // ZYNPB3

        
    }

    public function sports()
    {
        return view('Blog.sports', [
            'cats'=>categoriesModel::latest()->filter(request(['Categories', 'q']))->paginate(4),
            //'Posts'=>PostModel::li,

            'posts'=>DB::select('select * from post_models limit ?', [3]),
            'pos'=>DB::select('select * from post_models limit ?', [3]),

            'Comm'=>DB::select('select * from category_comment_models  limit ?', [3])
            
            ]);

    }

  

    public function contact()
    {
        
        
        return view('Blog.contact', [
            // 'blog'=>PostModel::latest(),
            // 'post'=>categoriesModel::latest()
            'posts'=>DB::select('select * from post_models limit ?', [3]),      
            'cats'=>DB::select('select * from categories_models limit ?', [3])
            
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogLayouts()
    {
        return view('blogLayouts.bloglayouts', [
            'post'=>PostModel::latest(),
            'cat'=>categoriesModel::latest(),
            // 'ca'=>DB::select('select * from categories_models limit ?', [3]),
            // 'p'=>DB::select('select * from post_models limit ?', [3])
        ]);
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
    public function blog($id)
    {
        // XB2C9Y
        // XB2HZZ
        // XB2V77
        // XB2Y3W
        // XB3QTF
        // dd($id);
        $cat=categoriesModel::all();
   $request=PostModel::find($id);
   $comment=CommentModel::find($id);
// $commm=$comment->Cat_id;
// dd($req->Cat_id);

$comments=DB::table('comment_models')->where('Comment_id', $id  )->get('Comment');
        return view('blog.blog', [
            'post'=>$request,
            'cat'=>$cat,
            'comments'=>$comments
            
        ]);
    }

    public function categories($id)
    {
//    dd($id);
        
   $cat=categoriesModel::find($id);
   $post=PostModel::all();

$reqw=CategoryCommentModel::find($id);
// $req=$reqw->Cat_id;
// dd($req->Cat_id);

$reqq=DB::table('category_comment_models')->where('Cat_id', $id  )->get('Comments');
        return view('blog.categories', [
            'cat'=>$cat,
            'post'=> $post,
            'reqq'=>$reqq
        ]);
    }

   


    public function cat_comm($id, Request $request)
    {
        // dd($request);

        $comm=$request->validate([
            'comment'=>'required'
        ]);

        $post=categoriesModel::find($id);
            // dd($post);
        CategoryCommentModel::create([
           'Comments'=>$request->input('comment'),
            'Cat_id'   =>$post->id         
        ]);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
   
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
