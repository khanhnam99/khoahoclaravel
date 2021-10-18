<?php

namespace App\Models\Roles;

use App\Models\Users\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    use HasFactory;

    const TABLE = 'roles';
    protected $table = self::TABLE;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
       // return $this->belongsToMany(User::class, 'role_user', 'user_id', 'role_id');
    }
    public function pivotRole() {
        return $this->belongsToMany(User::class, 'role_user', 'user_id', 'role_id');
    }

    public function pivotRoleActive() {

        return $this->belongsToMany(User::class)->withPivot('active', 'created_by');

       // return $this->belongsToMany(User::class)->wherePivot('active', 1);

       // return $this->belongsToMany(User::class)->wherePivotIn('active', [0, 1]);

    }
}
