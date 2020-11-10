<?php

namespace Ejarnutowski\LaravelApiKey\Traits;

use Ejarnutowski\LaravelApiKey\Models\ApiKey;

trait BelongsToUser
{
    public function apiKeys()
    {
        return $this->hasMany(ApiKey::class);
    }
}
