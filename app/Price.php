<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Price extends Model
{
    use SoftDeletes;

    public $table = 'prices';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
