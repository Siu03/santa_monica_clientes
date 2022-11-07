<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // protected $table = 'tareas';

    // public $timestamp = false;

    protected $fillable = [
        'name_client',
        'email_client',
        'tel_client',
        'message_client',
        'user_id',
        // 'finished',
        // 'title',
        // 'description',
        // 'user_id',
        // 'finished',
    ];

    public function user() {
        return $this->belongTo(User::class);
    }

    // public function todos() {
    //     return $this->hasMany(Todo::class);
    // }
}
