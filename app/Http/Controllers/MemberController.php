<?php
namespace App\Http\Controllers;

use App\Member;
use App\Pension;
use App\Mutual;
use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
//to have the date on the datepicker
use Carbon\Carbon;
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

        return View(
            'pages.member.create',
            compact(
                'pensions',
                'mutuals',
                'activities'
            )
        );
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            //Form's type=name
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
            //DB column => form's type=name
            'lastname' => request('member-lastname'),
            'firstname' => request('member-firstname'),
            //with this put protected $dates in the Model
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

        // store checkboxes in the pivot table activity_member
        $member->activities()->sync($request->get('member-activities'));

        Session::flash('status', 'Vos informations ont bien été enregistrées dans la base de données!');
        // redirect to => /member/{id} because Laravel nows it need to search the id in the members' table
        return Redirect::route('member.show', $member);
        // return Redirect::route('member.show', $member)->with('status', 'Vos informations ont bien été enregistrées dans la base de données!');
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
         // return the view and pass the variables $member and $formatDate
        return view('pages.member.show', compact('member','formatDate'));
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
            //Form's type=name
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



        // $member->lastname = request('member-lastname');
        // $member->firstname = request('member-firstname');
        // $member->gender = request('member-gender');
        // $member->birthday = Carbon::createFromFormat('d/m/Y', request('member-birthday'))->format('Y-m-d');
        // $member->address = request('member-address');
        // $member->zipcode = request('member-zipcode');
        // $member->city = request('member-city');
        // $member->email = request('member-email');
        // $member->primaryphone = request('member-primaryphone');
        // $member->secondaryphone = request('member-secondaryphone');
        // $member->mutual_id = request('member-mutual');
        // $member->pension_id = request('member-pension');
        // // store checkboxes in the pivot table activity_member
        // $member->activities()->sync($request->get('member-activities'));


        //  $member->save();

        Session::flash('status', 'Vos informations ont bien été modifiées dans la base de données!');
        // redirect to => /member/{id} because Laravel nows it need to search the id in the members table
        return Redirect::route('member.show', $member);
        // return Redirect::route('member.show', $member)->with('status', 'Vos informations ont bien été enregistrées dans la base de données!');

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
