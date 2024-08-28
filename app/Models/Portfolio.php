<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolios';
    protected $fillable = ['image', 'id_workshop'];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class, 'id_workshop');
    }
}
