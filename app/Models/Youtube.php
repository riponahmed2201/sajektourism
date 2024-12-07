<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    protected $table = 'youtubes';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'link', 'status', 'created_by', 'updated_by'];

    const STATUS_ACTIVE = 'active';
    const STATUS_DEACTIVE = 'deactive';

    const STATUS_ARR = [
        self::STATUS_ACTIVE => 'Active',
        self::STATUS_DEACTIVE => 'Deactive',
    ];
}
