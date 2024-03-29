<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsRole extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasMany(MsUser::class);
    }
}
