<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 06/07/2018
 * Time: 14:30
 */

namespace Entity;

class Player
{
    private $lifeTime;
    private $inLive;
    private $life;
    private $de;


    public function __construct()
    {
        $lifeTime = 150;
        $this->lifeTime = $lifeTime;
        $this->inLive = true;

    }

    public function Attack(MonsterEasy $monstreEasy)
    {
        $lanceMonstre = $this->MonsterDe();
        $lanceJoueur = $player->PlayerDe();
        if($lanceMonstre >= $lanceJoueur)
        {
            $player->SubitAttack();
        }
    }

    public function PlayerDe():int
    {
        $this->de = new De();
    }

    public function SubitAttack()
    {
        $this->inLive = false;
    }
    /**
     * @return mixed
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @return mixed
     */
    public function getLifeTime()
    {
        return $this->lifeTime;
    }

    private function MonsterDe()
    {
    }


}