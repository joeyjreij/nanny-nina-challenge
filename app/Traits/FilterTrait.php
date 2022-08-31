<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait FilterTrait
{
    /**
     * @param Builder $builder
     * @param array $data
     * @return Builder
     */
    public function getFilteredQueryResult(Builder $builder, array $data): Builder
    {
        // possible to extend the filter method here, so it will be the same in every service/controller/...
        return $builder->where($data);
    }
}
