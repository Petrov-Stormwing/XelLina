<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title'=> 'Classic Chianti',
            'excerpt' => 'A medium-bodied wine characterized by a marvelous freshness with a lingering, fruity finish',
            'body' => 'Example',
        ]);

        Article::create([
            'title'=> 'Bordeaux',
            'excerpt' => 'A wine with fruit scents and flavors of blackberry, dark cherry, vanilla, coffee bean, and licorice.',
            'body' =>  'The wines are often concentrated, powerful, firm and tannic',
        ]);

        Article::create([
            'title'=> 'White Zinfandel',
            'excerpt' => 'Often abbreviated as White Zin, it is a dry to sweet wine, pink-colored rosé',
            'body' => 'Example 2',
        ]);

        Article::create([
            'title'=> 'Port',
            'excerpt' => 'A fortified sweet red wine, often served as a dessert wine',
            'body' => '3',
        ]);

        Article::create([
            'title'=> 'Prosecco',
            'excerpt' => 'It is a dry white wine (brut) sometimes with a sweet flavor of green apple, honeydew melon, pear, and honeysuckle',
            'body' => 'What the fack',
        ]);
    }
}
