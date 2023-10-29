<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pet extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function owner():BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }

    public function appointmets():HasMany
    {
        return $this->hasMany(Appointments::class);
    }
}
