<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Person;

class PersonController extends Controller
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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $persons = Person::all();
        return view('people_list')->with('persons', $persons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('new_person');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $person = Person::find($id);
        return view('person_profile')->with('person', $person);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $person = Person::find($id);
        return view('edit_person')->with('person', $person);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([ 'uid' => 'required', 'fname' => 'required', 'sname', 'lname' => 'required', 'email' => 'required|email', 'phone', 'govid', 'gender', 'dob' ]);

          $person = Person::find($id);
          $person->uid = $request->get('uid');
          $person->fname = $request->get('fname');
          $person->sname = $request->get('sname');
          $person->lname = $request->get('lname');
          $person->email = $request->get('email');
          $person->phone = $request->get('phone');
          $person->govid = $request->get('govid');
          $person->gender = $request->get('gender');
          $person->dob = $request->get('dob');
          $person->save();

          return redirect('persons')->with('status', 'Person has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $person = Person::findOrFail($id);

        $person->delete();

        return redirect('persons')->with('status', 'Person has been deleted Successfully');
    }



    public function new(Request $request)
    {
        $this->validate($request, [ 'uid' => 'required', 'fname' => 'required', 'sname', 'lname' => 'required', 'email' => 'required|email', 'phone', 'govid', 'gender', 'dob' ]);
            Person::create($request->all());

            return redirect('persons')->with('status', 'You have successfully added a new person');
    }
}
