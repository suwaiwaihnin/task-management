<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','schedule_date','complete_date','priority','status'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
