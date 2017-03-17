<?php
/**
 * Created by PhpStorm.
 * User: FRIN
 * Date: 13/03/2017
 * Time: 10:21
 */

namespace classeMetier;


class salle
{
    protected $nom;
    protected $emplacements;

    /**
     * salle constructor.
     * @param $nom
     * @param $emplacements
     */
    public function __construct($nom="", $emplacements="")
    {
        $this->nom = $nom;
        $this->emplacements = $emplacements;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getEmplacements()
    {
        return $this->emplacements;
    }

    /**
     * @param mixed $emplacements
     */
    public function setEmplacements($emplacements)
    {
        $this->emplacements = $emplacements;
    }

}