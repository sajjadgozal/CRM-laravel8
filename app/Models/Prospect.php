<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCreatedTimeAttribute()
    {
        return date( 'F d , Y @ h:i:s' ,strtotime($this->created_at));
    }
    public function getTimeAttribute()
    {
        return strtotime($this->created_at);
    }
}
