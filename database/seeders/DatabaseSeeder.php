<?php

namespace Database\Seeders;
//this will be ran when we run php artisan DB:seed
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
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
        \App\Models\User::factory(5)->create();

        //using the factory
        Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Bosteon, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero eligendi rem delectus molestias! Voluptatem numquam nobis dolorem fuga illum voluptas laudantium cupiditate amet, vel dolore iste, nesciunt iure mollitia tempora. Debitis neque quasi animi, quia distinctio, et maiores veniam provident ut praesentium aliquam veritatis expedita eos autem eum explicabo sed beatae modi a. Vel, repellat. Amet eligendi voluptatibus libero laboriosam exercitationem nam quod nemo et iure voluptates perferendis excepturi, qui aperiam officia necessitatibus laudantium ut voluptas cumque culpa minus! Accusamus minima tenetur fugiat a vero, nemo accusantium, earum eum quisquam incidunt ducimus cupiditate deleniti fuga facere facilis rem! Quibusdam, explicabo.'
        // ]);

        // Listing::create([
        //     'title' => 'Full Stack Developer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://www.starmindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut laborum iure accusamus impedit excepturi vel ratione illo ut, laboriosam ab ea ducimus, dolor quo itaque qui nihil consectetur! At, veritatis.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
