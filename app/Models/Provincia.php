<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincias';

    protected $fillable = ['nombre', 'region_id'];

    public function region() : BelongsTo {
        return $this->belongsTo(Region::class);
    }

    public function ciudades() : HasMany {
        return $this->hasMany(Ciudad::class);
    }
}
