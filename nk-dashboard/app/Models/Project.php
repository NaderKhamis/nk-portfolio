<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $hidden =['created_at','updated_at'];

    public function category()
    {
        return $this->belongsTo(related: 'App\Models\ProjectCategory', foreignKey: 'cat_id');
    }
}
