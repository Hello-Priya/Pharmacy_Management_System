<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Payment extends Model
{
    use HasFactory;
    Protected $fillable=['Product_Name','Date','Amount'];
}
