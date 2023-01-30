<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $codigo
 * @property string $entidad
 * @property string $nombre
 * @property string $direccion
 * @property int $id_comuna
 * @property-read Comuna $comuna
 * @property string $horario
 * @property float $este
 * @property float $norte
 * @property float $longitud
 * @property float $latitud
 */
class Metro extends Model
{
    use HasFactory;

    protected $fillable = ['codigo','entidad','nombre','direccion','id_comuna','horario','este','norte','longitud','latitud'];

    public function comuna(): BelongsTo
    {
        return $this->belongsTo(Comuna::class,'id_comuna');
    }
}
