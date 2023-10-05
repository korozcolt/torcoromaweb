<?php

namespace App\Console\Commands;

use App\Models\Support;
use Illuminate\Console\Command;

class UpdatePQRIdField extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:id_pqr';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Actualiza el campo id_pqr de la tabla supports a id_pqr de la tabla pqrs';

    /**
     * Execute the console command.
     *
     * @return int
     * @throws \Exception
     */
    public function handle(): int
    {
        $supports = Support::all();

        foreach ($supports as $support) {
            try {
                $support->generateUniqueRandomIdPqr();
            } catch (\Exception $e) {
                $this->error($e->getMessage());
                return 0;
            }
            $support->save();
        }

        $this->info('id_pqr values updated for existing records.');
        return 1;
    }
}
