<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'mo_ta',
        'hinh_anh'
    ];
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
