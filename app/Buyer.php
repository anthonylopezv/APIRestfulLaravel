<?php

namespace App;

use App\Transaction;
// Comprador
class Buyer extends User
{
    public function transactions(){
        return $this-> hasMany(Transaction::class);
    }
}
