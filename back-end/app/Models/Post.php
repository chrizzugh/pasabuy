<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PasabuyUser;
use App\Models\OfferPost;
use App\Models\RequestPost;
use App\Models\ShoppingList;
use Carbon\Carbon;
use Webpatser\Uuid\Uuid;

class Post extends Model
{
    use HasFactory;

    protected $table = 'tbl_post';
    protected $fillable = ['email', 'postIdentity', 'postStatus'];

    public $timestamps = false;
    public $primaryKey = 'indexPost';

    public static function boot()
	{
        parent::boot();
        self::creating(function ($model) {
            $model->postNumber = '080-'.Carbon::now('Asia/Manila')->format('dmyhhm').'-'.str_pad(Post::count()+1,4,'0',STR_PAD_LEFT);
        });
	}

    public function offer_post() {
    	return $this->hasOne(OfferPost::class, 'postNumber', 'postNumber');
    }

    public function request_post() {
        return $this->hasOne(RequestPost::class, 'postNumber', 'postNumber');
    }

    public function user() {
        return $this->hasOne(userInformation::class, 'email', 'email');
    }

    
    public function share()
    {
        # code...
        return $this->hasMany(share::class,'postNumber','postNumber');
    }

    public function transaction()
    {
        # code...
        return $this->hasMany(transaction::class,'postNumber','postNumber');
    }
    // public function shoppingList() {
    //     return $this->hasOneThrough(ShoppingList::class, RequestPost::class, 'postNumber', 'shoppingListNumber', 'postNumber', 'shoppingListNumber');
    // }
}
