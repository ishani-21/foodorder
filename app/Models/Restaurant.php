<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'address',
        'image',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];
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

    // public function category()
    // {
    //     return $this->belongsTo(Restaurant::class,'restaurants_id','id');
    // }

    // Restaurant::with('category:id,name')
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'name'
    //         ]
    //     ];
    // }
}
