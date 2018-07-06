<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 06/07/2018
 * Time: 15:58
 */

namespace Entity;


class MonsterHard extends MonsterEasy
{
    const DEGATSSORT = 5;


    public function __construct ()
    {
        parent->estVivant = true;
    }

    public function Attaque($joueur)
    {
        parent::Attaque($joueur);
        $lanceMonstre = $this->LanceLeDe();
        $lanceJoueur = $joueur->PlayerDe();
        if($lanceMonstre > $lanceJoueur)
        {
            $joueur->SubitDegats($degats);
        }
    }

    public function SortMagique()
    {
        $valeur = $de->LanceLeDe();
        if($valeur == 6)
        {
            return 0;
        }
        return DEGATSSORT * $valeur;
    }
}