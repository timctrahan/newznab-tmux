<?php

namespace App\Models;

use Yadakhov\InsertOnDuplicateKey;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\VideoAlias.
 *
 * @property int $videos_id FK to videos.id of the parent title.
 * @property string $title AKA of the video.
 * @property-read \App\Models\Video $video
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoAlias whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\VideoAlias whereVideosId($value)
 * @mixin \Eloquent
 */
class VideoAlias extends Model
{
    use InsertOnDuplicateKey;

    protected $table = 'videos_aliases';
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var bool
     */
    protected $dateFormat = false;

    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function video()
    {
        return $this->belongsTo(Video::class, 'videos_id');
    }
}
