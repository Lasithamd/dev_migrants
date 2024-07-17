<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comment::create([
            'ads_id' => 1,
            'comment' => 'What is the model country',
            'user_id' => 1,
        ]);
        Comment::create([
            'ads_id' => 1,
            'comment' => 'Best Price?',
            'user_id' => 1,
        ]);
        Comment::create([
            'ads_id' => 2,
            'comment' => 'What is the model country',
            'user_id' => 1,
        ]);
        Comment::create([
            'ads_id' => 2,
            'comment' => 'What is the year',
            'user_id' => 1,
        ]);
        Comment::create([
            'ads_id' => 3,
            'comment' => 'with furniture',
            'user_id' => 1,
        ]);
    }
}
