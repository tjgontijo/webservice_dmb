<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class UserPhone extends Model
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['phone_id', 'user_id'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
