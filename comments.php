<html>
<head></head>
<body>
<font face="Times New Roman"><b><p>Please leave a (useful) comment here: </p></b></font>

<form method="post">
	  Name: <br/> <input type="text" name="user"><br>
  <br/>
  Comment:
  <br/>
  <textarea name="txt" cols="25" rows="5"></textarea>
  <br><br> <input type="submit" value="Submit" name="submit" />

  <?php
  if ( isset( $_POST[ 'submit' ] ) ) {
    $com  = $_POST[ "txt" ];
	$name  = $_POST[ "user" ];
    //$file = fopen( "comments.txt", "a" );
	$file1 = "comments.txt";
	$tmp = file_get_contents($file1);
	//str_repeat('&nbsp;', 50)
	
    $a="</br>\n";
	
	$a .=date('d-m-Y')." - "."<b>".$name."</b>\n";
	$a .= "</br></br>" ;
    for ( $i = 0; $i <= strlen( $com ) - 1; $i++ ) {
      $a .= $com[ $i ];
      if ( $i % 80 == 0 && $i != 0 ) $a .= "\n</br>";
    }
    $a .= "\n</br>--------------------------------------------------------------------------------------------------\n";
	$tmp = file_put_contents($file1, $a.$tmp);
    //fclose( $file );
   echo '<script type="text/javascript">window.location ="";</script>'; // Add here
  }
  ?>

  <br>
</form>
<font face="Comic Sans MS" color="red" size="2">
  <?php
  if (file_exists("comments.txt")) {
  $file = fopen( "comments.txt", "r" );
  echo fread( $file, filesize( "comments.txt" ) );
  fclose( $file );
  }
  ?>
</font>
</body>
</html>