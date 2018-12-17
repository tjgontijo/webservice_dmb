<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;


class Email extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['email', 'email_types_id'];

    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function emailType()
    {
        return $this->belongsTo(EmailType::class);
    }
    public function userInfos()
    {
        return $this->morphedByMany(UserInfo::class, 'class_emails');
    }
    
}