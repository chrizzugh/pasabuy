<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RequestPost;

class ShoppingList extends Model
{
    use HasFactory;

    protected $table = 'tbl_shoppingList';
    protected $fillable = ['indexShoppingList', 'shoppingListNumber', 'email', 'text', 'dateCreated'];

    public $timestamps = false;
    public $primaryKey = 'indexShoppingList';

    public function requestPost() {
    	return $this->belongsTo(RequestPost::class, 'shoppingListNumber', 'shoppingListNumber');
    }
}
