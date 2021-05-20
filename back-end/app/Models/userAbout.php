<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\userInformation;
use Illuminate\Database\Eloquent\Model;

class userAbout extends Model
{
    use HasFactory;
    protected $table = 'tbl_userabout';
    protected $primaryKey = 'indexUserAbout ';
    public $timestamps = false;

    // public function userInfoAbout(){
    //     return $this->hasOne(userInformation::class, 'email','email');
    // }
}
