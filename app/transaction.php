<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
        'jenis_tiket','id_ticket','id_buyer','id_user',
    ];

}
