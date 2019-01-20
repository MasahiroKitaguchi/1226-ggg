<?php
require_once('Information.php');

class Unit extends Information
{
    /** @var Rarity */
    private $rarity;

    public function __construct(int $id, string $name, Rarity $rarity)
    {
        parent::__construct($id, $name);

        $this->id = $id;
        $this->name = $name;
        $this->rarity = $rarity;
    }

    public function get_rare(): int
    {
        $a = $this->rarity;
        return $a->get_rarity();
    }

}

?>
