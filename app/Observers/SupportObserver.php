<?php

namespace App\Observers;

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
        //
    }

    /**
     * Handle the Support "updated" event.
     *
     * @param  \App\Models\Support  $support
     * @return void
     */
    public function updated(Support $support)
    {
        //
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
}
