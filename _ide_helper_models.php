<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Line[] $lines
 * @property-read int|null $lines_count
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperCompany {}
}

namespace App\Models{
/**
 * App\Models\Line
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Company[] $companies
 * @property-read int|null $companies_count
 * @method static \Illuminate\Database\Eloquent\Builder|Line newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Line newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Line query()
 * @method static \Illuminate\Database\Eloquent\Builder|Line whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Line whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Line whereName($value)
 * @mixin \Eloquent
 */
	class IdeHelperLine {}
}

namespace App\Models{
/**
 * App\Models\Station
 *
 * @property int $id
 * @property int $line_id
 * @property int|null $arrival_to_next_station
 * @property int|null $line_order
 * @property int|null $transfer_to_line_id
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Line|null $lines
 * @method static \Illuminate\Database\Eloquent\Builder|Station newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Station newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Station query()
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereArrivalToNextStation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereLineOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereTransferToLineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Station whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperStation {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

