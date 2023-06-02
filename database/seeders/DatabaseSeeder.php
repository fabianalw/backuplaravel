<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Fabian Alwan Zaidan',
        //     'email' => "fabian@gmail.com",
        //     'password' => bcrypt(12345)
        // ]);

        // User::create([
        //     'name' => 'Devika',
        //     'email' => "devika@gmail.com",
        //     'password' => bcrypt(12345)
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => "web-programming"
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => "personal"
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => "web-design"
        ]);

        Post::factory(5)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum atque ratione eum, illum optio quaerat sint quis, autem fugiat incidunt corporis facilis at consequuntur perferendis rerum, tempore nobis tenetur repudiandae. Atque unde dignissimos iste tenetur numquam? Numquam aperiam eveniet tempora laborum consequuntur.</p><>Ullam similique reprehenderit officiis nam perferendis itaque dolor necessitatibus consequatur quaerat asperiores incidunt tempora id atque voluptas nemo, veritatis libero cumque? Eius, rem? Consequuntur illum illo quod! A culpa quisquam veritatis quis alias! Porro minima at amet praesentium accusantium necessitatibus consequatur, impedit exercitationem ex fuga iste? Unde neque dolorum quam minus assumenda? Error dignissimos expedita voluptatibus pariatur repellat!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => "judul-kedua",
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum atque ratione eum, illum optio quaerat sint quis, autem fugiat incidunt corporis facilis at consequuntur perferendis rerum, tempore nobis tenetur repudiandae. Atque unde dignissimos iste tenetur numquam? Numquam aperiam eveniet tempora laborum consequuntur.</p><>Ullam similique reprehenderit officiis nam perferendis itaque dolor necessitatibus consequatur quaerat asperiores incidunt tempora id atque voluptas nemo, veritatis libero cumque? Eius, rem? Consequuntur illum illo quod! A culpa quisquam veritatis quis alias! Porro minima at amet praesentium accusantium necessitatibus consequatur, impedit exercitationem ex fuga iste? Unde neque dolorum quam minus assumenda? Error dignissimos expedita voluptatibus pariatur repellat!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum atque ratione eum, illum optio quaerat sint quis, autem fugiat incidunt corporis facilis at consequuntur perferendis rerum, tempore nobis tenetur repudiandae. Atque unde dignissimos iste tenetur numquam? Numquam aperiam eveniet tempora laborum consequuntur.</p><>Ullam similique reprehenderit officiis nam perferendis itaque dolor necessitatibus consequatur quaerat asperiores incidunt tempora id atque voluptas nemo, veritatis libero cumque? Eius, rem? Consequuntur illum illo quod! A culpa quisquam veritatis quis alias! Porro minima at amet praesentium accusantium necessitatibus consequatur, impedit exercitationem ex fuga iste? Unde neque dolorum quam minus assumenda? Error dignissimos expedita voluptatibus pariatur repellat!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum atque ratione eum, illum optio quaerat sint quis, autem fugiat incidunt corporis facilis at consequuntur perferendis rerum, tempore nobis tenetur repudiandae. Atque unde dignissimos iste tenetur numquam? Numquam aperiam eveniet tempora laborum consequuntur.</p><>Ullam similique reprehenderit officiis nam perferendis itaque dolor necessitatibus consequatur quaerat asperiores incidunt tempora id atque voluptas nemo, veritatis libero cumque? Eius, rem? Consequuntur illum illo quod! A culpa quisquam veritatis quis alias! Porro minima at amet praesentium accusantium necessitatibus consequatur, impedit exercitationem ex fuga iste? Unde neque dolorum quam minus assumenda? Error dignissimos expedita voluptatibus pariatur repellat!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        
        

    }
}
