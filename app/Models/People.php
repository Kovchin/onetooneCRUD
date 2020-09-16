<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phone;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'phone_id'
    ];

    public function phones(){
        return $this->belongsTo(Phone::class,'phone_id');
    }
}
