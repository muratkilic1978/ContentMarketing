<?php
//Page header
$siteTitle = 'Add publisher';
$siteName = 'Add publisher';
$siteDescription = 'Please fill out the form below with information about the publisher.';

include('header.php');

?>
      <i class="fa fa-plus fa-3x"></i>
    
      <form method="post" action="addingpublisher.php">
        <div class="form-group">
          <label for="publishername">Publisher name:</label>
          <input type="text" name="publishername" class="form-control" id="publishername" placeholder="Electronic Arts">
        </div>
        <div class="form-group">
          <label for="website">Website - URL:</label>
          <input type="url" name="website" class="form-control" id="website" placeholder="http://www.ea.com">
        </div>
      
      
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-block btn-success"/>
      </form>
      <aside>
        <img src="images/publisher.jpg" width="248" height="147" alt="publisher" style="float:right">
      </aside>
    </div> <!-- END CONTAINER -->
<?php 
  include('footer.php');
?>