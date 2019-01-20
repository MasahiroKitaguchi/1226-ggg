<?php
require_once('Information.php');

class Rarity extends Information
{

    /** @var int */
    private $value;
    /** @var int */
    private $rate;

    public function __construct(int $id, string $name, int $value, int $rate)
    {
        parent::__construct($id, $name);
        $this->id = $id;
        $this->name = $name;
        $this->value = $value;
        $this->rate = $rate;
    }

    public function get_rate(): int
    {
        return $this->rate;
    }

    public function get_rarity(): int
    {
        return $this->value;
    }
}

?>
