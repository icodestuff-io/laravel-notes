<?php

declare(strict_types=1);

namespace Icodestuff\LaravelNotes\Traits;

use Icodestuff\LaravelNotes\Models\Note;
use Illuminate\Database\Eloquent\Relations\HasMany;


trait AuthoredNotes
{
    /* -----------------------------------------------------------------
     |  Relationships
     | -----------------------------------------------------------------
     */

    /**
     * Relation to Many notes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function authoredNotes(): HasMany
    {
        return $this->hasMany(config('notes.notes.model', Note::class), 'author_id');
    }
}
