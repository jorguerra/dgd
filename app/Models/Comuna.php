<?php

namespace App\Models;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $nombre
 * @property-read Metro[]|Collection $metros
 */
class Comuna extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function metros(): HasMany
    {
        return $this->hasMany(Metro::class);
    }
}
