<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\College;
use Illuminate\Support\Facades\DB;
use App\Department;
use Auth;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::get();
        $colleges=College::get();

        return view('books.index')->with(['books'=>$books,'colleges'=>$colleges]);
    } 
    public function collegeBook(Request $request)
    {
        if($request->id_college!=0){
        $books=Book::where('id_college',$request->id_college)->get();
        $colleges=College::get();

        return view('books.index')->with(['books'=>$books,'colleges'=>$colleges]);
    }else{
        $books=Book::get();
        $colleges=College::get();

        return view('books.index')->with(['books'=>$books,'colleges'=>$colleges]);

    }
    }public function search(Request $request)
        {
            $books=Book::where('title',$request->title)->get();

            $colleges=College::get();

            return view('books.index')->with(['books'=>$books,'colleges'=>$colleges]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleges=College::get();
        $depatements=Department::get();
        
        return view('books.create')->with(['colleges'=>$colleges,'depatements'=>$depatements]);
    }

    public function getDepartmentList(Request $request)
    {
        $departments = DB::table('departments')->select("name","id")->where("id_college",$request->id_college)->get();
        return response()->json(['departments'=>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book= new Book();
        $book->title= $request->title;
        $book->state= $request->state;
        $book->id_college= $request->id_college;
        $book->id_department= $request->id_department;
        $book->describtion= $request->describtion;
        $book->id_user= Auth::user()->id;
         
        if($request->type_price=='free'){$book->price= 0.0;}else{$book->price= $request->price;}
        if($request->hasFile('image')){
            $image=$request->File('image');
            $destinationPath = public_path('/images/books/');
            $filename = $image->getClientOriginalName();
           $image->move($destinationPath,$filename);
                         $book->image = $filename;

            }
    

        $book->save();
        return redirect()->back()->with('success','تم اضافة الكتاب بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book=Book::where('id',$id)->first();
    
        return view('books.show')->with('book',$book);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=Book::where('id',$id)->first();
        $colleges=College::get();
        $depatements=Department::get();
        $department=Department::where('id',$book->id_department)->first();

        return view('books.edit')->with(['book'=>$book,'colleges'=>$colleges,'depatements'=>$depatements,'department'=>$department]);

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
        $book=Book::where('id',$id)->first();
        $book->title= $request->title;
        $book->state= $request->state;
        
        $book->id_college= $request->id_college;
        if( $request->id_department!=""){
        $book->id_department= $request->id_department;
    }
        $book->describtion= $request->describtion;
        $book->id_user= Auth::user()->id;
         
        if($request->type_price=='free'){$book->price= 0.0;}else{$book->price= $request->price;}
        if($request->hasFile('image')){
            $image=$request->File('image');
            $destinationPath = public_path('/images/books/');
            $filename = $image->getClientOriginalName();
           $image->move($destinationPath,$filename);
                         $book->image = $filename;

            }
    

        $book->save();

        return redirect()->route('profile.books')->with('success','تم تعديل الكتاب بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=Book::where('id',$id)->first();
        $book->delete();

        return redirect()->route('profile.books')->with('success','تم حذف الكتاب بنجاح');

    }
}
