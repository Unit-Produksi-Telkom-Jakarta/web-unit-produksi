<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'status',
        'pic',
        'email',
        'phone_number',
        'address',
    ];

    public function order()
    {
        $this->hasMany(Order::class,'employee_id');
    }
}
