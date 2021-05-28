<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'tracklist',
        'date_of_release'
    ];


    public function artist(){
        return $this->belongsTo('artist');
    }

}
