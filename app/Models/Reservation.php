<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ['first_name', 'last_name', 'user_id','phoneNumber','email','res_date','price','status','comment','services_id'];
   
    public function service()
    {
        return $this->belongsTo(Service::class,'services_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}