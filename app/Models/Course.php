<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Course
 *
 * @property int $id
 * @property int|null $team_id
 * @property int $type_id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $uri
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CourseCategory[] $categories
 * @property-read int|null $categories_count
 * @property-read \App\Models\Team|null $team
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUri($value)
 * @mixin \Eloquent
 */
class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'uri',
        'is_active',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function categories()
    {
        return $this->belongsToMany(CourseCategory::class);
    }
}
