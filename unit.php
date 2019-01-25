<?php
require_once('Information.php');

class Unit extends Information
{
    /** @var Rarity */
    private $rarity;

    public function __construct(int $id, string $name, Rarity $rarity)
    {
        parent::__construct($id, $name);
        $this->rarity = $rarity;
    }

    public function getRare(): int
    {
        $a = $this->rarity;
        return $a->getRarity();
    }

}

?>
