<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MaddHatter\LaravelFullcalendar\Event;


class PlanningAnimation extends Model implements Event
{
    protected $dates = ['start', 'end'];
    protected $fillable = [
        //DB's column   
        'title',
        'start',
        'end',
        'is_all_day',
    ];

    /**
     * Get the event's ID
     *
     * @return int|string|null
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return $this->is_all_day;
    }

    // /**
    //  * Optional FullCalendar.io settings for this event
    //  *
    //  * @return array
    //  */
    // public function getEventOptions()
    // {
    //     return [
    //         'color' => $this->background_color,
    //     ];
    // }

    // // /**
    // //  * Get the background color
    // //  *
    // //  * @return array
    // //  */
    // // public function getColor()
    // // {
    // //     return [
    // //         'color' => $this->background_color,
    // //     ];
    // // }

    // /**
    //  * Get the animation
    //  *
    //  * @return enum
    //  */
    // public function getAnimation()
    // {
    //     return $this->animation;
    // }
}