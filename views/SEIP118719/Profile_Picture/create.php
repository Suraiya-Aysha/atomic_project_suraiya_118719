<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create Book Title</title>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700,700italic,600italic,600,400italic,300,300italic' rel='stylesheet' type='text/css'>
         <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
            <div class="container">
                 <div class="row">
                    <div class="col-md-12">
        <form action="store.php" method="post">
            <fieldset>
                <legend>Add Your Favorite Book Title</legend>
                
                <div>
                    <label for="title" >Enter Book Title</label>
                    <input autofocus="autofocus" 
                           id="title" 
                           placeholder="Enter the title of your favorite book" 
                           type="text" 
                           name="title"
                           tabindex="1"
                           required="required"
                           size="30"
                           />
                </div>
                <button  tabindex="2" type="submit">Save</button>
                <button  tabindex="2" type="submit">Save & Add Again</button>
<!--                <input type="submit" value="Save" />-->
                <input tabindex="3" type="reset" value="Reset" />
            </fieldset>
        </form> 
        <nav>
            <li><a href="index.php">Go to List</a></li>
            <li><a href="javascript:history.go(-1)">Back</a></li>
        </nav>
                    </div>
                </div>
            </div>
       
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>