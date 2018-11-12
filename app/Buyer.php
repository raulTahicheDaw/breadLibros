<?php
/**
 * Created by PhpStorm.
 * User: raul
 * Date: 10/11/18
 * Time: 18:26
 */

namespace App;
use App\Scopes\BuyerScope;
use App\User;


class Buyer extends User
{
    protected $table = 'users';

    protected $dates = [
        'birth_day'
    ];

    protected static function boot()
    {
        parent::boot();

        static ::addGlobalScope(new BuyerScope);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function getCumpleanosAttribute() {
        return $this->birth_day->format('j \o\f F');
    }
}
