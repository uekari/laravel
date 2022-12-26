<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    //ブラックリスト(アプリケーション側から変更できないカラムを指定する)
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    // ホワイトリスト(アプリケーション側から変更できるカラムを指定する)：$fillable ←これを使う
    // どちらかは書かなくてはならない！

    public static function getAllOrderByUpdated_at()
    {
    return self::orderBy('updated_at', 'desc')->get();
    }
}


