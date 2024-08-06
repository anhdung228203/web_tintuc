<?php

namespace App\Models\Admin;

use App\Models\admin\PheDuyet;
use App\Models\User;
use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'tag_id',
        'user_id',
        'phe_duyet_id',
        'tieu_de',
        'mo_ta_ngan',
        'mo_ta',
        'luot_xem',
        'anh_dai_dien',
        'tin_noi_bat',
        'tin_moi',
        'is_show_home',
    ];

    // protected $attributes=[
    //     'is_show_home'=>,
        
    // ];
    // protected $casts=[
    //     'tin_noi_bat'=>'boolean',
    //     'tin_moi'=>'boolean',
    //     'is_show_home'=>'boolean',

    // ];
    public function views(){
        $this->luot_xem+=1;
        $this->save();
    }
    public function tag(){
        return $this->belongsTo(Tag::class);
    } 
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function phe_duyet(){
        return $this->belongsTo(PheDuyet::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
