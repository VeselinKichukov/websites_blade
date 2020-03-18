<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    /**
     * Attributes to guard against mass assignment.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     *  The path to the website.
     *
     * @return string
     */
    public function path()
    {
        return "/websites/{$this->id}";
    }

    /**
     * The owner of the website.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Apply all relevant website filters.
     *
     * @param Builder $query
     * @param WebsiteFilters $filters
     * @return Builder
     */
    public function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }
}
