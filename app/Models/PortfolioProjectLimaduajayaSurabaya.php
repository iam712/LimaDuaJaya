<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioProjectLimaduajayaSurabaya extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'projectlimaduajayasurabaya_id'];

    public function projectLimaduajayaSurabaya()
    {
        return $this->belongsTo(ProjectLimaduajayaSurabaya::class, 'projectlimaduajayasurabaya_id');
    }

}
