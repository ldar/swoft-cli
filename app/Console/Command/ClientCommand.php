<?php declare(strict_types=1);

namespace Swoft\Cli\Console\Command;

use Swoft\Console\Annotation\Mapping\Command;
use Swoft\Console\Annotation\Mapping\CommandMapping;

/**
 * Class ClientCommand
 * @package Swoft\Cli\Console\Command
 * @Command()
 */
class ClientCommand
{
    /**
     * @CommandMapping()
     */
    public function tcp(): void
    {

    }

    /**
     * @CommandMapping()
     */
    public function udp(): void
    {

    }

    /**
     * @CommandMapping()
     */
    public function telnet(): void
    {

    }

    /**
     * @CommandMapping(alias="ws")
     */
    public function websocket(): void
    {

    }
}
