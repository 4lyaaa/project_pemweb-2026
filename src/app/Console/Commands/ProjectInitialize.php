<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProjectInitialize extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Project Initialization';

    /**
     * Execute the console command.
     */
   public function handle()
{
    // Jalankan migration baru tanpa menghapus database
    $this->call('migrate', [
        '--force' => true,
    ]);

    // Generate permission Filament
    $this->call('shield:generate', [
        '--all' => true,
        '--panel' => 'admin',
    ]);

    // Seed hanya jika diperlukan
    $this->call('db:seed', [
        '--force' => true,
    ]);

    // Clear cache
    $this->call('filament:optimize-clear');
    $this->call('optimize:clear');
}
}
