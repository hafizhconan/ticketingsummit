<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    protected $table = 'buyers';

    protected $fillable = ['nama', 'no_hp', 'from', 'email', 'username', 'username_updated', 'created_at', 'updated_at'];
}
