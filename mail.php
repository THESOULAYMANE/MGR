        <?php


    if($_POST){

            $to = "morocco.gamingrepublic@gmail.com";
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $headers = 'From:'.$email ."\r\n" .
                        'X-Mailer: PHP/' ;

            mail($to, $subject, $message, $headers);


            	// $message ;
            	// others variables  like $_post[''];
            	// message = al data you need split with ,
            // mail (to , suje , mess , hea)
}

    ?>
    

