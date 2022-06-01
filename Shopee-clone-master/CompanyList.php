<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="datafinal9";
    $conn = new mysqli($servername, $username, $password,$dbname, 3306);
    $sql_hang="SELECT * FROM hang ORDER BY MAHANG DESC" ;
    $query_hang = mysqli_query($conn, $sql_hang);
?>
<div class="section-5__selection">                      
    <ul class="section-5__selection-list">
        <?php
        while ($row_hang = mysqli_fetch_array($query_hang)){
        ?>
        <li class="section-5__selection-item"><a class="section-5__selection-link" href="home.php?page=1&trang=1?CompanyList&id=<?php echo $row_hang['MAHANG'];?>"><?php echo $row_hang['TENHANG'];?></a></li>
        <?php
        }
        ?>
    </ul>
</div>
