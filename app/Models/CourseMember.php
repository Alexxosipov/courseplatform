<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CourseMember
 *
 * @property int $id
 * @property int $course_id
 * @property int $user_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMember newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMember newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMember query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMember whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMember whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMember whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseMember whereUserId($value)
 * @mixin \Eloquent
 */
class CourseMember extends Model
{
    use HasFactory;

    protected $fillable = ['team_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
