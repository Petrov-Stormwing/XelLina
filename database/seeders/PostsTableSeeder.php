<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'slug'=> '1',
            'title' => 'Classic Chianti',
            'body' => 'A medium-bodied wine characterized by a marvelous freshness with a lingering, fruity finish',
        ]);

        Post::create([
            'slug'=> '1',
            'title' => 'Bordeaux',
            'body' => 'A wine with fruit scents and flavors of blackberry, dark cherry, vanilla, coffee bean, and licorice. The wines are often concentrated, powerful, firm and tannic',
        ]);

        Post::create([
            'slug'=> '1',
            'title' => 'White Zinfandel',
            'body' => 'Often abbreviated as White Zin, it is a dry to sweet wine, pink-colored rosé',
        ]);

        Post::create([
            'slug'=> '1',
            'title' => 'Port',
            'body' => 'A fortified sweet red wine, often served as a dessert wine',
        ]);

        Post::create([
            'slug'=> '1',
            'title' => 'Prosecco',
            'body' => 'It is a dry white wine (brut) sometimes with a sweet flavor of green apple, honeydew melon, pear, and honeysuckle',
        ]);
    }
}
