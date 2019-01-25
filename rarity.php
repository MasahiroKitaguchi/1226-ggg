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
        $this->value = $value;
        $this->rate = $rate;
    }

    public function getRate(): int
    {
        return $this->rate;
    }

    public function getRarity(): int
    {
        return $this->value;
    }
}

?>
