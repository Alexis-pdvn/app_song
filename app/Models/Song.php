<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $table = "songs"; 

    public function user() {
        // SELECT * FRom user WHERE users.id=$this->user_id
        return $this->belongsTo("App\Models\User", "user_id");
    }
}
