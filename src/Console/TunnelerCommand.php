<?php namespace STS\Tunneler\Console;

use Illuminate\Console\Command;
use STS\Tunneler\Jobs\CreateTunnel;
use STS\Tunneler\Tunnel;

class TunnelerCommand extends Command {
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'tunneler:activate';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates and Maintains an SSH Tunnel';

    public function handle(){
        try {
            $tunnel  = new Tunnel();
            $result = $tunnel->start();
        }catch (\ErrorException $e){
            $this->error($e->getMessage());
            return 1;
        }

        if ($result === 1 ){
            $this->info('The Tunnel is already Activated.');
            return 0;
        }

        if ($result === 2 ){
            $this->info('The Tunnel has been Activated.');
            return 0;
        }

        $this->warn('I have no idea how this happened. Let me know if you figure it out.');
        return 1;
    }
}