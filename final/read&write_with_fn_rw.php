<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
//open file
    $fp =@fopen("sample.txt", "r"); 
    if ($fp){
        $fpWrite =@fopen("sample.dat", "w"); 
        if ($fpWrite){
            while (!feof($fp)){
                $data =@fgets($fp ); fwrite($fpWrite, $data);
            }
            fclose($fp);
            fclose($fpWrite);
            $fpRead =@fopen("sample.dat", "r"); 
            while (!feof($fpRead)){
                $data =fread($fpRead, 20);
                echo $data ."<br>"; 
            }
            fclose($fpRead); 
        }
        else {
            die ("ไม่สามารถเปิดไฟล์ Sample.dat เพื่อเขียนได้ !");
            } 
        }
        else {
            die ("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ !");
            }
    ?>
</body>
</html>