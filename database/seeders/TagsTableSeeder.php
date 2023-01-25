<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => '仕事',
        ]);
        Tag::create([
            'name' => 'プライベート',
        ]);
        Tag::create([
            'name' => '予定',
        ]);
        Tag::create([
            'name' => '遊び',
        ]);
        Tag::create([
            'name' => 'メモ',
        ]);
    }
}
