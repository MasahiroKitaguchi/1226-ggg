<?php
require_once("choose.php");

/**
 *
 */
class Gacha
{

  /***
  ユニットをレア度ごとに分ける。
  array_filterでやろうと思ったが、よくわからなかった。
  そもそもこれが必要なのかわからない。こうした方が楽と思ったが不明。
  ***/

  public static function filter_units($units){
    $array_rare1 = [];
    $array_rare2 = [];
    $array_rare3 = [];
    $array_rare4 = [];
    $array_rares = [0];

    for ($i=0; $i <count($units) ; $i++) {

      switch ($units[$i][2]) {
        case 1:
          array_push($array_rare1,$units[$i]);
          break;
        case 2:
          array_push($array_rare2,$units[$i]);
          break;
        case 3:
          array_push($array_rare3,$units[$i]);
          break;
        case 4:
          array_push($array_rare4,$units[$i]);
          break;
        default:
          // code...
          break;
      }
    }

    array_push($array_rares,$array_rare1);
    array_push($array_rares,$array_rare2);
    array_push($array_rares,$array_rare3);
    array_push($array_rares,$array_rare4);

    return $array_rares;
  }

  /***
  抽選したレア度と一致するレア度ユニットのArrayからランダムでユニットを選択
  ***/
  public static function select_units($units, $num_rare){
    $choose_unit = [];
    $candidade_units = Self::filter_units($units);

    for ($i=0; $i < count($num_rare); $i++) {
      $rands = rand(0, (count($candidade_units[$num_rare[$i]])-1));
      array_push($choose_unit, $candidade_units[$num_rare[$i]][$rands][1]);
    }

      return $choose_unit;
  }




}
 ?>
