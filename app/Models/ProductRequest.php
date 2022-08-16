<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductRequest extends Model
{
    public $table = 'product_requests';
    public $fillable = [
        'product_id',
        'user_id',
        'name',
        'email',
        'phone',
        'message',
        'owner_id',
        'is_approved'
    ];

    /**
     * Get the user that owns the ProductRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Store::class, 'product_id');
    }

    use HasFactory;
}
