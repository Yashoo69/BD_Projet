<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//1 dessinateur crée plusieurs personnages
class Drawer extends Model
{
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
