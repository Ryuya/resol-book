<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Answer extends Model
{
    //
    protected $fillable = [
        "problem_id",
        "title",
        "description",
        "url",
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
    public function problem(): BelongsTo
    {
        return $this->belongsTo(Problem::class);
    }
    /**
     * @return HasMany
     */
    public function urls(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}
