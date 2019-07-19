<?php
class game
{
    public function _play($name,$date)
    {
        echo "fong play the game <br/>";
    }
   public static function _wacth($name,$date)
   {
       echo "fong wacth the video <br/>";
   }
}
$addgame = new game;
$addgame->gane();
game::$date();

?>