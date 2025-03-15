<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_id',
        'customer',
        'total',
        'payment_id',
        'status',
        'amount_paid',
        'discount',
        'change',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function payment(){
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }

    public function detail(){
        return $this->hasMany(Detail::class, 'transaction_id', 'id');
    }

    public function getTotal(){
        return $this->detail->sum('subtotal');
    }
}
