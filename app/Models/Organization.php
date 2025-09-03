<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'address',
        'state',
        'country',
        'postal_code',
    ];

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
