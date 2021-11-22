<?php

    if(isset($_POST['generateBtn'])) {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $batch = $_POST['batch'];
        $programme = $_POST['programme'];
        $blood = $_POST['blood'];

        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp, "upload/".$img);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="backet">

        <div class="idShape">

            <div class="logo">
                <!-- <img src="./images/mu_logo.png" alt="MU Logo"> -->
            </div>

            <div class="title">Student ID Card</div>

            <div class="box">
                <div class="pic col">
                    <img src="./upload/<?php if(isset($img)) {
                        echo $img;
                    } ?>" alt="Your Photo">
                </div>

                <div class="bio col">

                    <table>
                        <tr>
                            <td colspan="3">
                                <h2> <?php if(isset($name)) {
                                    echo $name;
                                } ?> </h2>
                            </td>
                        </tr>
                        <tr>
                            <td> ID No </td>
                            <td> : </td>
                            <td> <?php if(isset($id)) {
                                    echo $id;
                                } ?> </td>
                        </tr>
                        <tr>
                            <td> Programme </td>
                            <td> : </td>
                            <td> <?php if(isset($programme)) {
                                    echo $programme;
                                } ?> - <?php if(isset($batch)) {
                                    echo $batch;
                                } ?>th batch </td>
                        </tr>
                        <tr>
                            <td> Blood Group </td>
                            <td> : </td>
                            <td style="color: red;"> <?php if(isset($blood)) {
                                    echo $blood;
                                } ?> </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="color">
                <div class="grayC"></div>
                <div class="redC"></div>
                <div class="blueC"></div>
            </div>

        </div>
    </section>

</body>

</html>