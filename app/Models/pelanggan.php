<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pelanggan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'table_pelanggan';
    protected $fillable = [
        'nama',
        'alamat'
    ];

    protected $hidden = [];
}
