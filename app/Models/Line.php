<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperLine
 */
class Line extends Model
{
    use HasFactory;

    protected $table = 'lines';

    protected $fillable = [
        'company_id',
        'name',
        'description'
    ];

    public $timestamps = false;

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function stations(): HasMany
    {
        return $this->hasMany(Station::class);
    }
}
