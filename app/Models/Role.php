<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $keyType = 'uuid';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name_role',
    ];

    
public static function boot(){
    parent::boot();

    static::creating(function ($social) {
        $social->id = Str::uuid(36);
    });
}
}
