<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrTransactionDetail extends Model
{
    use HasFactory;

    public function transaction(){
        return $this->belongsTo(TrTransaction::class);
    }

    public function game(){
        return $this->belongsTo(MsGame::class);
    }
}
