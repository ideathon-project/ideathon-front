<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
  //  protected $signature = 'sitemap:generate';

    protected $signature = 'sitemap:olustur';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // modify this to your own needs


        // creates sitemap with all urls in your website
        SitemapGenerator::create("http://127.0.0.1:8000/",)
            ->writeToFile(public_path('sitemap.xml'))
        ;
    }
}
