<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //check if setup is complete
        $Available = DB::table('businesses')->where('user_id',Auth::User()->id)->get();
        if($Available->isEmpty()){
            return view('front.index');
        }else{
            return view('front.dashboard');
        }
    }

    public function dashboard()
    {
        //check if setup is complete
        return view('front.dashboard');
    }

    public function wizard(Request $request){
        $userdata = array (
            'dob' => $request->dob,
            'idNo' => $request->id,
            'kra' => $request->kra,
            'address' =>$request->address,
        );
        DB::table('users')->where('id',Auth::User()->id)->update($userdata);

        // Prepare
        if($request->hasFile('file')){
            $image = $request->file('file');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads/users'),$imageName);
        }else{
            $imageName = "0";
        }

        $request->request->add(['avatar' => $imageName]);
        $data = $request->except(['dob','file','idNo','kra','address','_token']);
        // dd($data);
        $SaveBusinessInfo = Business::create($data);
        return view('front.dashboard');

    }
}
