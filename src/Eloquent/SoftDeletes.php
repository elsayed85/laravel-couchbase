<?php declare(strict_types=1);

namespace Elsayed85\Couchbase\Eloquent;

trait SoftDeletes
{
    use \Illuminate\Database\Eloquent\SoftDeletes;

    /**
     * Get the fully qualified "deleted at" column.
     *
     * @return string
     */
    public function getQualifiedDeletedAtColumn()
    {
        return $this->getDeletedAtColumn();
    }
}
