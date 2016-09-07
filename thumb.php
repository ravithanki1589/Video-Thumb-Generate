
<?php
$ffmpeg = 'C:\xampp\ffmpeg.exe';  // path of ffmpeg.exe file

//video dir  
$video  = '1472535576147.mp4';   
echo $video ;
//where to save the image  
$image = '1472535576147.jpg';  

//time to take screenshot at  
$interval = 1;  

//screenshot size  pn 
$size = '500*315';  

//ffmpeg command  
//$cmd = "$ffmpeg -i ".$video "-deinterlace -an -ss".$interval". -f mjpeg -t 1 -r 1 -y    -s". $size." ". $image." 2>&1";  
$cmd="$ffmpeg -i ".$video." -ss 00:00:14.435 -f image2 -vframes 1 ". $size." ".$image;
echo $cmd;
//$cmd = "$ffmpeg  -i $video -f mjpeg -vframes 1 -s 150x150 -an myimage.jpg";
exec($cmd);
//$return = '$cmd';  
//print_r($outputData);
?>
