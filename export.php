<?php
    include("db.php");
    if(isset($_POST)){
        $fileName = "export_user.csv";
        echo (writeUserFile($fileName))?$fileName:"-1";
    }

    function writeUserFile($fileName){
        try {
            $user = DB::getConnect()->query("select * from user");
            $file =  fopen($fileName, "w") ;
            $fileText = "";
            fwrite($file, pack("CCC",0xef,0xbb,0xbf)); 
            $fileText = "\ufeffThis ID,USERNAME,ชื่อ,นามสกุล,เวลาลงทะเบียน\n";
            while(($row=$user->fetch_array())!=null){
                $fileText .= $row["id"].",".$row["username"].","
                            .$row["fname"].",".$row["lname"].",".$row["time_reg"]."\n";
            };
            fwrite($file,$fileText);
            return  true;
        } catch (Throwable $e) {
            echo $e->getMessage();
            return false;
        }
    }