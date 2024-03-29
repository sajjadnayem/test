<!DOCTYPE html>
<?php
   require('session_manager.php');
    if( !isset($_SESSION['user_id'])) {
        header('Location: login.php?emsg=You have no access please Login !');
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Person Data Insert Form</title>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php include('nav_bar.php'); ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Person Information Form
            </div>

            <div class="card-body">

                <?php if(isset($_GET['message'])) { ?>

                    <div class="alert alert-success" role="alert">
                        <?php echo $_GET['message']; ?>
                    </div>
                
                <?php } ?>
                

                <form action="insert_person_info.php" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="person_name" placeholder="Enter Your Name">
                    </div>
                    
                    <div class="form-group">
                        <label>Father Name</label>
                        <input type="text" class="form-control" name="person_father_name" placeholder="Enter Your Name">
                    </div>

                    <input type="submit" class="btn btn-success" name="submit" value="Save Information">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>