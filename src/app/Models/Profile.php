<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profiles extends Model
{
    use HasFactory;

    protected $table = 'profile';

    protected $fillable = [
        'user_id',
        'postcode',
        'address',
        'building',
        'image',
    ];

    
    public $timestamps = true;

    public function user()
{
    return $this->belongsTo(User::class);
}

}


