<?php include('header.php'); ?>

<main class="sport">
    <section class="trending">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-trending">
                        <div class="content-left">
                            RESULT SEARCH
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <?php 
                    
                    $connection = mysqli_connect('','root','','databasenew');

                    if (!$connection) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $query = '';
                    if(isset($_GET['query'])) {
                        $query = $_GET['query'];

                        $sql = "SELECT * FROM tbl_news WHERE title LIKE '%$query%'";

                        $result = mysqli_query($connection, $sql);
                        if (!$result) {
                            die("Query failed: " . mysqli_error($connection));
                        }

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
                            <div class="col-4">
                                <figure>
                                    <a href="">
                                        <div class="thumbnail">
                                            <img src="../admin/assets/image/'.$row['thumbnail'].'" style="width:350px; height:200px; object-fit:cover;">
                                        </div>
                                        <div class="detail">
                                            <h3 class="title">'.$row['title'].'</h3>
                                            <div class="date">'.$row['created_at'].'</div>
                                            <div class="description">'.$row['description'].'</div>
                                        </div>
                                    </a>
                                </figure>
                            </div>
                            ';
                        }
                    }
                    
                    
                    mysqli_close($connection);
                ?>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>
