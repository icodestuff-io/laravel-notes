<?php

declare(strict_types=1);

namespace Icodesutff\LaravelNotes\Tests\Stubs\Models;

class UserWithAuthorId extends User
{
    /**
     * Get the current author's id.
     *
     * @return mixed
     */
    protected function getCurrentAuthorId()
    {
        return $this->getKey();
    }
}
