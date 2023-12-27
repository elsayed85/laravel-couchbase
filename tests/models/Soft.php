<?php declare(strict_types=1);

use Elsayed85\Couchbase\Eloquent\Model as Eloquent;
use Elsayed85\Couchbase\Eloquent\SoftDeletes;

class Soft extends Eloquent
{
    use SoftDeletes;

    protected $connection = 'couchbase-not-default';
    protected $table = 'soft';
    protected static $unguarded = true;
    protected $dates = ['deleted_at'];
}
