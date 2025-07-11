<?php

namespace Modules\Kui\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visimisi extends Model
{
    // use HasFactory;

    // protected $fillable = [];

    // protected static function newFactory()
    // {
    //     return \Modules\Kui\Database\factories\VisimisiFactory::new();
    // }

    use HasFactory;
    protected $table = 'visimisi';
    protected $id = 'id';
    protected $fillable = ['visi', 'misi'];
}
