<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{
    use HasFactory;
    public $table = "employee";
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'company',
        'phone'
    ];
}
