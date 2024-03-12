<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'category_created_dtm', 'category_updated_dtm', 
    'category_created_by','category_updated_by','category_status'];

}
