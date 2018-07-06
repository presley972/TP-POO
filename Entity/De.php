<?php
/**
 * Created by PhpStorm.
 * User: presleylupon
 * Date: 06/07/2018
 * Time: 14:37
 */

namespace Entity;


class De
{
    private $nbrMin;
    private $nbrMax;

    public function __construct()
    {
    }

    public function LanceLeDe()
    {
        return rand(1,6);
    }

    /**
     * @return mixed
     */
    public function getNbrMin()
    {
        return $this->nbrMin;
    }

    /**
     * @return mixed
     */
    public function getNbrMax()
    {
        return $this->nbrMax;
    }
}