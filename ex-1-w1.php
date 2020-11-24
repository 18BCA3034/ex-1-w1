<html>
    <head>
        <title>Experement 1</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <?php include 'strings.php'; ?>
    </head>
    <body style="background-image: url('img/background.png');">
        <div class="container">   
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Experement 1</a>
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                </ul>
            </nav> 
            <div class="container">
            <br>
                <div class="row">  
                    <div class="col-sm-10">
                        <img src="img/banner.png" width="100%" height="50%" style="border:2px solid White; color: white"> 
                        <br>  <br>
                        <div class="container" style="background-color:white;">
                            <br><h3 style="color:teal;">Welcome to this website</h3><br>
                            <div class="row">    
                                <div class="col-sm-4"><img class="rounded" src="img/intro.png" width="100%" height="100%"></div>
                                <div class="col-sm-8"><p class="text-monospace"><?php echo "$stored_text"; ?></p></div>
                            </div>
                            <br>
                        </div>                      
                    </div>
                    <div class="col-sm-2" >
                        <ul class="navbar-nav" style="color:white">
                            <li class="nav-item" style="background-color:darkblue; text-align:center">
                            <br>
                                <a class="nav-link" href="#" style="color:white;">Latest News
                                <img class="rounded" src="img/box1.png" width="120px" height="120px"></a>  
                            </li>
                            <li class="nav-item" style="background-color:darkblue; text-align:center">
                                <a class="nav-link" href="#" style="color:white;">Diary Dates
                                <br><img class="rounded" src="img/box2.png" width="120px" height="120px"></a>
                            </li>
                            <li class="nav-item" style="background-color:darkblue; text-align:center">
                                <a class="nav-link" href="#" style="color:white;">Contacts
                                <br><img class="rounded" src="img/box3.png" width="120px" height="120px"></a>
                                <br>
                            </li>
                        </ul>
                    </div>
                </div>   
            </div> 
        </div>
        <br>
        <footer style="background-color:white;">
            <div class="footer-copyright text-center py-3">
                <div class="container">
                    <h5>Address: 285  Franklin Street, Opelika, AL, 36801</h5>
                    <h5>PhoneNo: 334-663-2654</h5>
                </div>
            </div>
        </footer>
    </body>
</html>