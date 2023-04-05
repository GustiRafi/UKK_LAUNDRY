<?php

namespace App\Observers;

use App\Models\user;
use App\Models\log;
use Illuminate\Support\Facades\Auth;


class userObserver
{
    /**
     * Handle the user "created" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function created(user $user)
    {
        log::create([
            'model' => 'User',
            'action' => 'Create',
            'log' => 'user baru di tambahkan',
            'id_user' => Auth::user()->id,
        ]);
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function updated(user $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function deleted(user $user)
    {
        log::create([
            'model' => 'User',
            'action' => 'delete',
            'log' => 'user '.$user->name.' dihapus oleh ' .Auth::user()->name,
            'id_user' => Auth::user()->id,
        ]);
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function restored(user $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\Models\user  $user
     * @return void
     */
    public function forceDeleted(user $user)
    {
        //
    }
}
