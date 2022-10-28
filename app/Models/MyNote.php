<?php

namespace App\Models;

use Database\Factories\MyNoteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyNote extends Model
{
    use HasFactory;

    /**
     * Create a new MyNote factory instance for the model.
     *
     * @return MyNoteFactory
     */
    protected static function newFactory(): MyNoteFactory
    {
        return MyNoteFactory::new();
    }
}
