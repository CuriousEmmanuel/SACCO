<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styld.css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/cssall.main.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        .img {
width: 70px;
height: 70px;
cursor: pointer;
border-radius: 50%;
}
    </style>
    
</head>-->
<?php include("header.php") ?>
<?php

if (isset($_GET['member_id'])) {
    $member_id = $_GET['member_id'];

    $query = "SELECT members.ID members.Full_name,members.id_number,members.phone_number,members.email,members.post,members.reg_date,members.member_status,members.photo,members.address,";
    $query .= "accounts.acc_id,accounts.shares,accounts.creation_date,accounts.savings,accounts.merry_go,accounts.fee";
    $query .= "FROM members";
    $query .= "LEFT JOIN accounts ON members.ID = accounts.acc_id";

    $profile_query = mysqli_query($connection, $query);
    if (!$profile_query) {
        die("Error is profile display " . mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($profile_query)){
        
    }
}



?>

<body>

    <div class="container my-5 border">

        <div class="row">
            <a class="col-lg-2  btn btn-primary" href="index.php?source=accounts.php">Back</a>
            <h1 style="text-align: center;">User Details</h1>
            <figure style="text-align: center; border-radius: 50%;">
                <img width="200px" style="border-radius: 50%;" src="images/20230316_125739.jpg" alt="">
                <figcaption> NAME : KEVIN KAKAI</figcaption>
            </figure>

            <div class="card-body">
                <table class="table table-bordered ">
                    <tr>
                        <th>ID</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>Post</th>
                        <td>Member</td>
                    </tr>

                    <tr>
                        <th>Registration Date</th>
                        <td>12/05/2021</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>Nzoia</td>
                    </tr>
                    <!--<input class="form-control" id="contact" name="contact" type="text" value="<?php echo $result['contactno']; ?>"  pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required />-->
                    <tr>
                        <th>Contact No.</th>
                        <td colspan="3">0700101155</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td colspan="3">kevinkakai@gmail.cpm</td>
                    </tr>


                    <tr>
                        <th>ID Number</th>
                        <td colspan="3">40199381</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>