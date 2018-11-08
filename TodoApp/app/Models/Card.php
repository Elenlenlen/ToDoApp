<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'priority', 'done', 'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       //
    ];

    protected $casts = [
        'priority' => 'boolean',
        'done' => 'boolean'
      ];
}
