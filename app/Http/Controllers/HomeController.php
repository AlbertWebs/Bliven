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
        return view('front.index');
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
        $booking = Business::create($data);

        $bname = $request->bname;
        $fiscal = $request->fiscal;
        $bnumber = $request->bnumber;
        $baddress = $request->baddress;
        $b_type = $request->b_type;
        $services_content = $request->services_content;
        $sources = $request->sources;
        $service_charge = $request->service_charge;
        $unit_price = $request->unit_price;
        $carriage = $request->carriage;
        $discounts = $request->discounts;
        $expenses = $request->expenses;
        $customers_owe_me = $request->customers_owe_me;
        $supliers_owe = $request->supliers_owe;
        $long_term_loans = $request->long_term_loans;
        $prepaid_expenses = $request->prepaid_expenses;
        $accrued_expenses = $request->accrued_expenses;
        $partners = $request->partners;
        $drawing = $request->drawing;
        $investment = $request->investment;





    }
}
