<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'memo',
        'price',
        'is_selling'
    ];

    public function purchases()
    {
        return $this->belongsToMany(Purchases::class)->withPivot('quantity'); // 中間テーブルにしかない情報を取得
    }
}
