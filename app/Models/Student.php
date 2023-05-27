<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Utils\Casts\DateFormate;
use App\Utils\Files;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];
    protected $appends =["image"];
    public function getImageAttribute()
    { 
        $image = (new Files(self::class,'first'))->get($this->id) ;
        return !empty($image->url) ? asset($image->url) :  asset(Files::IMAGE_PATH) ;
    }  
    protected $casts = [
        'created_at' => DateFormate::class,
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public function exam_results()
    {
        return $this->hasMany(ExamResult::class);
    } 
}
