<?php

namespace App\Models;

use Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
    protected $guarded = ['id'];
}
