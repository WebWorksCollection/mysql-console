<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <title>MySQL Console</title>
      <link href="style.css" rel="stylesheet">
      <style type="text/css">
         body {
         padding-top: 20px;
         padding-bottom: 20px;
         }
         textarea {
         column-count: 100 !important;
         }
      </style>
      <script>
      </script>
   </head>
   <body>
      <?php
         $mysqli = new mysqli('localhost', 'user', '123456', 'default');
         
         if($_POST)
	    {
	    $query = $_POST['query'];
	    $result = $mysqli->query($query);
	    }
	    else
          {
           $result = $mysqli->query("show databases");
           $query = 'No query';
	  }
         
      ?>
      <div class="container-fluid">
         <div class="row-fluid">
            <div class="span12">
               <div class="row-fluid">
               <?
                        if($result) {
	      ?>
                  <div class="alert alert-success">
                     <?
                     echo $query;
                     }
                     else {
                     ?>
                     <div class="alert alert-danger">
                     <?
                     echo 'Query execution error';
                     
                     }
                     ?>
                  </div>
    <form method="post">
    <fieldset>
    <legend>Query</legend>
    <textarea class="span12" name="query" rows="3"></textarea>
    <br>
    <button type="submit" class="btn">Submit</button>
    </fieldset>
    </form>
                  <table class="table table-bordered">
                     <thead>
                     <?
                                          $finfo = $result->fetch_fields();
                     
                         foreach ($finfo as $val) {
        echo '<th>' . $val->name . '</th>';
    }
                        ?>
                     </thead>
                     <tbody>
                     <?
                     while($row = $result->fetch_row())
                     {
			    echo '<tr>';
 				  for($i=0;$i<count($row);$i++)
 				  {
				    echo '<td>' . $row[$i] . '</td>';
 				  }
			    echo '</tr>';
                     }
                     $result->free_result();$mysqli->close();
                     ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <footer>
            <div class="alert alert-info">
               Created by <a href="http://minhazulhaque.com">Muhammad Minhazul Haque<a/> &copy; 2013
            </div>
         </footer>
      </div>
   </body>
</html>