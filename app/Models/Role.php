<?php

namespace App\Models;

use App\Helpers\Constant;
use Spatie\Permission\Guard;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends SpatieRole
{

    public function scopeSkipAdmin($query)
    {
        return $query->where('name', '!=', Constant::ADMIN);
    }

    public static function create(array $attributes = [])
    {
        $attributes['guard_name'] = $attributes['guard_name'] ?? Guard::getDefaultName(static::class);
        return static::query()->create($attributes);
    }
    use HasFactory;
}
