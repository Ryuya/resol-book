<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Answer extends Model
{
    //
    protected $fillable = [
        "title",
        "description",
    ];

    /**
     * @return HasOne
     */
    public function bestAnswer(): HasOne
    {
        return $this->hasOne(BestAnswer::class);
    }
    /**
     * @return BelongsTo
     */
    public function trouble(): BelongsTo
    {
        return $this->belongsTo(Trouble::class);
    }
    /**
     * @return HasMany
     */
    public function urls(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}
