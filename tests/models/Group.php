<?php declare(strict_types=1);

use Elsayed85\Couchbase\Eloquent\Model as Eloquent;

class Group extends Eloquent
{
    protected $connection = 'couchbase-not-default';
    protected $table = 'groups';
    protected static $unguarded = true;

    public function users()
    {
        return $this->belongsToMany('User', null, 'groups', 'users');
    }
}
