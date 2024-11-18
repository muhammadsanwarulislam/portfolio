<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

trait LogsActivityTrait
{
    public function logActivity($description)
    {
        DB::table('logs')->insert([
            'issue_id'       => auth()->id(),
            'action'         => $description,
            'performed_by'   => Auth::user()->id,
            'created_at'     => now(),
        ]);
    }
}
