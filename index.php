<html>
  <head>
    <title>PHP Test</title>
    <style>
      
      :root {
        color:aqua;
        
        background-color:#420;
      }
      
    </style>
  </head>
  <body>
    <?php $data = file_get_contents ("visits.json")+1;
      file_put_contents ('visits.json',$data);
      echo '<h1>This site has been visited ';
      echo $data;
      echo ' times</h1>'
    ?>
    
    <h3>He is life</h3>
    <?php echo '<p>Hello World</p>'; ?> 

  </body>
</html>