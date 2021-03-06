<?php

namespace App\Observers;

use App\Models\Topic;
use App\Models\User;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class UserObserver
{
    public function creating(User $user)
    {
        //
    }

    public function updating(User $user)
    {
        //
    }

    public function deleted(User $user)
    {

        Topic::where('user_id', $user->id)->delete();
        \DB::table('replies')->where('user_id', $user->id)->delete();
    }

}