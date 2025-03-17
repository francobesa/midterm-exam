<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("features")->insert([
            'name' => "Model", 
            'description' => "A Model represents a table in the database and makes it easier to interact with data. Instead of writing SQL queries, you can use models to create, retrieve, update, and delete records.", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("features")->insert([
            'name' => "View", 
            'description' => "A View is the part of the application responsible for displaying content to users. This is where HTML, CSS, and Blade logic come in to show data.", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("features")->insert([
            'name' => "Controller", 
            'description' => "A Controller acts as the middlemen between the models and views. It handles user requests, processes data, and decides what to display.", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("features")->insert([
            'name' => "Routes", 
            'description' => "A Route in laravel is likened to an address. It directs user requests to the right place in the application.", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("features")->insert([
            'name' => "Middleware", 
            'description' => "Middleware acts like a security checkpoint or filter that processes HTTP requests before they reach the application's core. It helps with authentication, logging, and modifying requests or responses.", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("features")->insert([
            'name' => "Blade Templates", 
            'description' => "Blade Templates are a way to write dynamic HTML views. This allows us to use variables, conditionals, and other directives without using plain PHP in the HTML Blade files (provided they use the .blade.php extension)", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("features")->insert([
            'name' => "Migrations", 
            'description' => "A Migration is like a version control system for the database. It allows us to create and manage database tables using PHP instead of manually writing SQL. Think of it as a way to track changes in the database structure. ", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("features")->insert([
            'name' => "Seeders", 
            'description' => "A Seeder is a way to automatically insert sample data into the database, making it useful for testing or setting up default values.", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("features")->insert([
            'name' => "Database", 
            'description' => "A Database is where all your application's data is stored. It is a big storage system that keeps track of everything and Laravel supports different types of databases such as the one I'm using right now: MySQL.", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("features")->insert([
            'name' => "Eloquent ORM", 
            'description' => "Eloquent ORM is Laravel's built-in tool that makes working with databases easier by allowing you to interact with tables using object-oriented syntax. ", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
