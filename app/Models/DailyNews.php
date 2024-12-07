<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyNews extends Model
{
    protected $table = 'daily_news';
    protected $primaryKey = 'id';
    protected $fillable = ['category_id', 'title', 'slug', 'details', 'thumbnail', 'images', 'date', 'is_featured', 'is_top', 'is_popular', 'is_breaking', 'is_recent', 'view_count', 'status', 'created_by', 'updated_by'];

    const STATUS_ACTIVE = 'active';
    const STATUS_DEACTIVE = 'deactive';

    const STATUS_ARR = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_DEACTIVE => 'Deactive',
    ];
}
