<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes extends Model
{
    use HasFactory;
    protected $table = 'subtes';
    protected $guard = [];
    protected $fillable = ['nama_subtes'];

    public function comment()
    {
        return $this->hasMany(Comments::class);
    }
}
