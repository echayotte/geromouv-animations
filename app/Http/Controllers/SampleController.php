<?php

namespace App\Http\Controllers;

use App\PlanningAnimation;
use App\Http\Requests;
use Carbon\Carbon;

class SampleController extends Controller
{

    /**
     * @var PlanningAnimation
     */
    private $planningAnimation;

    /**
     * @param PlanningAnimation $planningAnimation
     */
    public function __construct(PlanningAnimation $planningAnimation)
    {
        $this->planningAnimation = $planningAnimation;
    }

    public function calendar()
    {
        $staticAnimation = \Calendar::event(
            'Today\'s Sample',
            true,
            Carbon::today()->setTime(0, 0),
            Carbon::today()->setTime(23, 59),
            null,
            [
                'color' => '#FF0',
                'url' => 'http://google.com',
            ]
        );

        $databaseEvents = $this->planningAnimation->all();

        $planning = \Calendar::addEvent($staticAnimation)->addEvents($databaseEvents);

        return view('plannning', compact('planning'));
    }

}
