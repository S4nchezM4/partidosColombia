<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Game
 *
 * @property $id
 * @property $game_date
 * @property $local_team
 * @property $visiting_team
 * @property $user_id
 * @property $home_goals
 * @property $visiting_goals
 * @property $created_at
 * @property $updated_at
 *
 * @property Team $team
 * @property Team $team
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Game extends Model
{
    
    static $rules = [
		'game_date' => 'required',
		'local_team' => 'required',
		'visiting_team' => 'required',
		'user_id' => 'required',
		'home_goals' => 'required',
		'visiting_goals' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['game_date','local_team','visiting_team','user_id','home_goals','visiting_goals'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function team()
    {
        return $this->hasOne('App\Models\Team', 'id', 'visiting_team', 'local_team');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id', 'name');
    }
    

}
