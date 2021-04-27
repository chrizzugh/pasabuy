<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    use HasFactory;
    protected $table = 'tbl_reviews';
    protected $primaryKey = 'indexReview ';

    // public function transaction()
    // {
    //     # code...
    //     return $this->hasOne(transaction::class,'emailCustomerShopper','reviewerEmail');
    // }

    public function userreviewee() {
        return $this->hasOne(userInformation::class, 'email', 'revieweeEmail');
    }
    public function userreviewer() {
        return $this->hasOne(userInformation::class, 'email', 'reviewerEmail');
    }
    //hasOne(userinformation::class, "igdi si foreign kang userinformation", "ini si local key na foreign key sa userinformation")

}
