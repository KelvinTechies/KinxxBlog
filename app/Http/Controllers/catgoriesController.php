<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Auth;
use App\Models\categoriesModel;
use Illuminate\Support\Facades\Redirect;

class catgoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loggedUserInfo=AdminModel::where('id', '=', session('LoggedUser'))->first();
        
       return view('post.add_content_sports', [
           'loggedUserInfo'=>$loggedUserInfo
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
        $form=$request->validate([
            'Author'=>'required|string',
            'Title'=>'required|string',
            'Description'=>'required|string',
            'Content'=>'required|string',
            'Category'=>'required|string',
            'img'=>'required|image|mimes:jpeg,jpg,png,svg,gif|max:3000'
        ]);

        $newImage;

        if ($request->hasFile('img')) {
            $newImage=$form['Images']=$request->file('img')->store('category_img', 'public');
        }
        
        categoriesModel::create([
            'cat_id'=>session('LoggedUser'),            
            'Author'=>$request->input('Author'),
            'Title'=>$request->input('Title'),
            'Description'=>$request->input('Description'),
            'Content'=>$request->input('Content'),
            'Categories'=>$request->input('Category'),


            'Images'=>$newImage
            
            
        ]);
        // dd($request);
        
        return redirect('/viewTables')->with('Success', 'Posts Added');
    }

    public function viewTables()
    {
        $loggedUserInfo=AdminModel::where('id', '=', session('LoggedUser'))->first();
        $requests=categoriesModel::all();
       return view('post.viewTables', [
           'requests'=>$requests,
           'loggedUserInfo'=>$loggedUserInfo
       ]);
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

        $loggedUserInfo=AdminModel::where('id', '=', session('LoggedUser'))->first();
        
        $reqs=categoriesModel::find($id);

        return view('post.edit_cat', [
            'reqs'=>$reqs,
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
    public function updateCat(Request $request, $id)
    {
        // dd($request);
        
        $form=$request->validate([
            'author'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
            'content'=>'required|string',
            'Category'=>'required|string',
            'img'=>'required|image|mimes:jpeg,jpg,png,svg,gif|max:3000'
        ]);
        // dd($id);

        $newImage;

        if ($request->hasFile('img')) {
            $newImage=$form['Images']=$request->file('img')->store('category_img', 'public');
        }
        
        $post= categoriesModel::where('id',$id)->update([  
            'Author'=>$request->input('author'),
            'Title'=>$request->input('title'),
            'Description'=>$request->input('description'),
            'Content'=>$request->input('content'),
            'Categories'=>$request->input('Category'),


            'Images'=>$newImage
        ]);
        // dd($request);

            // return back()->with('success', 'Posts Updated Successfully');
            return redirect('/viewtables');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_cat($id)
    {
        // dd($id);
       
        $post=categoriesModel::find($id);
        $post->delete();

        return back()->with('success', 'Post Deleted Successfully');
    }
}
