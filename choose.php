<?php

/**
 *
 */
class Choose
{
  /***
  レア度を抽選する
  ***/

  public static function choose_rare($rarity){
    $sum_weight = 0;

    for ($i=0; $i < count($rarity); $i++) {
        $sum_weight += $rarity[$i][3];
    }

    $rand = rand(1, $sum_weight);

    foreach($rarity as $rare){
        if (($sum_weight -= $rare[3]) < $rand) return $rare[2];
    }
  }

  /***
  レア度を必要数（$num）抽選して、Arrayにいれる。
  ***/
  public static function multi_select_rares($rarity,$num){
    $selected_rares = [];

    for ($i=0; $i < $num; $i++) {
        // code...
      $result_rares = Self::choose_rare($rarity);
      array_push($selected_rares, $result_rares);
    }
    return $selected_rares;
  }

}


 ?>
