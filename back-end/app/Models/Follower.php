<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    protected $table = 'tbl_follow';
    protected $fillable = [
    	'indexFollow',
    	'followNumber',
    	'email1',
    	'emailFollowEmail2',
    	'emailFollowEmail2_date',
    	'email2',
    	'email2FollowEmail1',
    	'email2FollowEmail1_date',
    	'dateCreated'
    ]

    public $timestamps = false;
    public $primaryKey = 'indexFollower';


}
