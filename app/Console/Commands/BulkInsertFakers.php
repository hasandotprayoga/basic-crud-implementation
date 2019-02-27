<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory as Faker;

class BulkInsertFakers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fakers:bulk-insert {count?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $count = $this->argument('count');

        if ($count<=0) {
            $count = $this->ask('Jumlahna sabaraha?');
        }
        
        // $this->info('Bismillah');

        $faker = Faker::create();

        $this->output->progressStart($count);

        for ($i = 0; $i < $count; $i++) {

            \App\Models\Fakers::create([
                'name' => $faker->name,
                'age' => rand(15,40),
                'country'=>$faker->country,
            ]);
            
            $this->output->progressAdvance();
        }
    
        $this->output->progressFinish();

    }
}
