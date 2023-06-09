<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Item;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'customer_id', 
        'status', 
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class); // 繋ぎたい1のモデル
    }

    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('quantity'); // 中間テーブルにしかない情報を取得
    }
}
