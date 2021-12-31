<?php

namespace Database\Seeders;

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

        User::create([
            'name' => 'Takatsuki Sen',
            'username' => 'takasen',
            'email' => 't.sen@gmail.com',
            'password' => bcrypt('owleto')
        ]);

        // User::create([
        //     'name' => 'Arima Kishou',
        //     'email' => 'a.kishou@gmail.com',
        //     'password' => bcrypt('bileygr')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Category::create([
            'name' => 'Thirler',
            'slug' => 'thirler'
        ]);

        Category::create([
            'name' => 'Manual',
            'slug' => 'manual'
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Monochrome Rainbow',
        //     'slug' => 'monochrome-rainbow',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere et vel sed dicta numquam consequuntur, omnis cupiditate vitae, iusto sequi obcaecati veritatis eligendi? Sint dolores inventore tenetur vel, deserunt similique!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, ducimus delectus unde omnis maiores corporis repellendus accusamus doloremque eligendi esse tenetur nemo et deleniti laudantium quod reiciendis incidunt iusto officiis. Facilis ullam officiis odio doloribus pariatur. Libero corporis maiores amet illum dolore omnis deleniti, nihil officiis iure adipisci tempore suscipit modi est? Maiores veniam dicta, tempore facilis unde ducimus, distinctio quis labore optio corporis temporibus nobis eos fugiat. Necessitatibus eius vero voluptates repudiandae veritatis sunt adipisci nobis, minus quas officiis ipsa veniam exercitationem cumque quo nihil excepturi. Exercitationem labore molestias veritatis, hic laudantium soluta optio, delectus explicabo assumenda expedita modi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Black Goat Egg',
        //     'slug' => 'black-goat-egg',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere et vel sed dicta numquam consequuntur, omnis cupiditate vitae, iusto sequi obcaecati veritatis eligendi? Sint dolores inventore tenetur vel, deserunt similique!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, ducimus delectus unde omnis maiores corporis repellendus accusamus doloremque eligendi esse tenetur nemo et deleniti laudantium quod reiciendis incidunt iusto officiis. Facilis ullam officiis odio doloribus pariatur. Libero corporis maiores amet illum dolore omnis deleniti, nihil officiis iure adipisci tempore suscipit modi est? Maiores veniam dicta, tempore facilis unde ducimus, distinctio quis labore optio corporis temporibus nobis eos fugiat. Necessitatibus eius vero voluptates repudiandae veritatis sunt adipisci nobis, minus quas officiis ipsa veniam exercitationem cumque quo nihil excepturi. Exercitationem labore molestias veritatis, hic laudantium soluta optio, delectus explicabo assumenda expedita modi.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Dear Kafka',
        //     'slug' => 'dear-kafka',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere et vel sed dicta numquam consequuntur, omnis cupiditate vitae, iusto sequi obcaecati veritatis eligendi? Sint dolores inventore tenetur vel, deserunt similique!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, ducimus delectus unde omnis maiores corporis repellendus accusamus doloremque eligendi esse tenetur nemo et deleniti laudantium quod reiciendis incidunt iusto officiis. Facilis ullam officiis odio doloribus pariatur. Libero corporis maiores amet illum dolore omnis deleniti, nihil officiis iure adipisci tempore suscipit modi est? Maiores veniam dicta, tempore facilis unde ducimus, distinctio quis labore optio corporis temporibus nobis eos fugiat. Necessitatibus eius vero voluptates repudiandae veritatis sunt adipisci nobis, minus quas officiis ipsa veniam exercitationem cumque quo nihil excepturi. Exercitationem labore molestias veritatis, hic laudantium soluta optio, delectus explicabo assumenda expedita modi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Bileygr',
        //     'slug' => 'bileygr',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere et vel sed dicta numquam consequuntur, omnis cupiditate vitae, iusto sequi obcaecati veritatis eligendi? Sint dolores inventore tenetur vel, deserunt similique!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, ducimus delectus unde omnis maiores corporis repellendus accusamus doloremque eligendi esse tenetur nemo et deleniti laudantium quod reiciendis incidunt iusto officiis. Facilis ullam officiis odio doloribus pariatur. Libero corporis maiores amet illum dolore omnis deleniti, nihil officiis iure adipisci tempore suscipit modi est? Maiores veniam dicta, tempore facilis unde ducimus, distinctio quis labore optio corporis temporibus nobis eos fugiat. Necessitatibus eius vero voluptates repudiandae veritatis sunt adipisci nobis, minus quas officiis ipsa veniam exercitationem cumque quo nihil excepturi. Exercitationem labore molestias veritatis, hic laudantium soluta optio, delectus explicabo assumenda expedita modi.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'CCG S Class Standarization',
        //     'slug' => 'ccg-s-class-standarization',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere et vel sed dicta numquam consequuntur, omnis cupiditate vitae, iusto sequi obcaecati veritatis eligendi? Sint dolores inventore tenetur vel, deserunt similique!',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis, ducimus delectus unde omnis maiores corporis repellendus accusamus doloremque eligendi esse tenetur nemo et deleniti laudantium quod reiciendis incidunt iusto officiis. Facilis ullam officiis odio doloribus pariatur. Libero corporis maiores amet illum dolore omnis deleniti, nihil officiis iure adipisci tempore suscipit modi est? Maiores veniam dicta, tempore facilis unde ducimus, distinctio quis labore optio corporis temporibus nobis eos fugiat. Necessitatibus eius vero voluptates repudiandae veritatis sunt adipisci nobis, minus quas officiis ipsa veniam exercitationem cumque quo nihil excepturi. Exercitationem labore molestias veritatis, hic laudantium soluta optio, delectus explicabo assumenda expedita modi.',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
