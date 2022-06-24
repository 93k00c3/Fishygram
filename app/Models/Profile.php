<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable =[
        'role',
        ];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'koi.svg';
        return '/storage/' . $imagePath;
    }

}
