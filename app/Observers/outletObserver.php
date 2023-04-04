<?php

namespace App\Observers;

use App\Models\outlet;

class outletObserver
{
    /**
     * Handle the outlet "created" event.
     *
     * @param  \App\Models\outlet  $outlet
     * @return void
     */
    public function created(outlet $outlet)
    {
        //
    }

    /**
     * Handle the outlet "updated" event.
     *
     * @param  \App\Models\outlet  $outlet
     * @return void
     */
    public function updated(outlet $outlet)
    {
        //
    }

    /**
     * Handle the outlet "deleted" event.
     *
     * @param  \App\Models\outlet  $outlet
     * @return void
     */
    public function deleted(outlet $outlet)
    {
        //
    }

    /**
     * Handle the outlet "restored" event.
     *
     * @param  \App\Models\outlet  $outlet
     * @return void
     */
    public function restored(outlet $outlet)
    {
        //
    }

    /**
     * Handle the outlet "force deleted" event.
     *
     * @param  \App\Models\outlet  $outlet
     * @return void
     */
    public function forceDeleted(outlet $outlet)
    {
        //
    }
}
