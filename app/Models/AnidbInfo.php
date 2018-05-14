<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AnidbInfo
 *
 * @property-read \App\Models\AnidbEpisode $episode
 * @property-read \App\Models\AnidbTitle $title
 * @mixin \Eloquent
 */
class AnidbInfo extends Model
{
    /**
     * @var string
     */
    protected $primaryKey = 'anidbid';

    /**
     * @var bool
     */
    protected $dateFormat = false;

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $guarded = [];

    public function title()
    {
        return $this->belongsTo(AnidbTitle::class, 'anidbid');
    }

    public function episode()
    {
        return $this->belongsTo(AnidbEpisode::class, 'anidbid');
    }
}
