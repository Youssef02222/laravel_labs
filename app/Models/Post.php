<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Post as Authenticatable;
class Post extends Model
{
    use SoftDeletes;
    protected $fillable=['title','description','user_id'];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
