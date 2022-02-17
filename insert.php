<?php 

    include_once('functions.php');

    $insertdata = new DB_con();

    if(isset($_POST['insert'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];

        $sql = $insertdata->insert($firstname , $lastname , $email , $phonenumber ,  $address);

        if($sql){
            echo "<script>alert('Record Inserted Successfully');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }else{
            echo "<script>alert('Something went wrong');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <h1 class="mt-5">Insert Page</h1>
        <a href="index.php" class="btn btn-primary">Go back</a>
        <hr>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control"name="email" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">Phonenumber</label>
                <input type="text" class="form-control"name="phonenumber" required>
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <textarea name="address" id="" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="insert">Insert</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>