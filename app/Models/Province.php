<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'province';
    protected $primaryKey = "id";
    protected $fillable = ['_name', '_code'];
    public $timestamps = false;

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
