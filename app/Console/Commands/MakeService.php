<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;

class MakeService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $className = $name;
        $filePath = app_path('Services') . '/' . $className . '.php';

        if (File::exists($filePath)) {
            $this->error('Service class already exists!');
            return;
        }

        $namespace = 'App\Services';

        File::ensureDirectoryExists(app_path('Services'));

        File::put($filePath, "<?php\n\nnamespace $namespace;\n\nclass $className\n{\n   //\n}\n");

        $this->info("Service class $className created successfully!");

        return Command::SUCCESS;
    }
}
