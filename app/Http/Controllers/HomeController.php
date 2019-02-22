<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

use \App\display;
use App\Patient;
use Illuminate\Support\Facades\DB;


use Auth;
use Illuminate\Support\Facades\Hash;

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

    public function print($id)
    {

        $patient = Patient::findOrFail($id);
        $mother = \App\Mother::find($patient->mother_id)->first();
        $father = \App\Father::find($patient->father_id)->first();
        return view('layouts.print', compact('patient', 'mother', 'father'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        return view('home');
    }

    public function create()
    {
        return view('layouts.create');
    }

    public function save(Request $req)
    {

        try {
            DB::connection()->getPdo()->beginTransaction();
            $this->validate($req, [
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'date_of_birth' => 'required|date|before:today',
                'place_of_birth' => 'required|max:255',
                'email' => 'required|max:255',
                'sex' => 'required|max:255',
                'blood_group' => 'required|max:255',
                'contact' => 'required|max:255',
                'address' => 'required|max:255',
                'education_level' => 'required|max:255',
                'area_of_intrest' => 'required|max:255',
                'undergone_training' => 'required|max:255',


            ]);

            //dd($req);




            $patient = new Patient;
            $patient->first_name = $req['first_name'];
            $patient->last_name = $req['last_name'];
            $patient->date_of_birth = $req['date_of_birth'];
            $patient->place_of_birth = $req['place_of_birth'];
            $patient->email = $req['email'];

            $patient->sex = $req['sex'];
            $patient->blood_group = $req['blood_group'];
            $patient->contact = $req['contact'];
            $patient->address = $req['address'];
            $patient->education_level = $req['education_level'];
            $patient->area_of_intrest = $req['area_of_intrest'];
            $patient->undergone_training = $req['undergone_training'];


            $patient->save();
            //  $patient->fathers()->attach($father);
            //$patient->mothers()->attach($mother);

            DB::connection()->getPdo()->commit();

            //    return $father;

            //

            return redirect(route('display'));

        } catch (Exception $e) {
            DB::connection()->getPdo()->rollback();
            return redirect()->back()->with('error', 'Error encountered saving the data');
        }

    }

    public function display()
    {
        $records = Patient::all();
        $no = 1;
        return view('layouts.display', compact('records', 'no'));
    }

    public function register()
    {

        if (!Auth::user()->admin) {
            return back();
        }

        return view('auth._register');
    }

    public function details($id)
    {
        $patient = Patient::findOrFail($id);

        return view('layouts.details', compact('patient', 'mother', 'father'));
    }

    public function update(Request $req)
    {
        $patient = Patient::find($req->id);



        $updates = $req->all();

        $patient->first_name = $updates['first_name'];
        $patient->last_name = $updates['last_name'];
        $patient->date_of_birth = $updates['date_of_birth'];
        $patient->place_of_birth = $updates['place_of_birth'];
        $patient->email = $updates['email'];
        
        $patient->sex = $updates['sex'];
        $patient->blood_group = $updates['blood_group'];
        $patient->contact = $updates['contact'];
        $patient->address = $updates['address'];
        $patient->education_level = $updates['education_level'];
        $patient->area_of_intrest = $updates['area_of_intrest'];
        $patient->undergone_training = $updates['undergone_training'];




        $admin_password = \Illuminate\Support\Facades\Auth::user()->getAuthPassword();

        $confirmation_password = $updates['c_password'];


        if (Hash::check($confirmation_password, $admin_password)) {
            if ($patient->update()) {
                $msg = 'Data Successfully Updated!';
                return redirect()->back()->with('msg', $msg);
            } else {
                $msg = 'Error encountered updating the data';
                return redirect()->back()->with('msg', $msg);
            }
        } else {
            $msg = 'Incorrect Confirmation Password, Please try again';
            return redirect()->back()->with('msg', $msg);
        }




    }

    public function destroy()
    {
        return 'This is the delete link';
    }
    public function search(Request $request){
    $keyword=$request->input('search');
    $patient=Patient::where('first_name','LIKE','%'.$keyword.'%')->get();
    return View('layouts.search',['patient'=>$patient]);
  }

}
