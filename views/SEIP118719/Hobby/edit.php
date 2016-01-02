<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Book Title</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700,700italic,600italic,600,400italic,300,300italic' rel='stylesheet' type='text/css'>
         <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Update Your Favorite Book Title</h1></div>
                </div>
                 <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <form action="">
                            <label>Book Title:</label> <input type="text" name="book">
                            <input type="submit" value="Update">
                         </form>
                    </div>
                </div>
            </div>
      
               <?php
       function __autoload($ClassName){
           $fullpath=$ClassName.".php";
           $finaldis="/../../../".str_replace("\\","/",$fullpath);
           include_once($finaldis);
       }

       use src\Bitm\SEIP118719\Book_Title\Book_Title;

            $book=new Book_Title();

            $book->edit();
            echo "<hr>";
       ?>
       
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>