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

    public function lotteryRare(): Rarity
    {
        // 抽選処理
        $sum_weight = 0;
        foreach ($this->rarities as $rarity)
        {
            $sum_weight += $rarity->getRate();
        }
        $rand = rand(1, $sum_weight);
        foreach($this->rarities as $rarity)
        {
            if (($sum_weight -= $rarity->getRate()) < $rand)
            {
                return $rarity;
            }
        }
    }

    public function lotteryMultiRare(int $num): Array
    {
        $select_rares = [];
        for ($i=0; $i < $num; $i++) {
            $result = $this->LotteryRare();
            array_push($select_rares, $result);
        }
        return $select_rares;
    }


}

?>
