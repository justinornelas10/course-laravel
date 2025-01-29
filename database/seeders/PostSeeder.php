<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'id' => '1',
                'title' => 'Noticia OMS',
                'slug' => 'OMS_New1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor facilisis aliquam. Sed tincidunt purus eu convallis sollicitudin. Mauris facilisis orci non sollicitudin volutpat.',
                'description' => 'Praesent sed euismod est, id aliquam felis. Praesent vestibulum porttitor porta. Nam vitae elementum odio.',
                'category_id' => 1,
                'posted' => 'yes',

            ],
            [
                'id' => '2',
                'title' => 'Noticia Bolsa',
                'slug' => 'bolsa_new_1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor facilisis aliquam. Sed tincidunt purus eu convallis sollicitudin. Mauris facilisis orci non sollicitudin volutpat.',
                'description' => 'Praesent sed euismod est, id aliquam felis. Praesent vestibulum porttitor porta. Nam vitae elementum odio.',
                'category_id' => 2,
                'posted' => 'yes',
            ],
            [
                'id' => '3',
                'title' => 'Noticia Salud',
                'slug' => 'bolsa_salud_1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor facilisis aliquam. Sed tincidunt purus eu convallis sollicitudin. Mauris facilisis orci non sollicitudin volutpat.',
                'description' => 'Praesent sed euismod est, id aliquam felis. Praesent vestibulum porttitor porta. Nam vitae elementum odio.',
                'category_id' => 10,
                'posted' => 'not',
            ],
            [
                'id' => '4',
                'title' => 'Noticia Futbol',
                'slug' => 'futbol_new_1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor facilisis aliquam. Sed tincidunt purus eu convallis sollicitudin. Mauris facilisis orci non sollicitudin volutpat.',
                'description' => 'Praesent sed euismod est, id aliquam felis. Praesent vestibulum porttitor porta. Nam vitae elementum odio.',
                'category_id' => 12,
                'posted' => 'yes',
            ],
        ];
        
        foreach ($posts as $post) {
            Post::UpdateOrCreate(['id' => $post['id']],$post);
        }
    }
}
