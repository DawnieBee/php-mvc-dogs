<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Dog extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name', 
        'age', 
        'image', 
        'sex', 
        'breed', 
        'size', 
        'intact', 
        'abstract', 
        'description', 
        'category_id'
    ];

    /**
     * Define relationship between two tables
     * @return Relationship Eloquent relationship
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
