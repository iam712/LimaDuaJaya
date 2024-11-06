<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrProjectPortfolio extends Model
{
    use HasFactory;

    protected $table = 'curr_project_portfolios';

    protected $fillable = [
        'currproject_id',
        'image',
        'status_detail'
    ];

    public function currproject()
    {
        // return $this->belongsTo(CurrProject::class);
        return $this->belongsTo(CurrProject::class, 'currproject_id');
    }
}
