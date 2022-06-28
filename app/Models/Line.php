<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperLine
 */
class Line extends Model
{
    use HasFactory;

    protected $table = 'lines';

    protected $fillable = [
        'name',
        'description'
    ];

    public $timestamps = false;

    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class);
    }
}
