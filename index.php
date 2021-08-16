<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>username</th>
            <th>ชื่อ</th>
            <th>สกุล</th>
        </tr>
        <tr>
            <?php 
                include(__DIR__."\\db.php");
                $user = DB::getConnect()->query("select * from user");
                while(($row=$user->fetch_array())!=null){
                    echo "<tr>".
                            "<td>".$row["id"]."</td>".
                            "<td>".$row["username"]."</td>".
                            "<td>".$row["fname"]."</td>".
                            "<td>".$row["lname"]."</td>".
                        "</tr>";
                }
            ?>
        </tr>
    </table>
    <button onClick="expoertCSV()">ส่งออกเป็น CSV</button>
    <script>
        async function expoertCSV(){
            let data = {id:[1,2,3]};
                $.ajax("export.php",{
                        method: 'POST',
                        contentType:'application/x-www-form-urlencoded',
                        data: JSON.stringify(data)
                }).done((response)=>{
                        if(response!="-1"){
                            location.href = location.href+"/"+response;
                        }else{
                            alert("เกิดข้อผิดพลาด")
                        }
                });
        }
    </script>
</body>
</html>