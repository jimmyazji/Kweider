<?php

namespace App\Models;

use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MenuCat extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = [
        'name',
    ];
    public $translatable = [
        'name'
    ];

    
    public function products()
    {
        return $this->hasMany(MenuProduct::class, 'cat_id', 'id');
    }
}
