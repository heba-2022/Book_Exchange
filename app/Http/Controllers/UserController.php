<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\College;
use App\Department;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id=null)
    {
        if($id==null){
            $i=Auth::user()->id;
            $user=User::where('id',$i)->first();
           

        $colleges=College::get();
        $departments =Department::get();
        return view('users.info')->with(['colleges'=>$colleges,'departments'=>$departments ,'user'=>$user]);
        }else{
            $user=User::where('id',$id)->first();
            $books=Book::where('id_user',$user->id)->get();
            return view('profile')->with(['user'=>$user,'books'=>$books]);

        }
    }public function search(Request $request)
    {
        $books=Book::where('title',$request->title)->get();

        $colleges=College::get();

        return view('users.books')->with(['books'=>$books,'colleges'=>$colleges]);
    }


    
    public function books($id=null)
    {        $colleges=College::get();

        if($id==null){

        $i=Auth::id();
        $user=null;
        $books=Book::where('id_user',$i)->get();
        }else{
            $books=Book::where('id_user',$id)->get();
            $user=User::where('id',$id)->first();


        }
        return view('users.books')->with(['books'=>$books,'user'=>$user,'colleges'=>$colleges]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit()
    {
        $colleges=College::get();
        $departments =Department::get();

        return view('users.setting')->with(['colleges'=>$colleges,'departments'=>$departments ]);
    }

    public function change()
    {
        return view('users.changePass');
    } 
    public function changePass(Request $request)
    {
        $id=Auth::id();
        $user=User::where('id',$id)->first();

        if($request['password']){
            $user->password= Hash::make($request['password']);

        }
    $user->save();

        return redirect()->back()->with('success','تم تغيير كلمة السر بنجاح');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id =Auth::user()->id;
        $user=User::where('id',$id)->first();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->id_department=$request['id_department'];
        $user->phone=$request['phone'];
        $user->social_media=$request['social_media'];
      
    $user->save();

        return redirect()->route('profile')->with('success','تم تعديل بياناتك الشخصيه بنجاح');
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
