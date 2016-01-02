<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>View Book Title</title>
    </head>
    <body style="text-align: center">
        <h1>View Your Favorite Book Title</h1>
<form action="">

</form>
        
               <?php
       function __autoload($ClassName){
           $fullpath=$ClassName.".php";
           $finaldis="/../../../".str_replace("\\","/",$fullpath);
           include_once($finaldis);
       }

       use src\Bitm\SEIP118719\Book_Title\Book_Title;

            $book=new Book_Title();

            $book->index();
            echo "<hr>";
       ?>
    </body>
</html>

