<?php declare(strict_types=1);

use Elsayed85\Couchbase\Eloquent\Model as Eloquent;

class Photo extends Eloquent
{
    protected $connection = 'couchbase-not-default';
    protected $table = 'photos';
    protected static $unguarded = true;

    public function imageable()
    {
        return $this->morphTo();
    }
}
