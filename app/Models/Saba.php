<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saba extends Model
{
    use HasFactory;
    protected $fillable = ['user_id'];
    protected $table = 'sabas';
    /**
     * Get the user that owns the Saba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
