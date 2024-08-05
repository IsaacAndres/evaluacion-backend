<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'ciudades';

    protected $fillable = ['nombre', 'provincia_id'];

    public function provincia() : BelongsTo {
        return $this->belongsTo(Provincia::class);
    }

    public function calles() : HasMany {
        return $this->hasMany(Calle::class);
    }
}
