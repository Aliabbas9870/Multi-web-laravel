<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    // Optional: Define fillable fields if you're doing mass assignment
     protected $fillable = ['slug', 'title', 'content'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
