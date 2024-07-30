<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'linked_in',
        'photo', // Add this if you are uploading files
        // Add other attributes as necessary
    ];

    protected $relations = ['team_member_roles'];

    public function teamMemberRoles()
    {
        return $this->belongsToMany(TeamMemberRole::class, 'team_member_roles');
    }
}
