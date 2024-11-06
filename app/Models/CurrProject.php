<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrProject extends Model
{
    use HasFactory;

    protected $table = 'curr_projects';

    protected $fillable = [
        'name',
        'unique_id'
    ];

    public function curr_project_portfolio()
    {
        return $this->hasMany(CurrProjectPortfolio::class);
    }
}
