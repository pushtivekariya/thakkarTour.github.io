<?php
session_start();
if (!isset($_SESSION['adlogid'])) {
    echo "<script>alert('please login admin');</script>";
    header('location:ad_log.php');
}
if (isset($_POST['alogout'])) {
    header('location:ad_log.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('header.php');
    ?>
   
    <style>
        table {
            border-collapse: collapse;
            border-color: #fff;
            box-shadow: 5px 10px 20px 5px;
            border-radius: 10px;
            margin: auto;
            border-radius: 20px;
        }

        td,
        th {
            padding: 8px 30px;
            text-align: center;
            color: gray;
            border-radius: 20px;
        }

        th {
            text-transform: uppercase;
            font-weight: 500;
            font-size: 2.5rem;
            color: #8e44ad;
        }

        td {
            font-size: 2rem;
        }

        .fa {
            font-size: 30px;
        }

        .fa-pencil-square {
            color: blue;
        }

        .fa-trash {
            color: red;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        input {
            font-size: 20px;
            background-color: lightgrey;
            border-radius: 20px;
            margin-left: 200px;
            padding: 1.2rem;
            margin-right: 20px;
        }

        span {
            font-size: 20px;
            margin-right: 30px;
        }
    </style>
</head>

<body>
<section class="header">
      <?php
      include('ad_head.php');
      ?>
    </section>

    <div class="heading" style="background:url(imgs/fhead.jpg) no-repeat">
        <h1>welcome : <?php echo $_SESSION['adlogid'] ?></h1>
        <form method="POST"> <button name="alogout" class="btn btn-dark">logout</button> </form>
    </div>

    <!-- booking form update and delete -->
    <div class="main-div">
        <h1 class="heading-title">tourist details</h1>
    </div>
    <form action="" method="GET">
        <div class="col-sm-9">
            <div class="input-group mb-3 input-group-lg">
                <span>search data : </span>
                <input type="text" placeholder="search here..." name="search" id="myInput" onkeyup="searchFun()"></br>
                <button type="submit" class="btn btn-primary">reset</button>
            </div>
        </div>
    </form>
    <script>
        const searchFun = () => {
            let filter = document.getElementById('myInput').value.toUpperCase();
            let myTable = document.getElementById('myTable');
            let tr = myTable.getElementsByTagName('tr');
            for (var i = 0; i < tr.length; i++) {
                let td = tr[i].getElementsByTagName('td')[1];
                if (td) {
                    let textval = td.textContent || td.innerHTML;

                    if (textval.toUpperCase().indexOf(filter) > -1) {
                        tr[1].style.display = " ";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <table id="myTable">
        <thead>
            <tr class="head">
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>location</th>
                <th>guests</th>
                <th>arrivals</th>
                <th>leaving</th>
                <th colspan="2">operation</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                include('conn.php');
                $q = "select * from book_form";
                $rs = mysqli_query($con, $q);
                $num = mysqli_num_rows($rs);
                $res = mysqli_fetch_array($rs);
                while ($res = mysqli_fetch_array($rs)) {
                ?>
                    <td><?php echo $res['id']; ?></td>
                    <td><?php echo $res['name']; ?></td>
                    <td><?php echo $res['email']; ?></td>
                    <td><?php echo $res['phone']; ?></td>
                    <td><?php echo $res['address']; ?></td>
                    <td><?php echo $res['location']; ?></td>
                    <td><?php echo $res['guests']; ?></td>
                    <td><?php echo $res['arrivals']; ?></td>
                    <td><?php echo $res['leaving']; ?></td>
                    <td><a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="update"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
                    <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
        </tbody>
    <?php
                }
    ?>


    </table>


    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

</body>

</html>