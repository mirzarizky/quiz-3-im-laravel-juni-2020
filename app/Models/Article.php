<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Article
{
    public static function findById($id)
    {
        return DB::table('articles')->where('id', $id)->first();
    }

    public static function all()
    {
        return DB::table('articles')->get();
    }

    public static function save($data)
    {
        $data['slug'] = Str::slug($data['judul']);
        $data['tanggal_dibuat'] = now();
        $data['tanggal_diperbaharui'] = now();

        return DB::table('articles')->insert($data);
    }

    public static function update($id, $data)
    {
        $data['slug'] = Str::slug($data['judul']);
        $data['tanggal_diperbaharui'] = now();

        return DB::table('articles')->where('id', $id)->update($data);
    }

    public static function delete($id)
    {
        return DB::table('articles')->where('id', $id)->delete();
    }
}
