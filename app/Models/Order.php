<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone_number',
        'address',
        'pic',
        'employee_id',
        'request',
        'start_estimation',
        'end_estimation',
        'status',
        'description',
        'price',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->user_id = auth()->user()->id;
        });
    }

    public function employee()
    {
        $this->belongsTo(Employee::class);
    }
}
