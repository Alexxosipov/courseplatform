<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CourseCategory
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|CourseCategory[] $children
 * @property-read int|null $children_count
 * @method static \Illuminate\Database\Eloquent\Builder|CourseCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseCategory whereParentId($value)
 * @mixin \Eloquent
 */
class CourseCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'parent_id'];

    public function parent()
    {
        $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
