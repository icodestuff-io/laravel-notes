<?php

declare(strict_types=1);

namespace Icodestuff\LaravelNotes\Tests\Stubs\Models;

use Icodestuff\LaravelNotes\Traits\{AuthoredNotes, HasManyNotes};
use Arcanedev\Support\Database\PrefixedModel;
use Illuminate\Support\Arr;

/**
 * @property  int  id
 */
class User extends PrefixedModel
{
    /* -----------------------------------------------------------------
     |  Traits
     | -----------------------------------------------------------------
     */

    use HasManyNotes,
        AuthoredNotes;

    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

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
