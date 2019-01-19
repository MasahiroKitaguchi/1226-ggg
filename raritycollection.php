<?php

class RarityCollection
{
    private $rarities;

    /**
    * @param Rarity[]
    */
    public function __construct(array $rarities)
    {
        $this->rarities = $rarities;
    }

    public function LotteryRare(): Rarity
    {
        // 抽選処理
        $sum_weight = 0;
        foreach ($this->rarities as $rarity)
        {
            $sum_weight += $rarity->get_rate();
        }
        $rand = rand(1, $sum_weight);
        foreach($this->rarities as $rarity)
        {
            if (($sum_weight -= $rarity->get_rate()) < $rand)
            {
                return $rarity;
            }
        }
    }

    public function LotteryMultiRare($num): Array
    {
        $select_rares = [];
        for ($i=0; $i < $num; $i++) {
            // code...
            $result = $this->LotteryRare();
            array_push($select_rares, $result);
            // echo get_class($result)."\n";
            // $select_rares[$result[$result->get_rarity()]] = $result;
            // print_r($select_rares[0]->get_rate());
        }
        // return $select_rares;
        return $select_rares;
    }
    // return $rarities[0]->get_rate();
    // return $this->rarities[1];

    // public function CountRare($rarity): Array
    // {
    //     $countrare = [];
    //     foreach ($rarity as $rare) {
    //         // code...
    //         $countrare[$rare->get_rarity()] += 1;
    //     }
    //     return $countrare;
    // }

}

?>
