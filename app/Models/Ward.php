<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = ['_name', '_prefix','_province_id','_district_id'];
    public $timestamps = false;
    protected $table = 'ward';

    public function district() {
        return $this->belongsTo(District::class, '_district_id' , 'id');
    }
}