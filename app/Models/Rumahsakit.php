<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rumahsakit extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the pasien for the Rumahsakit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pasien(): HasMany
    {
        return $this->hasMany(Pasien::class);
    }
}
