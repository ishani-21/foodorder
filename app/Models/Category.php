<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categorys';
    protected $fillable = [
        'id',
        'restaurants_id',
        'name',
        'image',
    ];
    public function restaurent()
    {
        return $this->hasOne(Restaurant::class, 'id', 'restaurants_id')->select('id', 'name');
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
