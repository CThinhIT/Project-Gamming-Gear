<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "order";
    protected $fillable = ['id', 'create_date', 'name_user', 'email_user', 'phone_user', 'payment_method', 'staff_id', 'deleted_at', 'delivered_date', 'customer_id','address','total'];
}
