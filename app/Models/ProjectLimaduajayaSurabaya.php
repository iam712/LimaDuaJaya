<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectLimaduajayaSurabaya extends Model
{
    use HasFactory;

    // Explicitly set the table name
    protected $table = 'projectlimaduajayasurabayas';

    protected $fillable = [
        'name'
    ];

    public function portfolioProjects()
    {
        return $this->hasMany(PortfolioProjectLimaduajayaSurabaya::class, 'project_id'); // Use 'project_id'
    }
}
