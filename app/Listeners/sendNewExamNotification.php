<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Notifications\Notification;
use App\Notifications\newExam;

use DB;

class sendNewExamNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $students = DB::table('students')->select(
            'users.*',
            'students.*'
        )
        ->join('users', 'users.schoolNo', '=', 'students.studentNo')
        ->whereHas('level_id', function ($query) {
            $query->where('level_id', 1);
        })->get();

        Notification::send($students, new newExam($event->user));
    }
}
