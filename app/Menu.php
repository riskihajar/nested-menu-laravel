<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function induk()
    {
        return $this->belongsTo(self::class);
    }

    public function sub()
    {
        return $this->hasMany(self::class, 'induk_id');
    }
}
