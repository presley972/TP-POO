<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 06/07/2018
 * Time: 15:43
 */

namespace Entity;


class MonsterEasy
{
    private $attack;

    protected $de;
    private $inLive;
    

    public function __construct ()
    {
        $this->inLive =true;
    }

    public function MonstreDe() :int
    {
        $this->de = new De();
    }

    public function Attack(Player $player)
    {
        $lanceMonstre = $this->MonstreDe();
        $lanceJoueur = $player->PlayerDe();
        if($lanceMonstre > $lanceJoueur)
        {
            $player->SubitAttack();
        }
    }

    public function SubitAttack()
    {
        $this->inLive = false;
    }

    /**
     * @return mixed
     */
    public function getDe()
    {
        return $this->de;
    }

    /**
     * @param mixed $de
     */
    public function setDe($de)
    {
        $this->de = $de;
    }

    /**
     * @return bool
     */
    public function isInLive(): bool
    {
        return $this->inLive;
    }

    /**
     * @param bool $inLive
     */
    public function setInLive(bool $inLive)
    {
        $this->inLive = $inLive;
    }
}
