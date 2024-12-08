<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'slug', 'details', 'status', 'created_by', 'updated_by'];

    const STATUS_ACTIVE = 'active';
    const STATUS_DEACTIVE = 'deactive';

    const STATUS_ARR = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_DEACTIVE => 'Deactive',
    ];
}
