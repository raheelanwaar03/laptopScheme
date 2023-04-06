<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class finalWork extends Model
{
    use HasFactory;

    function userId()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
