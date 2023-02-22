<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arr = ['Anime & Manga', 'Anime/Cute', 'Anime/Wallpapers', 'Mecha', 'Cosplay & EGL',
            'Cute/Male', 'Flash', 'Transportation', 'Otaku Culture', 'Virtual YouTubers',
            'Video Games', 'Video Game Generals', 'Video Games/Multiplayer', 'Video Games/Mobile',
            'Pokémon', 'Retro Games', 'Video Games/RPG', 'Video Games/Strategy', 'Comics & Cartoons',
            'Technology', 'Television & Film', 'Weapons', 'Auto', 'Animals & Nature', 'Traditional Games',
            'Sports', 'Extreme Sports', 'Professional Wrestling', 'Science & Math', 'History & Humanities',
            'International', 'Outdoors', 'Toys', 'Oekaki', 'Papercraft & Origami', 'Photography', 'Food & Cooking',
            'Artwork/Critique', 'Wallpapers/General', 'Literature', 'Music', 'Fashion', '3DCG',
            'Graphic Design', 'Do-It-Yourself', 'Worksafe GIF', 'Quests', 'Business & Finance',
            'Travel', 'Fitness', 'Paranormal', 'Advice', 'LGBT', 'Pony', 'Current News', 'Worksafe Requests',
            'Very Important Posts', 'Random', 'ROBOT9001', 'Politically Incorrect', 'International/Random',
            'Cams & Meetups', 'Shit 4chan Says', 'Sexy Beautiful Women', 'Hardcore', 'Handsome Men',
            'Hentai', 'Ecchi', 'Yuri', 'Hentai/Alternative', 'Yaoi', 'Torrents', 'High Resolution',
            'Adult GIF', 'Adult Cartoons', 'Adult Requests'];

        foreach ($arr as $item) {
            Category::create([
                'name' => $item,
            ]);
        }

    }
}
