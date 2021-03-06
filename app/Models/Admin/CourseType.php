<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class CourseType extends Model implements Auditable

{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['id', 'name', 'description', 'type'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
