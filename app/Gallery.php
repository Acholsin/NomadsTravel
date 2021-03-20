<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Expr\FuncCall;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id', 'image'
    ];

    protected $hidden = [];


    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }
};
