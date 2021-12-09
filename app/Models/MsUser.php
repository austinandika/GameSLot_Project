<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsUser extends Model
{
    use HasFactory;

    public function role(){
        return $this->belongsTo(MsRole::class);
    }

    public function transaction(){
        return $this->hasMany(TrTransaction::class);
    }
}
