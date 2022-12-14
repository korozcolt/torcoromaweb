<?php

namespace App\Observers;

use App\Mail\SupportMail;
use App\Models\Support;

class SupportObserver
{
    /**
     * Handle the Support "created" event.
     *
     * @param  \App\Models\Support  $support
     * @return void
     */
    public function created(Support $support)
    {
        $this->sendMail($support, SupportMail::class);
    }

    /**
     * Handle the Support "updated" event.
     *
     * @param  \App\Models\Support  $support
     * @return void
     */
    public function updated(Support $support)
    {
        $this->sendMail($support, SupportMail::class);
    }

    /**
     * Handle the Support "deleted" event.
     *
     * @param  \App\Models\Support  $support
     * @return void
     */
    public function deleted(Support $support)
    {
        //
    }

    /**
     * Handle the Support "restored" event.
     *
     * @param  \App\Models\Support  $support
     * @return void
     */
    public function restored(Support $support)
    {
        //
    }

    /**
     * Handle the Support "force deleted" event.
     *
     * @param  \App\Models\Support  $support
     * @return void
     */
    public function forceDeleted(Support $support)
    {
        //
    }

    private function sendMail(Support $support, $mailable)
    {
        $user = Support::findOrFail($support->id)->first();
        
        \Mail::to($user->email)->send(new $mailable($support));
    }
}