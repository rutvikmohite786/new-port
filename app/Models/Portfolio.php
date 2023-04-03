<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Portfolio extends Model
{
    use HasFactory;
    public function techport(): HasOne
    {
        return $this->hasOne(PortTech::class,'id','port_tech_id');
    }
}
