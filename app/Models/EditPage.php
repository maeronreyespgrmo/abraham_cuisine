<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EditPage extends Model
{
    //
    protected $fillable = [
        'image', 
    ];
    
    protected $table = 'tbl_edit_pages';
}
