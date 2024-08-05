<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Calle extends Model
{
    use HasFactory;

    protected $table = 'calles';

    protected $fillable = ['nombre', 'ciudad_id'];

    public function ciudad() : BelongsTo {
        return $this->belongsTo(Ciudad::class);
    }
}
