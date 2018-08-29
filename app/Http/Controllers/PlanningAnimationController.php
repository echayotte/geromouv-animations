<?php

namespace App\Http\Controllers;

use App\PlanningAnimation;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class PlanningAnimationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // dd(PlanningAnimation::all());
        $planningAnimations = PlanningAnimation::all();

        return view('pages.planning_animation.index', compact('planningAnimations'));

    }

   /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.planning_animation.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        request()->validate([
            // form's type="name"
            'planning-animation-title' => 'required',
            'planning-animation-start' => 'required',
            'planning-animation-end' => 'required',
            'planning-animation-day' => 'required',
        ]);

        $planningAnimation = PlanningAnimation::create([
            'title' => request('planning-animation-title'),
            'start' => request('planning-animation-start'),
            'end' => request('planning-animation-end'),
            'is_all_day' => request('planning-animation-day')
        ]);

        return Redirect::route('planning_animation.index')->with('message', 'L\'animation a bien été crée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  PlanningAnimation  $planningAnimation
     * @return Response
     */
    public function show(PlanningAnimation $planningAnimation)
    {
        return view('pages.planning_animation.show', compact('planningAnimation'));
    }

    /**
     * Show the form for editing the specified resource
     * 
     * @param  PlanningAnimation  $planningAnimation
     * @return Response
     * */
    public function edit(PlanningAnimation $planningAnimation)
    {
        return view('pages.planning_animation.edit', compact('planningAnimation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  PlanningAnimation  $planningAnimation
     * @return Response
     * */
    public function update(Request $request, PlanningAnimation $planningAnimation)
    {
        request()->validate([
            // form's type="name"
            'planning-animation-title' => 'required',
            'planning-animation-start' => 'required',
            'planning-animation-end' => 'required',
            'planning-animation-day' => 'required',
        ]);

        $planningAnimation->update([
            'title' => request('planning-animation-title'),
            'start' => request('planning-animation-start'),
            'end' => request('planning-animation-end'),
            'is_all_day' => request('planning-animation-day')
        ]);

        return Redirect::route('planning_animation.index')->with('message', 'L\'animation a bien été modifiée.');
    }

    /**
     * Remove the specified resource from storage 
     *
     * @param  PlanningAnimation  $planningAnimation
     * @return Response
     * */
    public function destroy(PlanningAnimation $planningAnimation)
    {
        $planningAnimation->delete();

        return Redirect::route('planning_animation.index')->with('message', 'L\'animation a bien été supprimée.');
    }
}
