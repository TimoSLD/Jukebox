<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist_song extends Model
{

    use HasFactory;

    protected $playlist = 'playlist';
        public $timestamps = false;
        protected $fillable = [
            'name', 'user_id'
        ];

    public function playlists() {
        return $this->belongsToMany('Model\Playlist', 'playlist_song');
    }

    public function songs() {
        return $this->belongsToMany('Model\Songs', 'playlist_song');
    }
}
