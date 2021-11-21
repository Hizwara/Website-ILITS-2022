<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    // guarded: tidak boleh diisi
    // fillable: boleh diisi
    protected $guarded = ['departemen_id'];
    
    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
}
