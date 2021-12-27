<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <div class="content-wrapper">



            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">


                        <div class="container">
                            <div class="col-lg-12">
                                <br><br>
                                <h1 class="text-info text-center">E_Warrenty Details</h1>
                                <a href="export.php"><button class="btn btn-success text-right">✓Download</button></a>
                                <br><br>
                                <table id="datatableid" class="table table-striped table-hover table-bordered">

                                    <thead>

                                        <tr class="bg-dark text-white text-center">
                                            <th>Id </th>
                                            <th>C_Name</th>
                                            <th>C_Email</th>
                                            <th>C_Phone</th>
                                            <th>C_Address</th>
                                            <th>C_City</th>
                                            <th>C_Pincode</th>
                                            <th>Product_No</th>
                                            <th>Product_Model</th>
                                            <th>Product_Year</th>
                                            <th>Product_Color</th>
                                            <th>roll_no</th>
                                            <th>c_image</th>
                                            <th>Warrenty_Type</th>
                                            <th>Arnour_install</th>
                                            <th>Arnour_area</th>
                                            <!-- <th>Gaurd_install</th>
                                            <th>Gaurd_area</th>
                                            <th>Defend_install</th>
                                            <th>Defend_area</th>
                                            <th>Preserve_install</th>
                                            <th>Preserve_area </th> -->
                                            <th>Price</th>
                                            <th>M_Name</th>
                                            <th>I_Name </th>
                                            <th>I_Number </th>
                                            <th>Invoice_no </th>
                                            <th>Purchase_Date </th>
                                            <th>Expire_Date </th>
                                            <th>D_Name </th>
                                            <th>D_Email </th>
                                            <th>Warrenty_no </th>
                                            <th>Extra </th>
                                            <th>state </th>
                                            <th>uiw </th>
                                            <th>description</th>


                                            

                                        </tr>
                                    </thead>

                                    <?php

                                    include 'conn.php';

                                    $q = "select * from e_warrenty";
                                    $query = mysqli_query($conn, $q);
                                    while ($res = mysqli_fetch_array($query)) {


                                    ?>

                                        <tr class="text-center">
                                            <td><?php echo $res['Id']; ?></td>
                                            <td><?php echo $res['C_Name']; ?></td>
                                            <td><?php echo $res['C_Email']; ?></td>
                                            <td><?php echo $res['C_Phone']; ?></td>
                                            <td><?php echo $res['C_Address']; ?></td>
                                            <td><?php echo $res['C_City']; ?></td>
                                            <td><?php echo $res['C_Pincode']; ?></td>
                                            <td><?php echo $res['Product_No']; ?></td>
                                            <td><?php echo $res['Product_Model']; ?></td>
                                            <td><?php echo $res['Product_Year']; ?></td>

                                            <td><?php echo $res['Product_Color']; ?></td>
                                            <td><?php echo $res['roll_no']; ?></td>
                                            <td><?php echo $res['c_image']; ?></td>
                                            <td><?php echo $res['Warrenty_Type']; ?></td>
                                            <td><?php echo $res['Arnour_install']; ?></td>
                                            <td><?php echo $res['Arnour_area']; ?></td>

                                            <td><?php echo $res['Price']; ?></td>
                                            <td><?php echo $res['M_Name']; ?></td>
                                            <td><?php echo $res['I_Name']; ?></td>
                                            <td><?php echo $res['I_Number']; ?></td>
                                            <td><?php echo $res['Invoice_no']; ?></td>

                                            <td><?php echo $res['Purchase_Date']; ?></td>
                                            <td><?php echo $res['Expire_Date']; ?></td>
                                            <td><?php echo $res['D_Name']; ?></td>
                                            <td><?php echo $res['D_Email']; ?></td>
                                            <td><?php echo $res['Warrenty_no']; ?></td>
                                            <td><?php echo $res['Extra']; ?></td>
                                            <td><?php echo $res['state']; ?></td>
                                            <td><?php echo $res['uiw']; ?></td>
                                            <td><?php echo $res['description']; ?></td>


                                        

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>

                        </div>


                        <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
                        <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>

                        <script>
                            $(document).ready(function() {
                                $('#datatableid').DataTable();
                            });
                        </script>
</body>

</html>