<!DOCTYPE html>
<!--
If you want you can open this template any browser. There is no any cross-browser problem.
Author:Suraiya Aysha(Asa)-SEIP118719
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Birthday Date</title>
        
        <!--All Font Link Start-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700,700italic,600italic,600,400italic,300,300italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
         <!--All Font Link End-->
         
         <!--All CSS Style Link Start-->
         <link href="../../../resource/css/font-awesome.min.css" rel="stylesheet">
         <link rel="stylesheet" href="../../../resource/css/bootstrap.min.css">
         <link rel="stylesheet" href="../../../resource/style.css">
        <!--All CSS Style Link End-->
                
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <!--Header Area Start-->
        <header class="book_header_area">
            <div class="container">               
                <div class="row">
                    
                    <!--Logo area start-->
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="#"><h1>HappyDay</h1></a>
                        </div>
                    </div>
                    
                    <!--Menu area start-->
                    <div class="col-md-10">
                        <div class="book_menu">
                            <nav>
                                <ul>
                                    <li> <a href="../../../index.html">All Project</a></li>
                                    <li> <a href="index.php">Birthday Home</a></li>
                                    <li> <a href="index.php">Birthday List</a></li>
                                    <li> <a href="create.php">Add New</a></li>
                                    <li> <a href="">Download as PDF|XL</a></li>
                                    <li> <a href="#">Filter</a></li>
                                    <li> <a href="edit.php">Update</a></li>
                                    <li> <a href="">Search <i class="fa fa-search"></i></a></li>                                   
                                 </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header Area End-->
        
        <!--Create Book title area Start-->
        <section class="create_book_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Add your birthday date...</h2>
                    </div>
                    <div class="col-md-12">
                        <form action="store.php" method="post">
                            <div class="row">
                                <div class="col-md-2">                                    
                                    <label for="user_name">User Name:</label>                            
                                </div>
                                <div class="col-md-10 text-left">
                                    <input type="text" name="user_name" autofocus="autofocus" placeholder="Enter your name..." required="required" tabindex="1" size="30"/>  
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-md-2">                                    
                                    <label for="birth_date">User Birth Date:</label> 
                                </div>
                                <div class="col-md-9 text-left">
                                    <input type="date" name=birth_date" autofocus="autofocus" placeholder="yyyy/mm/dd" required="required" tabindex="2" size="30"/>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-2">
                                    <div class="all_button">                                                                          
                                        <button type="submit">Save</button>
                                        <button type="submit">Save & Add Again</button>
                                        <button type="reset">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Create Book title area End-->
       
        <!--Footer Area Start-->
        <footer class="footer_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy_right text-center">
                            <p><a href="#">copyright to&copy;Suraiya Aysha(Asa) all rights reserved.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer Area End-->
      
        <!--All JavaScript Link Start-->
        <script src="../../../resource/js/jquery-1.11.3.min.js"></script>
        <script src="../../../resource/js/bootstrap.min.js"></script>
        <script src="../../../resource/js/main.js"></script>
        <!--All JavaScript Link End-->
    </body>
</html>