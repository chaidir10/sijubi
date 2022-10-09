<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(20)->create();
        User::factory(9)->create();

        Category::create([
            'name'  => 'Web Design',
            'slug'  => 'web-design'
        ]);

        Category::create([
            'name'  => 'Web Programming',
            'slug'  => 'web-programming'
        ]);

        Category::create([
            'name'  => 'Islam',
            'slug'  => 'islam'
        ]);

        Category::create([
            'name'  => 'Quran',
            'slug'  => 'quran'
        ]);


        User::create([
            'name' => 'Chaidirrahman',
            'username' => 'chaidirrahman12',
            'email' => 'chaidirrahman72@gmail.com',
            'password' => bcrypt('admin')
        ]);

        // User::create([
        //     'name' => 'Fulan',
        //     'email' => 'fulan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title'     => 'Judul Pertama',
        //     'slug'      => 'judul-pertama',
        //     'excerpt'   =>
        //     'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat fugit dignissimos quas facilis deserunt cum dolorum beatae quasi ab.',
        //     'body'      => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus voluptate, explicabo excepturi asperiores cumque obcaecati soluta perspiciatis reiciendis voluptatem voluptates quibusdam quidem harum error culpa aperiam ipsa officia quas. Accusantium dolorem laboriosam totam itaque quo veniam facilis eligendi alias quos perferendis. </p><p> Dolorum qui facilis, placeat tempora maiores nemo soluta quaerat aut rem ducimus, incidunt culpa atque consectetur ab aliquid odio alias nostrum nisi architecto minus laborum fugit deleniti iste fuga. Veniam id possimus ipsa laborum laboriosam ipsum corrupti dicta deserunt, inventore itaque, officiis veritatis perspiciatis obcaecati eum dolores. Beatae, dolore! Possimus perferendis mollitia, nobis facere neque porro quisquam ad nostrum consectetur iste illum atque sequi autem adipisci debitis magni cumque. Esse itaque dolor voluptate dolore sint adipisci dolores fuga enim.</p>',
        //     'category_id'   => '1',
        //     'user_id'       => '1'
        // ]);

        // Post::create([
        //     'title'     => 'Judul Kedua',
        //     'slug'      => 'judul-kedua',
        //     'excerpt'   =>
        //     'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat fugit dignissimos quas facilis deserunt cum dolorum beatae quasi ab.',
        //     'body'      => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus voluptate, explicabo excepturi asperiores cumque obcaecati soluta perspiciatis reiciendis voluptatem voluptates quibusdam quidem harum error culpa aperiam ipsa officia quas. Accusantium dolorem laboriosam totam itaque quo veniam facilis eligendi alias quos perferendis. </p><p> Dolorum qui facilis, placeat tempora maiores nemo soluta quaerat aut rem ducimus, incidunt culpa atque consectetur ab aliquid odio alias nostrum nisi architecto minus laborum fugit deleniti iste fuga. Veniam id possimus ipsa laborum laboriosam ipsum corrupti dicta deserunt, inventore itaque, officiis veritatis perspiciatis obcaecati eum dolores. Beatae, dolore! Possimus perferendis mollitia, nobis facere neque porro quisquam ad nostrum consectetur iste illum atque sequi autem adipisci debitis magni cumque. Esse itaque dolor voluptate dolore sint adipisci dolores fuga enim.</p>',
        //     'category_id'   => '1',
        //     'user_id'       => '2'
        // ]);

        // Post::create([
        //     'title'     => 'Judul Ketiga',
        //     'slug'      => 'judul-ketiga',
        //     'excerpt'   =>
        //     'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur placeat fugit dignissimos quas facilis deserunt cum dolorum beatae quasi ab.',
        //     'body'      => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus voluptate, explicabo excepturi asperiores cumque obcaecati soluta perspiciatis reiciendis voluptatem voluptates quibusdam quidem harum error culpa aperiam ipsa officia quas. Accusantium dolorem laboriosam totam itaque quo veniam facilis eligendi alias quos perferendis. </p><p> Dolorum qui facilis, placeat tempora maiores nemo soluta quaerat aut rem ducimus, incidunt culpa atque consectetur ab aliquid odio alias nostrum nisi architecto minus laborum fugit deleniti iste fuga. Veniam id possimus ipsa laborum laboriosam ipsum corrupti dicta deserunt, inventore itaque, officiis veritatis perspiciatis obcaecati eum dolores. Beatae, dolore! Possimus perferendis mollitia, nobis facere neque porro quisquam ad nostrum consectetur iste illum atque sequi autem adipisci debitis magni cumque. Esse itaque dolor voluptate dolore sint adipisci dolores fuga enim.</p>',
        //     'category_id'   => '2',
        //     'user_id'       => '1'
        // ]);
    }
}
