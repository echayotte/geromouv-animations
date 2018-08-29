<?php
namespace App\Http\Controllers;

use App\Member;
use App\Pension;
use App\Mutual;
use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon; //to have the date on the datepicker
use Session;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();

        return view('pages.member.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pensions = Pension::all();
        $mutuals = Mutual::all();
        $activities = Activity::all();

        // return the view and pass the 3 variables to the view
        return view('pages.member.create',compact('pensions','mutuals','activities'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // verify with options the inputs before storing
        request()->validate([
            // form's type="name"
            'member-lastname' => 'required | string',
            'member-firstname' => 'required | string',
            'member-birthday' => 'required',
            'member-gender' => 'required',
            'member-address' => 'required | string',
            'member-zipcode' => 'required | integer',
            'member-city' => 'required | string',
            'member-email' => 'required | email',
            'member-primaryphone' => 'required | string',
            'member-mutual' => 'required | integer',
            'member-pension' => 'required | integer',
            'member-activities' => 'required'
        ]);

        // create a new member and save it in the db
        $member = Member::create([
            // db column => requets(form's type="name")
            'lastname' => request('member-lastname'),
            'firstname' => request('member-firstname'),
            // with this put protected $dates in the Member's Model to work
            'birthday' => Carbon::createFromFormat('d/m/Y', request('member-birthday'))->format('Y-m-d'),
            'gender' => request('member-gender'),
            'address' => request('member-address'),
            'zipcode' => request('member-zipcode'),
            'city' => request('member-city'),
            'email' => request('member-email'),
            'primaryphone' => request('member-primaryphone'),
            'secondaryphone' => request('member-secondaryphone'),
            'mutual_id' => request('member-mutual'),
            'pension_id' => request('member-pension')
            ]);

        /* store checkboxes in the pivot table 'activity_member'
        *   with function activities() from Member's Model.
        *   sync means delete all in the table and recreate it
        */
        $member->activities()->sync($request->get('member-activities'));

        Session::flash('status', 'Vos informations ont bien été enregistrées dans la base de données!');
        // redirect to => /member/{id}
        // Laravel eloquent nows it need to search the id in the members' table with $member
        return Redirect::route('member.show', $member);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        $formatDate = Carbon::parse($member->birthday)->format('d/m/Y');
        
        return view('pages.member.show',compact('member','formatDate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        $activities = Activity::all();
        $pensions = Pension::all();
        $mutuals = Mutual::all();
        $formatDate = Carbon::parse($member->birthday)->format('d/m/Y');

        return view('pages.member.edit', compact('member', 'activities', 'pensions', 'mutuals', 'formatDate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        request()->validate([
            'member-lastname'=> 'required | string',
            'member-firstname'=> 'required | string',
            'member-birthday'=> 'required',
            'member-gender'=> 'required',
            'member-address'=> 'required | string',
            'member-zipcode'=> 'required | integer',
            'member-city'=> 'required | string',
            'member-email'=> 'required | email'  ,
            'member-primaryphone'=> 'required | string',
            'member-mutual'=> 'required | integer',
            'member-pension'=> 'required | integer',
            'member-activities'=> 'required'
        ]);

        // update the member's inputs and save them in the db
        $member->update([
            'lastname' => request('member-lastname'),
            'firstname' => request('member-firstname'),
            'gender' => request('member-gender'),
            'birthday' => Carbon::createFromFormat('d/m/Y', request('member-birthday'))->format('Y-m-d'),
            'address' => request('member-address'),
            'zipcode' => request('member-zipcode'),
            'city' => request('member-city'),
            'email' => request('member-email'),
            'primaryphone' => request('member-primaryphone'),
            'secondaryphone' => request('member-secondaryphone'),
            'mutual_id' => request('member-mutual'),
            'pension_id' => request('member-pension')
        ]);
        $member->activities()->sync($request->get('member-activities'));

        Session::flash('status', 'Vos informations ont bien été modifiées dans la base de données!');
        return Redirect::route('member.show', $member);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
