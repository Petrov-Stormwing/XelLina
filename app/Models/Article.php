<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @property mixed id
 * @package App\Models
 * @method static create(array $validatedAttributes)
 * @method static paginate(int $int)
 */
class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body'];

    public function path()
    {
        return route('articles.show', $this);
    }
}
