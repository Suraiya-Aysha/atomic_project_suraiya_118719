<?php
include_once("../../../vendor/autoload.php");

use \App\Bitm\SEIP118719\Birthday\Birthday;

$birth_obj=new Birthday();
$birth_objs = $birth_obj->index();
?>


<!DOCTYPE html>
<!--
If you want you can open this template any browser. There is no any cross-browser problem.
Author:Suraiya Aysha(Asa)-SEIP118719
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List of all Birthday</title>
        
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
        
        <!--List Area Start-->
        <section class="list_area">
            <div class="container">
                <div class="row">                                   
                <div class="col-md-12 text-center">
                    <h2>All List of Birthday Date...</h2>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table border="1">
                            <thead>
                                <tr>
                                    <th>Serial No.</th>
                                    <th>ID</th>                         
                                    <th>User Name:</th>
                                    <th>Birthday Date List <a href="#"><i class="fa fa-arrow-down"></i></a></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $serial_no=1;
                                foreach ($birth_objs as $birth_obj)
                                    {                               
                                ?>
                                <tr>
                                    <td><?php echo $serial_no;?></td>
                                    <td><?php echo $birth_obj->id;?></td>
                                    <td><?php echo $birth_obj->user_name;?></td>
                                    <td><?php echo $birth_obj->birth_date;?></td>
                                    <td><a href="">View</a> | <a href="edit.php">Edit</a> | <a href="">Delete</a> | <a href="">Trash</a>/<a href="">Recover</a> | <a href="">Email to Friend</a> </td>
                                </tr>
                                <?php
                                $serial_no++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="col-md-12 text-right">
                        <div class="next_prev">
                            <a href="#">prev</a>  <a href="#">1</a> | <a href="#">2</a> | <a href="#">3</a> <a href="#">next</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--List Area End-->
                
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
