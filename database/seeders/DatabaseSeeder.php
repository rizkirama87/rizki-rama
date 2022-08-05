<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Rizki Ramadhani',
            'username' => 'rizkiramadhani',
            'email' => 'rizkiramaa@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Yusron Amrullah',
        //     'email' => 'yusron@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non soluta placeat exercitationem, odit minima totam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus at aliquid tempora molestias ipsam fugiat facilis repellendus iure mollitia a tempore voluptates debitis, praesentium sunt laboriosam! Minus esse quia, ipsa qui nobis reiciendis! Distinctio, repellat praesentium esse ipsam facilis, nam quisquam perspiciatis magnam quaerat sunt inventore minus asperiores mollitia dolore dignissimos at minima. Quidem aut ea corrupti accusamus velit! Molestiae, fuga? Optio impedit temporibus voluptatibus distinctio architecto eos ut. Iste nam accusantium quasi, quod quos voluptatem magni ipsum similique perferendis ipsa esse, pariatur in eos, adipisci iusto! Fugit, recusandae ab. Praesentium obcaecati iusto, impedit tenetur fuga eum quibusdam commodi qui.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non soluta placeat exercitationem, odit minima totam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus at aliquid tempora molestias ipsam fugiat facilis repellendus iure mollitia a tempore voluptates debitis, praesentium sunt laboriosam! Minus esse quia, ipsa qui nobis reiciendis! Distinctio, repellat praesentium esse ipsam facilis, nam quisquam perspiciatis magnam quaerat sunt inventore minus asperiores mollitia dolore dignissimos at minima. Quidem aut ea corrupti accusamus velit! Molestiae, fuga? Optio impedit temporibus voluptatibus distinctio architecto eos ut. Iste nam accusantium quasi, quod quos voluptatem magni ipsum similique perferendis ipsa esse, pariatur in eos, adipisci iusto! Fugit, recusandae ab. Praesentium obcaecati iusto, impedit tenetur fuga eum quibusdam commodi qui.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non soluta placeat exercitationem, odit minima totam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus at aliquid tempora molestias ipsam fugiat facilis repellendus iure mollitia a tempore voluptates debitis, praesentium sunt laboriosam! Minus esse quia, ipsa qui nobis reiciendis! Distinctio, repellat praesentium esse ipsam facilis, nam quisquam perspiciatis magnam quaerat sunt inventore minus asperiores mollitia dolore dignissimos at minima. Quidem aut ea corrupti accusamus velit! Molestiae, fuga? Optio impedit temporibus voluptatibus distinctio architecto eos ut. Iste nam accusantium quasi, quod quos voluptatem magni ipsum similique perferendis ipsa esse, pariatur in eos, adipisci iusto! Fugit, recusandae ab. Praesentium obcaecati iusto, impedit tenetur fuga eum quibusdam commodi qui.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non soluta placeat exercitationem, odit minima totam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus at aliquid tempora molestias ipsam fugiat facilis repellendus iure mollitia a tempore voluptates debitis, praesentium sunt laboriosam! Minus esse quia, ipsa qui nobis reiciendis! Distinctio, repellat praesentium esse ipsam facilis, nam quisquam perspiciatis magnam quaerat sunt inventore minus asperiores mollitia dolore dignissimos at minima. Quidem aut ea corrupti accusamus velit! Molestiae, fuga? Optio impedit temporibus voluptatibus distinctio architecto eos ut. Iste nam accusantium quasi, quod quos voluptatem magni ipsum similique perferendis ipsa esse, pariatur in eos, adipisci iusto! Fugit, recusandae ab. Praesentium obcaecati iusto, impedit tenetur fuga eum quibusdam commodi qui.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
