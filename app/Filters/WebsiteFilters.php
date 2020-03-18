<?php

namespace App\Filters;

class WebsiteFilters extends Filters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = ['created','name','search'];

    /**
     * Filter the query by a given website name
     *
     * @param $search
     * @return mixed
     */
    public function search($search)
    {
        return $this->builder->where('name','like','%'.$search.'%');
    }

    /**
     * Sort the query for the name according to the name order.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function name($order)
    {
        return $this->builder->orderBy('name', $order);
    }

    /**
     * Sort the query according to the time order.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function created($order)
    {
        return $this->builder->orderBy('created_at', $order );
    }
}


