<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 验证
 * Class Verify
 * @package App\Http\Models
 */
class Verify extends Model
{
    protected $table = 'verify';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'token',
        'status'
    ];

    public function User() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}