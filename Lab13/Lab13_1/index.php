<?php
interface Volume{
    function increaseVolume();
    function decreaseVolume();
}
interface Playable{
    function play();
    function stop();
}

class MusicPlayer implements Volume, Playable {
    private $volume=0, $isPlaying=false;
    function increaseVolume(){
        $this->volume++;
    }
    function decreaseVolume(){
        if($this->volume>0) {
            $this->volume--;
        }
    }
    function play(){
        $this->isPlaying=true;
    }
    function stop()
    {
        $this->isPlaying=false;
    }
    function getVolume(){
        return $this->volume;
    }
    function getStatus(){
        return $this->isPlaying;
    }
}

$player = new MusicPlayer();

$player->increaseVolume();
$player->increaseVolume();
$player->increaseVolume();
$player->decreaseVolume();
$player->play();

echo $player->getVolume();
echo "\n";
echo $player->getStatus();
