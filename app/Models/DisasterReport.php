<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisasterReport extends Model
{
    use HasFactory;
    protected $table = 'disaster_report';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'user_id',
        'disaster_type',
        'title',
        'location',
        'datetime',
        'attachment',
        'is_verified',
        'additional_info'
    ];
}
