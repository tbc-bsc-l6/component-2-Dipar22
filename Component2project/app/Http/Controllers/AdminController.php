<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Book;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $user_type = Auth()->user()->usertype;

            if($user_type == 'admin')
            {
                return view('admin.index');
            }

            else if($user_type == 'user')
            {
                $data = Book::all();
                return view('home.index',compact('data'));
            }
        }
        else 
        {
            return redirect()->back();
        }

    }
    public function category_page()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request)
    {
        $data= new Category;
        $data->cat_title =$request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');

    }
    public function cat_delete($id)
    {
        $data= Category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data= Category::find($id);
        return view('admin.edit_category',compact('data'));
    }
    public function update_category(Request $request,$id)
    {
        $data= Category::find($id);
        $data->cat_title =$request->cat_name;
        $data->save();
        return redirect('/category_page')->with('message','Category Updated Successfully');
    }
    public function add_book()
    {
        $data = Category::all();
        return view('admin.add_book',compact('data'));
    }

    public function store_book(Request $request)
    {
        $data =new Book;
        $data->title = $request->book_name;
        $data->author_name = $request->author_name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;
        $data->category_id = $request->category;
        $book_image=$request->book_img;
        $author_image =$request->author_img;
        if($book_image)
        {
            $book_image_name = time().'.'.$book_image->getClientOriginalExtension();
            $request->book_img->move('book',$book_image_name);
            $data->book_img = $book_image_name;

        }

        if($author_image)
        {
            $author_image_name = time().'.'.$author_image->getClientOriginalExtension();
            $request->author_img->move('author',$author_image_name);
            $data->author_img = $author_image_name;

        }


        $data->save();
        return redirect()->back();

    }

    public function show_book()
    {
        $book = Book::all();
        return view('admin.show_book',compact('book'));
    }

    // public function book_delete($id)
    // {
    //     $data = Book::find($id);
    //     $data->delete();
    //     return redirect()->back()->with('message','Book Deleted Successfully');
    // }

    public function b_delete($id)
    {
        $data= Book::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit_book($id)
    {
        $data=Book::find($id);
        $category=Category::all();
        return view('admin.edit_book',compact('data','category'));
    }
    public function update_book(Request $request,$id)
    {
        $data = Book::find($id);
        $data->title = $request->title;
        $data->author_name = $request->author_name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;
        $data->category_id = $request->category;
        $book_image=$request->book_img;
        $author_image =$request->author_img;
        if($book_image)
        {
            $book_image_name = time().'.'.$book_image->getClientOriginalExtension();
            $request->book_img->move('book',$book_image_name);
            $data->book_img = $book_image_name;

        }

        if($author_image)
        {
            $author_image_name = time().'.'.$author_image->getClientOriginalExtension();
            $request->author_img->move('author',$author_image_name);
            $data->author_img = $author_image_name;

        }
        $data->save();
        return redirect('/show_book');

    }
}
