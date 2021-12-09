<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsGame extends Model
{
    use HasFactory;

    public function transactionDetail(){
        return $this->hasMany(TrTransactionDetail::class);
    }

    public function gameGenre(){
        return $this->belongsTo(MsGameGenre::class);
    }
}
