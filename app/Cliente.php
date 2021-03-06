<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    // use HasFactory;

    protected $fillable = [
        'id_persona',
    ];

    public function personas()
    {
        return $this->belongsTo('App\Personas', 'id_persona' . 'id');
    }}
