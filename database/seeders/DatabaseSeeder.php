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

        // User::create([
        //     'name' => 'Wijdan Muhammad Ridwanulloh',
        //     'email' => '193040034.wijdan@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Agung gumelar',
        //     'email' => '193040008.agung@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, itaque recusandae, nihil necessitatibus et ipsam, unde nesciunt dicta',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, itaque recusandae, nihil necessitatibus et ipsam, unde nesciunt dicta alias soluta esse minima eligendi! Nobis amet iusto optio ea a. Dolores dolorum reprehenderit fugiat praesentium sapiente eum nam. Facere laudantium ex aliquam aut exercitationem cupiditate enim beatae odit reiciendis consequatur illum fuga cum, dolore itaque, excepturi vero dolorem labore. Beatae dicta ut, alias aperiam labore tempora sequi neque. Quisquam expedita inventore consequuntur sunt autem enim quos ab accusamus veritatis tenetur. In ipsam voluptatem sunt hic aliquid tempora dolor ipsa harum blanditiis. Minima qui quo in nesciunt quia provident animi dolores molestias.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, itaque recusandae, nihil necessitatibus et ipsam, unde nesciunt dicta',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, itaque recusandae, nihil necessitatibus et ipsam, unde nesciunt dicta alias soluta esse minima eligendi! Nobis amet iusto optio ea a. Dolores dolorum reprehenderit fugiat praesentium sapiente eum nam. Facere laudantium ex aliquam aut exercitationem cupiditate enim beatae odit reiciendis consequatur illum fuga cum, dolore itaque, excepturi vero dolorem labore. Beatae dicta ut, alias aperiam labore tempora sequi neque. Quisquam expedita inventore consequuntur sunt autem enim quos ab accusamus veritatis tenetur. In ipsam voluptatem sunt hic aliquid tempora dolor ipsa harum blanditiis. Minima qui quo in nesciunt quia provident animi dolores molestias.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, itaque recusandae, nihil necessitatibus et ipsam, unde nesciunt dicta',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, itaque recusandae, nihil necessitatibus et ipsam, unde nesciunt dicta alias soluta esse minima eligendi! Nobis amet iusto optio ea a. Dolores dolorum reprehenderit fugiat praesentium sapiente eum nam. Facere laudantium ex aliquam aut exercitationem cupiditate enim beatae odit reiciendis consequatur illum fuga cum, dolore itaque, excepturi vero dolorem labore. Beatae dicta ut, alias aperiam labore tempora sequi neque. Quisquam expedita inventore consequuntur sunt autem enim quos ab accusamus veritatis tenetur. In ipsam voluptatem sunt hic aliquid tempora dolor ipsa harum blanditiis. Minima qui quo in nesciunt quia provident animi dolores molestias.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, itaque recusandae, nihil necessitatibus et ipsam, unde nesciunt dicta',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, itaque recusandae, nihil necessitatibus et ipsam, unde nesciunt dicta alias soluta esse minima eligendi! Nobis amet iusto optio ea a. Dolores dolorum reprehenderit fugiat praesentium sapiente eum nam. Facere laudantium ex aliquam aut exercitationem cupiditate enim beatae odit reiciendis consequatur illum fuga cum, dolore itaque, excepturi vero dolorem labore. Beatae dicta ut, alias aperiam labore tempora sequi neque. Quisquam expedita inventore consequuntur sunt autem enim quos ab accusamus veritatis tenetur. In ipsam voluptatem sunt hic aliquid tempora dolor ipsa harum blanditiis. Minima qui quo in nesciunt quia provident animi dolores molestias.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
