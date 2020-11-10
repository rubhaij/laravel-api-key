<?php

namespace Ejarnutowski\LaravelApiKey\Traits;

use App\Model\User;

trait BelongsToUser
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
