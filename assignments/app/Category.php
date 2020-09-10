<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Define relationship between two tables
     * @return Relationship Eloquent relationship
     */
    public function dogs()
    {
        return $this->hasMany(Dog::class);
    }
}
