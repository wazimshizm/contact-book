<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Contact
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $mobile
 * @property string|null $email
 * @property string|null $post_code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Contact newModelQuery()
 * @method static Builder|Contact newQuery()
 * @method static Builder|Contact query()
 * @method static Builder|Contact whereCreatedAt($value)
 * @method static Builder|Contact whereEmail($value)
 * @method static Builder|Contact whereFirstName($value)
 * @method static Builder|Contact whereId($value)
 * @method static Builder|Contact whereLastName($value)
 * @method static Builder|Contact whereMobile($value)
 * @method static Builder|Contact wherePostCode($value)
 * @method static Builder|Contact whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Contact extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at', 'created_at'];

    protected $fillable = ['first_name', 'last_name', 'mobile', 'email', 'post_code'];
}
