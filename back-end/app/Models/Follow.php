<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $table = 'tbl_follow';
    public $timestamps = false;
    public $primaryKey = 'indexFollow';

    public function email1()
    {
        # code...
        return $this->hasOne(userInformation::class, "email", "email1");
    }
    public function email2()
    {
        # code...
        return $this->hasOne(userInformation::class, "email", "email2");
    }
}
