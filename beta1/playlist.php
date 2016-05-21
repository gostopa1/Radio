<?php


// setting the directory to search for mp3 files
$dir = "../mp3/";

// reading the directory and inserting the mp3 files in the playlist array
$playlist = array();
$fdir = opendir($dir);
while($i = readdir($fdir)) {
   // if a .mp3 string is found, add the file to the array
   if (strpos(strtolower($i),".mp3") !== false)
  	   $playlist[] = $i;
	   
}
// close the directory
closedir($fdir);

//echo $playlist[2];

sort($playlist);// make an alphabetical ordered list (if you don't want an ordered list, just comment this line)
shuffle($playlist);// make a randomized list (if you don't want a randomized list, just comment this line)

//header("Content-type: text/xml");
// echoing the playlist to flash
//echo "<player showDisplay=\"yes\" showPlaylist=\"yes\" autoStart=\"no\">\n";
$a="mp3=";
$b='<object type="application/x-shockwave-flash" data="dewplayer-rect.swf" width="240" height="20" id="dewplayer" name="dewplayer"> <param name="wmode" value="transparent" /><param name="movie" value="dewplayer-rect.swf" /> <param name="flashvars" value="';
//echo sizeof($playlist);
$c='&amp;autostart=1&amp;autoreplay=1&amp;showtime=1&amp;randomplay=0&amp;nopointer=0&amp;volume=50" /> </object>';
for ($i=0; $i<sizeof($playlist); $i++) {
   // for the title it filters the directory and the .mp3 extension out
   $title = str_replace(".mp3","",$playlist[$i]);
   echo "{"."\n";
   echo "\n";
   echo " ";
   echo "title:".'"'.$title.'"'.","."\n";
   echo " ";
   echo "mp3:".'"'."../mp3/".$playlist[$i].'"'."\n";
   if ($i<sizeof($playlist)-1){
   echo "},"."\n";
   }
   else{
   echo "}"."\n";
   }
   
   
   // clean filename (convert "_" into " ")
   $title = str_replace("_", " ", $title);
   //echo "  <song path=\"$dir{$playlist[$i]}\" title=\"$title\" />";
   
   $a=$a."./mp3/".$playlist[$i]."|";
}
//echo "</player>";
//echo $b.$a.$c;
//echo "<title>".$b.$a.$c."</title>";
//echo 'window.alert("'.$b.$a.$c.'")';
?>