<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\People;

class Phone extends Model
{
    use HasFactory;

    protected $table = 'phones';

    protected $fillable = [
      'phone'
    ];

    public function peoples(){
        $this->hasOne(People::class, 'phone_id','id');
    }
}
