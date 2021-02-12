<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trouble extends Model
{
    //
    protected $fillable = [
        "title",
        "description",
    ];

//    /**
//     * @return HasOneø
//     */
//    public function bestAnswer(): HasOne
//    {
//        return $this->hasMany(BestAnswer::class);
//    }
    /**
     * @return HasMany
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}
