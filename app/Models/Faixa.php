<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Faixa extends Model
{
    use HasFactory;
    protected $table = 'Faixa';
    protected $fillable = ['nome', 'compositores', 'album_id', 'duracao', 'idioma', 'ordem'];

    protected $attributes = [
        'nome' => ''
    ];

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }

}
