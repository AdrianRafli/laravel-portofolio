<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AboutMe;
use App\Models\Contact;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Adrian Maulana Rafli',
            'email' => 'adrianrafly19@gmail.com',
            'password' => bcrypt('123456')
        ]);

        AboutMe::create([
            'name' => 'Adrian Maulana Rafli',
            'job' => 'Front-End Developer👋🏻',
            'short_description' => 'A Passionate Front-End Developer<br>based in Semarang, Indonesia 📍',
            'description' => '🎓 Computer Science student at Bina Nusantara University Semarang Campus with main interest in Front-End and Web Development. I am actively involved in various projects to expand my understanding of user interface design and responsive web development 🧑🏻‍💻. I believe in the importance of collaboration and community in professional growth, and I am always open to new opportunities and knowledge sharing.'
        ]);
        
        Project::create([
            'image' => 'pemilos.jpeg',
            'name' => 'Pemilos',
            'slug' => 'pemilos',
            'description' => 'Website untuk pemilihan ketua dan wakil osis untuk SMK N 8 Semarang secara online',
            'tech_stack' => 'PHP MYSQL',
            'github_link' => '#',
            'demo_link' => '#'
        ]);
        Project::create([
            'image' => 'tokoku.jpeg',
            'name' => 'Tokoku',
            'slug' => 'tokoku',
            'description' => 'Website E-Commerce Sederhana dengan fitur Registrasi, Login, Search, Cart, dan Admin',
            'tech_stack' => 'PHP MYSQL',
            'github_link' => 'https://github.com/AdrianRafli/website-tokoku',
            'demo_link' => '#'
        ]);

        Contact::create([
            'image' => '<i class="bi bi-envelope-fill"></i>',
            'platform' => 'email',
            'link' => 'mailto:adrianrafly20@gmail.com'
        ]);
        Contact::create([
            'image' => '<i class="bi bi-linkedin"></i>',
            'platform' => 'linkedin',
            'link' => 'https://www.linkedin.com/in/adrianrafli/'
        ]);
        Contact::create([
            'image' => '<i class="bi bi-github"></i>',
            'platform' => 'github',
            'link' => 'https://github.com/AdrianRafli'
        ]);
        Contact::create([
            'image' => '<i class="bi bi-instagram"></i>',
            'platform' => 'instagram',
            'link' => 'https://www.instagram.com/adrrfl_/'
        ]);
        Contact::create([
            'image' => '<i class="bi bi-twitter-x"></i>',
            'platform' => 'x',
            'link' => '#'
        ]);
        Contact::create([
            'image' => '<i class="bi bi-discord"></i>',
            'platform' => 'discord',
            'link' => '#'
        ]);
    }
}
