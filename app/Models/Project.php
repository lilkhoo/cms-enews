<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id', 'id');
    }
}
