<?php

namespace App\Console\Commands;

use Goutte;
use App\Checker;

use Illuminate\Console\Command;

class ScrapeCheckers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:execute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape Aftonbladet and store checkers count in DB';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

      // Scrape website
      $crawler = Goutte::request('GET', 'https://www.aftonbladet.se');
      $checkers = $crawler->filter('.abSymbBo')->count();
      // Create new class
      $checker = new Checker;
      // insert checkers count
      $checker->checkers = $checkers;
      // save it to db
      $checker->save();
      // send info message to console.
      $this->info('Inserted ' . $checkers . ' checkers into DB');

    }
}
