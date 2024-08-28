<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $table = 'workshops';
    protected $fillable = ['image', 'name', 'location', 'description', 'isLimaduajaya'];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'id_workshop');
    }

}
