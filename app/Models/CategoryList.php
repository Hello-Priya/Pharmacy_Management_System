<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryList extends Model
{
    use HasFactory;
    protected $fillable=['SL_NO','Name','Type','Amount','In_Stock','Stock_Out'];
}
