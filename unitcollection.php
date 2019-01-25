<?php

class UnitCollection
{
    /**
    * @param Unit[]
    */
    public function __construct(array $units)
    {
        $this->units = $units;
    }

    public function getUnits(): Unit
    {
        return $this->units;
    }


    private function filterUnits(int $unit_rare): Array
    {
        $array_rare = [];
        foreach ($this->units as $unit) {
            if ($unit->getRare() == $unit_rare) {
                array_push($array_rare, $unit);
            }
        }
        return $array_rare;
    }

    public function selectUnit(RarityCollection $rarities, int $num)
    {
        $lottery_units = [];
        $result_rares = $rarities->lotteryMultiRare($num);

        foreach ($result_rares as $rares)
        {
            $unit_rare = Self::filterUnits($rares->getRarity());
            $rands = rand(0, count($unit_rare)-1);
            $result = $unit_rare[$rands]->getName();

            array_push($lottery_units, $result);
        }
        return $lottery_units;
    }

}
?>
