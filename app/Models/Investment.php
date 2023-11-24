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

    public function calculateReturn()
    {
        $percentage = 0;

        switch ($this->plan_type) {
            case 'basic':
                $percentage = 0.30;
                break;
            case 'gold':
                $percentage = 0.50;
                break;
            case 'masters':
                $percentage = 0.80;
                break;
            case 'premium':
                $percentage = 1.00;
                break;
            // Add more cases if needed...

            default:
                // Handle unsupported plan_type
                return null;
        }

        // Calculate return
        $return = $this->deposit_amount * $percentage;

        return [
            'percentage' => $percentage * 100,
            'return' => $return,
        ];
    }
}
