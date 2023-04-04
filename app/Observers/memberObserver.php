<?php

namespace App\Observers;

use App\Models\member;

class memberObserver
{
    /**
     * Handle the member "created" event.
     *
     * @param  \App\Models\member  $member
     * @return void
     */
    public function created(member $member)
    {
        //
    }

    /**
     * Handle the member "updated" event.
     *
     * @param  \App\Models\member  $member
     * @return void
     */
    public function updated(member $member)
    {
        //
    }

    /**
     * Handle the member "deleted" event.
     *
     * @param  \App\Models\member  $member
     * @return void
     */
    public function deleted(member $member)
    {
        //
    }

    /**
     * Handle the member "restored" event.
     *
     * @param  \App\Models\member  $member
     * @return void
     */
    public function restored(member $member)
    {
        //
    }

    /**
     * Handle the member "force deleted" event.
     *
     * @param  \App\Models\member  $member
     * @return void
     */
    public function forceDeleted(member $member)
    {
        //
    }
}
