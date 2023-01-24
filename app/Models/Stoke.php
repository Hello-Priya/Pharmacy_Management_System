<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stoke extends Model
{
    use HasFactory;
    protected $fillable=['SL_id','Product_Name','Product_details'];
}
