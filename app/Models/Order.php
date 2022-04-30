<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Satu user bisa memiliki banyak order.
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
