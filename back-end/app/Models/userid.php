<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userid extends Model
{
    use HasFactory;
    protected $table = 'tbl_userid';
    protected $primaryKey = 'indexID';
    public $timestamps = false;
}
