    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    
    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <header>
        <a href="../index.php" class = "logo">
            <h1 class = "logo-text"><span>Team</span>One</h1>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class = "nav">
            <?php if (isset($_SESSION['username'])): ?>
                <li>
                    <a href = "#">
                        <i class="fa fa-user"></i>
                            <?php echo $_SESSION['username']; ?>
                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul>
                        <li><a href = "../logout.php" class = "logout">Logout</a></li>            
                    </ul>
                </li>
            <?php endif; ?>
            
        </ul>
    </header>