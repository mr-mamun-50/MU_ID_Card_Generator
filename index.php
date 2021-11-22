<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MU Student ID Card Generator</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="backet">
        <div class="container">
            <h1>Create Your Student ID Card</h1>

            <form action="./ID_Card.php" method="POST" enctype="multipart/form-data">

                <div class="formItems">
                    <label for="Name">Name <span>*</span> </label>
                    <input type="text" name="name" required>
                </div>

                <div class="formItems">
                    <label for="ID">ID <span>*</span> </label>
                    <input type="text" name="id" required>
                </div>

                <div class="formItems">
                    <label for="Batch">Batch <span>*</span> </label>
                    <input type="number" name="batch" required>
                </div>

                <div class="formItems">
                    <label for="Programme">Programme <span>*</span> </label>
                    <input type="text" name="programme" required>
                </div>

                <div class="formItems">
                    <label for="blood">Blood Group</label>
                    <input type="text" name="blood">
                </div>

                <div class="formItems">
                    <label for="blood">Your Photo <span>*</span></label>
                    <input type="file" name="img" required>
                </div>

                <div class="formItems btn">
                    <input name="generateBtn" type="submit" value="Generate ID Card">
                </div>

            </form>
        </div>
    </section>

</body>

</html>