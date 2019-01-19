<?php

class UnitCollection
{
    /**
    * @param Unit[]
    */
    public function __construct(array $unites)
    {
        $this->unites = $unites;
    }

    public function get_units(): Unit
    {
        return $this->unites;
    }


    public function filter_units($unit_rare): Array
    {
        $array_rare = [];
        foreach ($this->unites as $unit) {
            if ($unit->get_rare() == $unit_rare) {
                array_push($array_rare, $unit);
            }
        }
        return $array_rare;
    }

    /**
    * @param Rarity[]
    * @param int
    */
    public function SelectUnit($rarities, $num)
    {
        $lottery_units = [];
        $result_rares = $rarities->LotteryMultiRare($num);

        foreach ($result_rares as $rares)
        {
            $unit_rare = Self::filter_units($rares->get_rarity());
            $rands = rand(0, count($unit_rare)-1);
            $result = $unit_rare[$rands]->get_name();

            array_push($lottery_units, $result);
        }
        return $lottery_units;
    }

}
?>
