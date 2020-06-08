<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['name' , 'image' , 'phone' , 'mobile' , 'fax' , 'address' , 'description' , 'user_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
