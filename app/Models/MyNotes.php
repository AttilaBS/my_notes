<?php

namespace App\Models;

use Database\Factories\MyNotesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyNotes extends Model
{
    use HasFactory;

    /**
     * Create a new MyNotes factory instance for the model.
     *
     * @return MyNotesFactory
     */
    protected static function newFactory(): MyNotesFactory
    {
        return MyNotesFactory::new();
    }
}
