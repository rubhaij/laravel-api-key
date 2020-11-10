<?php

namespace Ejarnutowski\LaravelApiKey\Traits;

use Ejarnutowski\LaravelApiKey\Models\ApiKey;

trait HasApiKeys
{
    public function apiKeys()
    {
        return $this->hasMany(ApiKey::class);
    }
}
