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
        'title',
        'description',
        'user_id',
        'finished',
    ];

    public function user() {
        return $this->belongTo(User::class);
    }

    // public function todos() {
    //     return $this->hasMany(Todo::class);
    // }
}
