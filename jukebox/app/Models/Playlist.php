<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $playlist = 'playlist';
        public $tiemstamps = false;
        protected $filltable = [
            'name', 'user_id'
        ];
    
}
