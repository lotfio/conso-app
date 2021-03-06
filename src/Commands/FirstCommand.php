<?php namespace App\Commands;

/**
 *
 * @author    <contact@lotfio.net>
 * @package   Conso PHP Console Creator
 * @version   2.0.0
 * @license   MIT
 * @category  CLI
 * @copyright 2019 Lotfio Lakehal
 */

use Conso\{Conso, Command};
use Conso\Contracts\{CommandInterface,InputInterface,OutputInterface};

class FirstCommand extends Command implements CommandInterface
{
    /**
     * sub commands
     *
     * @var array
     */
    protected $sub = [

    ];

    /**
     * flags
     *
     * @var array
     */
    protected $flags = [

    ];

    /**
     * command help
     *
     * @var array
     */
    protected $help  = [

    ];

    /**
     * command description
     *
     * @var string
     */
    protected $description = 'This is FirstCommand command description.';

    /**
     * execute method
     *
     * @param  InputInterface  $input
     * @param  OutputInterface $output
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output) : void
    {
        commandHelp($this->app->invokedCommand, $output);
    }
}