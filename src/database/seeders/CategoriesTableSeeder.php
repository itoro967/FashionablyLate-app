<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            '商品のお届けについて',
            '商品の交換について',
            '商品トラブル',
            'ショップへのお問い合わせ',
            'その他'
        ];
        foreach ($params as $param) {
            DB::table('categories')->insert([
                'content' => $param,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        }
    }
}
