<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{

    protected $guarded = [];

    public function forum() {

        return $this->belongsTo(Forum::class);
    }

    public function user() {

        return $this->belongsTo(User::class);
    }

}
