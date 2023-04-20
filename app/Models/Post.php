<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @mixin Builder
     */
    use HasFactory;

    protected $attributes = [
        'contents' => 'Lorem ipsum dolor set....',
    ];
    protected $fillable = [
        'title',
        'contents'
    ];

    public function getPostDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
