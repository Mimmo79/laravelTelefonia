<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class telefonia extends Model
{
    //

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'mysql2';

    protected $table = 'fisso_fatturazioni';
}
