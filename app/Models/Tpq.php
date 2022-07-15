<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpq extends Model
{
    use HasFactory;

    protected $table = 'tpqs';
    protected $primaryKey = 'id';
    protected $fillable = ['no', 'nama_tpq', 'no_tpq', 'alamat', 'ketua', 'hp'];
}
