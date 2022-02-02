<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    public $table = 'foods';
    public function restaurent()
    {
        // return $this->hasOne(InterestCategory::class, 'id', 'interest_category_id')->select('id', 'interest_category_name');
        return $this->hasOne(Restaurant::class,'id','restaurants_id')->select('id','name');
    }
    public function category()
    {
        // return $this->hasOne(InterestCategory::class, 'id', 'interest_category_id')->select('id', 'interest_category_name');
        return $this->hasOne(Category::class,'id','categorys_id')->select('id','name');
    }
    public function subcategory()
    {
        // return $this->hasOne(InterestCategory::class, 'id', 'interest_category_id')->select('id', 'interest_category_name');
        return $this->hasOne(Subcategory::class,'id','subcategorys_id')->select('id','name');
    }

    public function setSlugAttribute()
    {
        $this->attributes['slug'] = \Str::slug($this->name, "-");
    }
    // public function sluggable(){
    //     return [
    //         'slug' => [
    //             'source' => 'name',
    //         ]
    //     ];
    // }
}
