<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userLanguages extends Model
{
    use HasFactory;
    protected $table = 'tbl_userlanguages';
    protected $primaryKey = 'indexUserInformation ';
    public $timestamps = false;
}
