<?php

namespace App\Observers;

use App\Models\paket;

class paketObserver
{
    /**
     * Handle the paket "created" event.
     *
     * @param  \App\Models\paket  $paket
     * @return void
     */
    public function created(paket $paket)
    {
        //
    }

    /**
     * Handle the paket "updated" event.
     *
     * @param  \App\Models\paket  $paket
     * @return void
     */
    public function updated(paket $paket)
    {
        //
    }

    /**
     * Handle the paket "deleted" event.
     *
     * @param  \App\Models\paket  $paket
     * @return void
     */
    public function deleted(paket $paket)
    {
        //
    }

    /**
     * Handle the paket "restored" event.
     *
     * @param  \App\Models\paket  $paket
     * @return void
     */
    public function restored(paket $paket)
    {
        //
    }

    /**
     * Handle the paket "force deleted" event.
     *
     * @param  \App\Models\paket  $paket
     * @return void
     */
    public function forceDeleted(paket $paket)
    {
        //
    }
}
