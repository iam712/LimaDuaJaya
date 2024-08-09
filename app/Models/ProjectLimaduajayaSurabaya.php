<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectLimaduajayaSurabaya extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function portfolioProjects()
    {
        return $this->hasMany(PortfolioProjectLimaduajayaSurabaya::class, 'projectlimaduajayasurabaya_id');
    }
}
