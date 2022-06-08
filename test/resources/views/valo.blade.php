<?php
foreach($array as $key => $value){
        //名前とサモナーレベル出力
        if($key == "name" || $key == "summonerLevel"){
        }
        //ddragonからアイコンの画像を取得
        if($key == "profileIconId"){
            print '<image src="http://ddragon.leagueoflegends.com/cdn/9.9.1/img/profileicon/'.$value.'.png" width=100px; heigth=100px;></image>';
            echo "<br>";
        }
    }
?>
@foreach($array as $key => $value)
   @if ($key == "name" || $key == "summonerLevel")
   <h2>{{$key}}<small class="text-muted">{{$value}}</small></h2>
   @endif
   @endforeach