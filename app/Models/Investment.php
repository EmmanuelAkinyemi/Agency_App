<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_email',
        'plan_type',
        'deposit_amount',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_email', 'email');
    }

   
}
