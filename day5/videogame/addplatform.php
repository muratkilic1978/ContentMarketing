<?php
//Page header
$siteTitle = 'Add addplatform';
$siteName = 'Add platform';
$siteDescription = 'Please fill out the form below with information about the platform.';

include('header.php');

?>
      <i class="fa fa-plus fa-3x"></i>
      
      <form method="post" action="addingplatform.php">
        <div class="form-group">
          <label for="platformname">Platform name:</label>
          <input type="text" name="platformname" class="form-control" id="platformname" placeholder="PSP">
        </div>

      
      
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-block btn-success"/>
      </form> <!--  END FORM  -->
      <aside>
        <img src="images/gaming-consoles.jpg" width="541" height="350" alt="band" style="float:right">
      </aside>
    </div> <!-- END CONTAINER -->
  </div> <!-- END WRAP -->

<?php include('footer.php'); ?>