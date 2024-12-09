<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    protected $table = 'resorts';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'slug', 'short_description', 'details', 'thumbnail', 'images', 'status', 'created_by', 'updated_by'];

    const STATUS_ACTIVE = 'active';
    const STATUS_DEACTIVE = 'deactive';

    const STATUS_ARR = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_DEACTIVE => 'Deactive',
    ];
}
