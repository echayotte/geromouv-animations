<?php
namespace App\Http\Controllers;

use App\Member;
use App\Pension;
use App\Mutual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
//to have the date on the datepicker
use Carbon\Carbon;


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
        // dd($members);

        // $mutual = Mutual::findOrFail($id);
        // $pension = Mutual::findOrFail($id);

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
        return View('pages.member.create', compact('pensions', 'mutuals'));
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
            // 'member-lastname' => ['required', 'string'],
            'member-lastname'  => 'required | string',
            'member-firstname' => 'required | string',
            'member-birthday'  => 'required',
            'member-gender'    => 'required',
            'member-address'   => 'required | string',
            'member-zipcode'   => 'required | integer',
            'member-city'      => 'required | string',
            'member-email'     => 'required | email',
            // 'member-phone'     => 'string',
            'member-cellphone' => 'required | string',
            'member-mutual'    => 'required | integer',
            'member-pension'   => 'required | integer'
        ]);
            
        $member = Member::create([
            //DB column => form's type=name
            'lastname'   => request('member-lastname'),
            'firstname'  => request('member-firstname'),
            //with this put protected $dates in the Model
            'birthday'   => Carbon::createFromFormat('d/m/Y', request('member-birthday'))->format('Y-m-d'),
            'gender'     => request('member-gender'),
            'address'    => request('member-address'),
            'zipcode'    => request('member-zipcode'),
            'city'       => request('member-city'),
            'email'      => request('member-email'),
            'phone'      => request('member-phone'),
            'cellphone'  => request('member-cellphone'),
            'mutual_id'  => request('member-mutual'),
            'pension_id' => request('member-pension')
        ]);
        // redirect to => /member/{id} because Laravel nows it need to serach the id in the members table
        return Redirect::route('member.show', $member)->with('status', 'Vos informations ont été enregistrées dans la base de données!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        $formatDate = \Carbon\Carbon::parse($member->birthday)->format('d/m/Y');
         // return the view and pass the variable $member
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
        //
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
        //
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
