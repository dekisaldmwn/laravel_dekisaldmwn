<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pasien extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rumahsakit(): BelongsTo
    {
        return $this->belongsTo(Rumahsakit::class);
    }
}
