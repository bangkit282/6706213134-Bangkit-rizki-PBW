<html>
    <body>
        <?php
        if (isset($_POST["submit"])){
            $name= $_POST ["name"];
            $email= $_POST["email"];
            $website= $_POST["website"];
            $comment= $_POST["comment"];
            $gender= $_POST["gender"];
        }
        else{
            die("Maaf, kamu tidak bisa mengakses halaman ini!");
        }
        if(!empty($name)){
            if(preg_match("/^[a-zA-Z \-\.\']*$/",$name)){
                echo "inputan anda salah!
                hanya ruang putih, dot(.), and dash(-) diperbolehkan <br>";
            }else{
                $name = test_input($name);
                echo "Terima kasih <b>". $name."</b><br>";
            }
        }else{
            echo ("nama dibutuhkan <br>");
        }
        if(!empty($email)){
            if(filter_var($_email, FILTER_VALIDATE_EMAIL)){
                echo "format email anda salah!
                hanya ruang putih, dot(.), and dash(-) diperbolehkan <br>";
            }else{
                $email = test_input($email);
                echo "email anda adalah : ". $email."<br>";
            }
        }else{
            echo ("email dibutuhkan <br>");
        }
        if(!empty($website)){
            if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*
            [-a-z0-9+&@#\/%=~_|i",$website)){
                echo "URL salah<br>";
            }else{
                $website = test_input($website);
                echo "website anda adalah : ". $website."<br>";
            }
        }else{
            echo ("website anda : tidak ada<br>");
        }
        if(!empty($comment)){
            $comment = test_input($comment);
            echo "komentar anda adalah : ".$comment."<br>";
        }else{
            echo"komentar anda : kosong<br>";
        }
        if(!empty($gender)){
            echo "Anda adalah".$gender."<br>";
        }else{
            echo ("Gender dibutuhkan");
        }

        function test_input($data){
        $data = trim($data);
        $data = stripcslashes($data);
        return $data;
    }
    ?>
    </body>
    </html>