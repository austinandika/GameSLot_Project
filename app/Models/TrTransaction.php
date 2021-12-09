<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrTransaction extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(MsUser::class);
    }

    public function transactionDetail(){
        return $this->hasMany(TrTransactionDetail::class);
    }
}
