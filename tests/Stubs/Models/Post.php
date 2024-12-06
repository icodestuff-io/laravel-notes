<?php

declare(strict_types=1);

namespace Icodestuff\LaravelNotes\Tests\Stubs\Models;

use Icodestuff\LaravelNotes\Traits\HasOneNote;
use Arcanedev\Support\Database\PrefixedModel;
use Illuminate\Support\Arr;

/**
 * @property  int     id
 * @property  string  title
 * @property  string  content
 */
class Post extends PrefixedModel
{
    /* -----------------------------------------------------------------
     |  Traits
     | -----------------------------------------------------------------
     */

    use HasOneNote;

    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content'];

    /* -----------------------------------------------------------------
     |  Constructor
     | -----------------------------------------------------------------
     */

    /**
     * Note constructor.
     *
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $config = config('notes.database', []);

        $this->setConnection(Arr::get($config, 'connection'));
        $this->setPrefix(Arr::get($config, 'prefix'));
    }
}
