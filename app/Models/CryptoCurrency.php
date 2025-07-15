<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CryptoCurrency extends Model
{
    protected $guarded = [];

    public function transaction()
    {
        return $this->hasMany(Transactions::class);
    }
}
