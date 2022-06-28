<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperCompany
 */
class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'description'
    ];

    public $timestamps = false;

    public function lines(): BelongsToMany
    {
        return $this->belongsToMany(Line::class);
    }
}
