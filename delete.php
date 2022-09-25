 <!-- delete data -->
 <?php
    include('conn.php');
    
        $id = $_GET['id'];
        $dq = "delete from book_form where id=$id";
        $drs = mysqli_query($con, $dq);
        if ($drs) {
    ?>
         <script>
             alert("data deleted !");
         </script>
     <?php
        } else {
        ?>
         <script>
             alert("data not deleted !");
         </script>
 <?php
        }
    
    header('location:adpg1.php');
    ?>