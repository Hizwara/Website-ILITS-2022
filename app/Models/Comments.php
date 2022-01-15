<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $guard = [];
    protected $fillable = ['comment', 'subtes_id', 'kode_soal', 'nomer_soal', 'user_id'];

    public function replies()
    {
        if (!$this->parent_id) {
            return $this->hasMany(Comments::class);
        }
        return null;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parentComment()
    {
        if ($this->parent_id) {
            return $this->belongsTo(Comments::class, 'parent_id');
        }
        return null;
    }
    public function subtes()
    {
        return $this->belongsTo(Subtes::class, 'subtes_id');
    }
}
