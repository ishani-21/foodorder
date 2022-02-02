<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategorys';
    protected $fillable = [
        'id',
        'categorys_id',
        'name',
        'image',
        'price',
    ];
    public function category()
    {
        // return $this->hasOne(InterestCategory::class, 'id', 'interest_category_id')->select('id', 'interest_category_name');
        return $this->hasOne(Category::class,'id','categorys_id')->select('id','name');
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
