<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperStation
 */
class Station extends Model
{
    public const DEFAULT_TIME_ARRIVAL = 0;
    public const DEFAULT_LINE_ORDER = 1;

    protected $table = 'stations';

    protected $fillable = [
        'line_id',
        'arrival_to_next_station',
        'line_order',
        'transfer_to_line_id',
        'description',
    ];

    public function lines(): BelongsTo
    {
        return $this->belongsTo(Line::class);
    }
}
