<?php declare(strict_types=1);

use Elsayed85\Couchbase\Eloquent\Model as Eloquent;

class Address extends Eloquent
{
    protected $connection = 'couchbase-not-default';
    protected static $unguarded = true;

    public function addresses()
    {
        return $this->embedsMany('Address');
    }
}
