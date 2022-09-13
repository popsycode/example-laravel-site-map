<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Popsy\SiteMap\IGenerator;

class GenerateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(IGenerator $generator)
    {
        $data = [
            [
                'loc' =>"https://site.ru/",
                'lastmod' =>"2020-12-14",
                'priority' =>1,
                'changefreq' =>"hourly"
            ],
            [
                'loc' =>"https://site.ru/news",
                'lastmod' =>"2020-12-10",
                'priority' =>0.5,
                'changefreq' =>"daily"
            ],
            [
                'loc' =>"https://site.ru/about",
                'lastmod' =>"2020-12-07",
                'priority' =>0.1,
                'changefreq' =>"weekly"
            ],
            [
                'loc' =>"https://site.ru/products",
                'lastmod' =>"2020-12-12",
                'priority' =>0.5,
                'changefreq' =>"daily"
            ],
            [
                'loc' =>"https://site.ru/products/ps5",
                'lastmod' =>"2020-12-11",
                'priority' =>0.1,
                'changefreq' =>"weekly"
            ],
            [
                'loc' =>"https://site.ru/products/xbox",
                'lastmod' =>"2020-12-12",
                'priority' =>0.1,
                'changefreq' =>"weekly"
            ],
            [
                'loc' =>"https://site.ru/products/wii",
                'lastmod' =>"2020-12-11",
                'priority' =>0.1,
                'changefreq' =>"weekly"
            ]
        ];


        $generator
            ->setData($data)
            ->setFilePath(public_path('sitemap.xml'))
            ->generate();

        return 0;
    }
}
