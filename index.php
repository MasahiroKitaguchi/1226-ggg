

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>GACHA CHECK</title>
</head>
<body>
<?php

  /**
   * ガチャ仕様
   *
   * まずレアリティを抽選し、抽選されたレアリティのユニットの中からランダムに1対を選択して下さい
   */

  // [ID, 表示名, レア度, 確率]
$rarity = [
      [1, '*', 1, 7400],
      [2, '**', 2, 2000],
      [3, '***', 3, 500],
      [4, '****', 4, 100],
  ];
  // [ID, 表示名, レア度ID]
$units = [
      [1, 'Apescythe Follower', 4],
      [2, 'Followerviridian Glass', 4],
      [3, 'Dogscythe Runner', 4],
      [4, 'Chopperwool Hair', 4],
      [5, 'Wandererslow Burn', 4],
      [6, 'Hornbristle Grabber', 3],
      [7, 'Vulturesilent Dolphin', 3],
      [8, 'Spearalder Lightning', 3],
      [9, 'Goatlavender Slave', 3],
      [10, 'Samuraisand Edge', 3],
      [11, 'Baneweak Reaper', 3],
      [12, 'Dogcerulean Snap', 3],
      [13, 'Moosepollen Legs', 3],
      [14, 'Stalkerwind Soarer', 3],
      [15, 'Snarlvoid Warlock', 3],
      [16, 'Stingerfancy Whimsey', 3],
      [17, 'Tonguepepper Duke', 3],
      [18, 'Lighterplump Lord', 3],
      [19, 'Warriorriver Zebra', 3],
      [20, 'Moosebog Whip', 3],
      [21, 'Hunterglow Whip', 2],
      [22, 'Carpribbon Touch', 2],
      [23, 'Stonerose Grin', 2],
      [24, 'Cloudtranslucent Swallow', 2],
      [25, 'Pythonclever Shield', 2],
      [26, 'Kangaroobrook Gambler', 2],
      [27, 'Handspring Scourge', 2],
      [28, 'Facegossamer Trader', 2],
      [29, 'Jawsnow Gem', 2],
      [30, 'Warriorjewel Watcher', 2],
      [31, 'Sageroan Thief', 2],
      [32, 'Tigerdew King', 2],
      [33, 'Unicornfoul Spur', 2],
      [34, 'Hyenaspice Ant', 2],
      [35, 'Collardog Horn', 2],
      [36, 'Geckospangle Head', 2],
      [37, 'Kittensheer Glass', 2],
      [38, 'Diveprickle Jay', 2],
      [39, 'Thumbhot Boar', 2],
      [40, 'Bitelizard Saver', 2],
      [41, 'Noselead Lifter', 2],
      [42, 'Biternoble Elk', 2],
      [43, 'Lizardthread Follower', 2],
      [44, 'Spritepool Slayer', 2],
      [45, 'Keepersly Shoulder', 2],
      [46, 'Bellyflicker Rover', 2],
      [47, 'Chopperzinc Razor', 2],
      [48, 'Gargoylerelic Witch', 2],
      [49, 'Howlerprong Devourer', 2],
      [50, 'Gullsunset Rabbit', 2],
      [51, 'Tailjungle Fighter', 1],
      [52, 'Runnercedar Donkey', 1],
      [53, 'Snapperbald Spike', 1],
      [54, 'Toezest Roar', 1],
      [55, 'Dartrattle Serpent', 1],
      [56, 'Maskfierce Donkey', 1],
      [57, 'Slavejungle Slicer', 1],
      [58, 'Houndjust Hair', 1],
      [59, 'Lightertwisty Iguana', 1],
      [60, 'Kickerregal Spirit', 1],
      [61, 'Pawsnapdragon Wasp', 1],
      [62, 'Legstopaz Shield', 1],
      [63, 'Jackalgentle Healer', 1],
      [64, 'Slavelapis Venom', 1],
      [65, 'Stallionbattle Hiss', 1],
      [66, 'Fancieroil Scorpion', 1],
      [67, 'Fanciermagenta Eagle', 1],
      [68, 'Tonguesharp Fly', 1],
      [69, 'Bugwave Jaguar', 1],
      [70, 'Foeapple Arm', 1],
      [71, 'Cougarflicker Storm', 1],
      [72, 'Tigerlace Bane', 1],
      [73, 'Whalesly Eater', 1],
      [74, 'Boarfork Griffin', 1],
      [75, 'Nosepink Hide', 1],
      [76, 'Turnersilk Ocelot', 1],
      [77, 'Legenddaffodil Boot', 1],
      [78, 'Dancertiny Duke', 1],
      [79, 'Hairmeadow Mistress', 1],
      [80, 'Whaleorchid Flier', 1],
      [81, 'Mousecandle Witch', 1],
      [82, 'Deertime Buffalo', 1],
      [83, 'Weavercloud Ox', 1],
      [84, 'Catcherstripe Iguana', 1],
      [85, 'Centaurcord Goat', 1],
      [86, 'Herontulip Beak', 1],
      [87, 'Weedspring Antelope', 1],
      [88, 'Shiftspectrum Bee', 1],
      [89, 'Vipershallow Death', 1],
      [90, 'Drifterholly Leader', 1],
      [91, 'Toeglow Donkey', 1],
      [92, 'Cockatoofair Vulture', 1],
      [93, 'Cockatoobrave Twister', 1],
      [94, 'Stagapricot Jester', 1],
      [95, 'Weavercrocus Hugger', 1],
      [96, 'Heronring Ridge', 1],
      [97, 'Eaterweed Giver', 1],
      [98, 'Razorolive Flasher', 1],
      [99, 'Sharkstorm Fancier', 1],
      [100, 'Scourgenettle Cat', 1],
  ];

function get_rare($rarity){

  for ($i=0; $i < count($rarity); $i++) {
      $sum_weight += $rarity[$i][3];
  }

  $rand = rand(1, $sum_weight);

  foreach($rarity as $rare){
      if (($sum_weight -= $rare[3]) < $rand) return $rare[2];
  }
}

$result_rare = get_rare($rarity);

// getRare()の結果からレア度を絞り、その中から抽選して取得する
function select_units($units, $result_rare){
  $array_unit = [];

  foreach ($units as $unit) {

    if($unit[2] == $result_rare){
      array_push($array_unit, $unit);
    }
  }
  return $array_unit;
}

$array_units = select_units($units, $result_rare);
$rands = rand(0, (count($array_units)-1));

$get_unit = $array_units[$rands];

?>

  <div>
    <input type="text" name="aaa" value="<?php echo "ID:".$get_unit[0]." ".$get_unit[1]; ?>">
  </div>
  <form method="POST" action="index.php">
    <input type="submit" value="更新">
  </form>
</body>
</html>
