<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use Symfony\Component\HttpFoundation\Session\Session;
use Auth;
use App\Models\AdminModel;
use App\Models\CommentModel;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryCommentModel;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loggedUserInfo= AdminModel::where('id', '=', session('LoggedUser'))->first();
        $req=PostModel::all();
       return view('post.viewposts', [
           'req'=>$req,
           'loggedUserInfo'=>$loggedUserInfo
       ]);
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $loggedUserInfo=$request->session()->has('loggedUserInfo');

        $loggedUserInfo= AdminModel::where('id', '=', session('LoggedUser'))->first();
       return view('post.add_content', [
           'loggedUserInfo'=>$loggedUserInfo
       ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function comments( $id, Request $request)
    {
        // 08111003466
        // WP29G3
        // WP2JY7
        // WP2RX7
        // WP2VW8
        // WP33MY
       $comment=$request->validate([
           'comment'=>'required'
       ]);
       $post=PostModel::find($id);
       CommentModel::create([
           'Comment'=>$request->input('comment'),
           'Comment_id'=>$post->id
       ]);
    //    dd($comment);

       return back();

    }
    public function store(Request $request)
    {

        // dd($request);
        $form=$request->validate([
            'Author'=> 'required|string',
            'Title'=> 'required|string',
            'Description'=> 'required|string',
            'Content' =>'required|string',
            'img' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

         $filename;
         if ($request->hasFIle('img')) {
             $filename= $form['Images']=$request->file('img')->store('Post_img', 'public');
             
          }

        //  $form['Admin_id']= auth()->id();
        //  PostModel::create($form);
        // dd($request);

    //    session('LoggedUser')->AdminModel()->
       PostModel::create([
            'Author'=>$request->input('Author'),
            'Title'=>$request->input('Title'),
            'Description'=>$request->input('Description'),
            'Content'=>$request->input('Content'),
            'Admin_id'=>1,
            
            'Images'=>$filename
        ]);

        return redirect('/viewposts')->with('success', 'Posts Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $loggedUserInfo = AdminModel::where('id', '=', session('LoggedUser'))->first();
       $items=PostModel::find($id);
        // dd($items);
       return view('post.edit', [
           'items'=>$items,
           'loggedUserInfo'=>$loggedUserInfo
       ]);
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
        // dd($request);
        $form=$request->validate([
            'author'=> 'required|string',
            'title'=> 'required|string',
            'description'=> 'required|string',
            'content' =>'required|string',
            // 'img' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            'img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            
        ]);
        $filename;
        if ($request->hasFIle('img')) {
            $filename= $form['Images']=$request->file('img')->store('UpdatePost_img', 'public');
            
         }

        $post=PostModel::where('id',$id)->update([
            'Author'=>$request->input('author'),
            'Title'=>$request->input('title'),
            'Description'=>$request->input('description'),
            'Content'=>$request->input('content'),
            'Images'=>$filename
            
        ]);

        return back()->with('Success', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);

        $post=PostModel::find($id);
        $post->delete();

        return back()->with('success', 'Post Deleted Successfully');
    }
}
