<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class GenerateSlugCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gen:slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate slugs from categories names';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $categories = Category::all();

        foreach ($categories as $category){
            Category::findOrFail($category->toArray()['id'])->update([
                'slug' => strtolower(preg_replace("/[^a-zA-Z0-9-]/", "", $category['name']))
            ]);

            dump(strtolower(preg_replace("/[^a-zA-Z0-9-]/", "", $category['name'])));
        }
    }
}
