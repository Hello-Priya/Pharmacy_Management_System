<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phurchase extends Model
{
    use HasFactory;
    protected $fillable=['Id','Name','Address','Amount','Quantity'];
}
