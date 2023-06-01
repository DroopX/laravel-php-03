<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    use HasFactory;
    protected $table = 'album';
    protected $fillable = ['nome', 'artista', 'ano', 'duracao', 'idioma'];

    protected $primaryKey = 'id';

    protected $attributes = [
        'nome' => ''
    ];

    public function faixas(): HasMany
    {
        return $this->hasMany(Faixa::class);
    }
}
