<?php

declare(strict_types=1);

namespace Icodestuff\LaravelNotes\Database;

use Arcanedev\Support\Database\Migration as BaseMigration;

abstract class Migration extends BaseMigration
{
    /* -----------------------------------------------------------------
     |  Constructor
     | -----------------------------------------------------------------
     */

    /**
     * Migration constructor.
     */
    public function __construct()
    {
        $this->setConnection(config('notes.database.connection'));
        $this->setPrefix(config('notes.database.prefix'));
    }
}
