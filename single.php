<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/69a2be8018.js" crossorigin="anonymous"></script>

    <!--- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@100&family=Candal&family=Lora&family=Philosopher&display=swap" rel="stylesheet">
    
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title><?php echo $post['title']; ?> | TeamOne</title>
</head>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Post Slider -->
        
        <!-- //Post Slider -->

        <!--- Content -->
        <div class="content clearfix">

            <!-- Main Content Wrapper -->

            <div class="main-content-wrapper">
                <div class="main-content single">
                    <h1 class="post-title"><?php echo $post['title']; ?></h1>
    
                    <div class="post-content">
                    <?php echo html_entity_decode($post['body']); ?>
                        
                    </div>
                    
                </div>
            </div>
            

            <!-- Main Content Wrapper -->

            <!-- Sidebar -->

            <div class="sidebar single">

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>

                    <?php foreach ($posts as $p): ?>
                        <div class="post clearfix">
                            <img src="<?php echo 'assets/images/' . $p['image']; ?>" alt="">
                            <a href="single.php?id=<?php echo $p['id']; ?>" class="title">
                                <h4><?php echo $p['title']; ?></h4>
                            </a>
                        </div>
                    <?php endforeach; ?>

                    
                    
                </div>
                
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="<?php echo 'index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
    
                    </ul>
                </div>
            </div>
            <!-- // Sidebar -->

        </div>
        <!-- // Content -->

    </div>
    <!-- // Page Wrapper -->

    <!-- Footer -->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <!-- // Footer -->
    
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    
    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>

</body>

</html>