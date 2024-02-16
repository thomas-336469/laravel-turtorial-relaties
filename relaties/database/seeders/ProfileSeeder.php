<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $profile = new Profile();
        $profile->user_id = 1;
        $profile->website_url = 'https://www.example.com';
        $profile->github_url = 'https://www.github.com';
        $profile->twitter_url = 'https://www.twitter.com';
        $profile->save();

        $profile = new Profile();
        $profile->user_id = 22;
        $profile->website_url = 'https://www.exampleThomas.com';
        $profile->github_url = 'https://www.githubThomas.com';
        $profile->twitter_url = 'https://www.twitterThomas.com';
        $profile->save();

        $profile = new Profile();
        $profile->user_id = 23;
        $profile->website_url = 'https://www.exampleDaap.com';
        $profile->github_url = 'https://www.githubDaap.com';
        $profile->twitter_url = 'https://www.twitterDaap.com';
        $profile->save();
    }
}
