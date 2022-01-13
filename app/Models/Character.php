<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//1 personnage est crée par 1 seul dessinateur
class Character extends Model
{
    public function drawer()
    {
        return $this->belongsTo(Drawer::class);
    }
}
