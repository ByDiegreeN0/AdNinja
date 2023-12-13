<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\tbl_payouts_data;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserCreatedListener implements ShouldQueue
{

    use InteractsWithQueue;
   
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event)
    {
        $user = $event->user;

        $paydata = new tbl_payouts_data([
            'paydata_email' => $user->email,
            'paydata_user_name' => $user->name,
            'user_id' => $user->id,
        ]);

        $paydata->save();
    }
}
