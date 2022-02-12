<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemoteCategory extends Model
{
    use HasFactory;
    protected $table = 'remote_categories';
    public $timestamps = false;
}
