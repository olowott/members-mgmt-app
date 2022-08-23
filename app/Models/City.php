<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['sate_id', 'name'];

    public function state()
    {
        return $this->belongsTo((state::class));
    }

    public function users()
    {

        return $this->hasMany(User::class);
    }
}
