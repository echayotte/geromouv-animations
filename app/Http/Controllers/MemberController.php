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

        // request()->validate([
            //     'lastname' => ['required', 'string'],
            //     'firstname' => ['required', 'string'],
            //     'birthday' => ['required'],
            //     'gender' => ['required', 'string'],
            //     'address' => ['required','string'],
            //     'zipcode' => ['required', 'integer','max:5*'],
            //     'city' => ['required','string'],
            //     'email' => ['required', 'email'],
            //     'phone' => ['required', 'string'],
            //     'cellphone' => ['required', 'string'],
            //     'mutuals_id' => ['required', 'integer'],
            //     'pensions_id' => ['required', 'integer'],
            // ]);
            
        // refactoring with => $member::create(Request::all());
        $member = Member::create([
            'lastname' => request('member-lastname'),
            'firstname' => request('member-firstname'),
            //with this put protected $dates in the Model
            'birthday' => Carbon::createFromFormat('d/m/Y', request('member-birthday'))->format('Y-m-d'),
            'gender' => request('member-gender'),
            'address' => request('member-address'),
            'zipcode' => request('member-zipcode'),
            'city' => request('member-city'),
            'email' => request('member-email'),
            'phone' => request('member-phone'),
            'cellphone' => request('member-cellphone'),
            'mutuals_id' => request('member-mutual'),
            'pensions_id' => request('member-pension')
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
        $pension = Pension::findOrFail($member->id);
        $mutual = Mutual::findOrFail($member->id);
        dd($pension, $mutual);

        return View('pages.member.create', compact('member', 'pension', 'mutual'));
        
        
        //return the view and pass the variable $member
        // return view('pages.member.show', compact('member'));
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
