<?php

namespace App\Listeners;
use App\Models\User;
use App\Mail\UserMail;
use App\Events\postCreate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyUser
{
    // public $post;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
     
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\postCreate  $event
     * @return void
     */
    public function handle(postCreate $event)
    {
        $users = user::get();
        foreach($users as $user){
            if($user->email == auth()->user()->email){

            }else{
                
                Mail::to($user->email)->send(new UserMail($event->post));
            
            
            
            }
        }
    }
}
