<?php
//Page header
$siteTitle = 'Add VideoGame';
$siteName = 'Add VideoGame to Collection';
$siteDescription = 'Please fill out the form below.';

include('header.php');


?>

      <i class="fa fa-plus fa-3x" aria-hidden="true"></i><i class="fa fa-archive fa-4x"></i>
      
      <form method="post" action="addingvideogame.php">
        
        <div class="form-group">
          <label for="titlename">Title</label>
          <input type="text" name="titlename" class="form-control" id="titlename" placeholder="Fifa 2016">
        </div>

        <div class="form-group">
          <label for="description">Descripton:</label>
          <textarea name="description" class="form-control" rows="5" id="description"></textarea>
        </div>
        
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" name="price" min="0" max="9999" step="0.5" value="99" class="form-control" id="price" placeholder="499.99">
        </div>
        
        <?php

        # Include database connection-file - connectdb.php
        include('includes/connectdb.php');
        
        # Make a sql-query to the database
        $platformQuery = "SELECT id, platformname FROM platforms";

        #Perform queries against the database:
        $resultPlatformQuery = mysqli_query($dbc, $platformQuery);

        # Make a sql-query to the database
        $publisherQuery = "SELECT id, publishername FROM publishers";

        #Perform queries against the database:
        $resultPublisherQuery = mysqli_query($dbc, $publisherQuery);

          
        ?>

        <div class="form-group">
          <label for="platforms">Platforms:</label>
          <select name="platformid" class="form-control" id="platforms">
            <!-- iterate through the WHILE LOOP  -->
            <?php while($row = mysqli_fetch_array($resultPlatformQuery)): ?>
              <!-- Echo out values {id} and {name}   -->
              <option value=" <?php echo $row['id']; ?> "><?php echo $row['platformname']; ?></option>
            <?php endwhile; ?>
          </select>
         </div>
         
         <div class="form-group">
          <label for="publishers">Publishers:</label>
           <select name="publisherid" class="form-control" id="publishers">
            <?php while($row = mysqli_fetch_array($resultPublisherQuery)): ?>
              <option value=" <?php echo $row['id']; ?> "><?php echo $row['publishername']; ?></option>
            <?php endwhile; ?>
          </select>
        </div>
      
      
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-block btn-success"/>
      </form>
      <aside>
        <img src="images/videogamecollection.jpg" width="248" height="147" alt="band" style="float:right">
      </aside>
    </div> <!-- END CONTAINER -->
 
<?php 
include('footer.php');
?>
