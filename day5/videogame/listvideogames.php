<?php

$siteTitle = 'Video Games with Pagination';

$siteName = 'View all videogames';
$siteDescription = 'Please click on forward or back buttons to view all video games.';

include('header.php');
/* use require to include the connectdb.php file which connect to the database */
include ('includes/connectdb.php');


//Display 5 rows first
$per_page = 5;
$adjacents = 5;

//Count id how many rows in this table
$pages_query = mysqli_query($dbc, "SELECT count(id), title, price, description FROM videogames");
$row = mysqli_fetch_array($pages_query);
$ic = $row[0];

//get total number of pages to be shown from total result
$pages = ceil($ic / $per_page);

//get current page from url, if not prsent set it to 1
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1 ;

//calculate actual start page with respect to Mysql
$start = ($page - 1) * $per_page;

//Execute a mysql query to retrieve all result from current page by using LIMIT keyword
$query = mysqli_query($dbc, "SELECT id, title, price, description FROM videogames LIMIT $start, $per_page");

$pagination="Pagination";
//if current page is first show first only else reduce 1 by current page
$Prev_Page = ($page==1)?1:$page -1;

//if current page is last show last only else add 1 to current page
$Next_Page = ($page>=$pages)?$page:$page + 1;

//if we are not on first page show first link
if($page!=1) $pagination.= '<a href="?page=1">First</a>';

//if we are not on first page show previous link
if($page!=1) $pagination.= '<a href="?page='.$Prev_Page.'">Previous</a>';

//we are going to display 5 links on pagination bar
$numberoflinks=5;

//find the number of links to show on right of the current page
$upage = ceil(($page)/$numberoflinks)*$numberoflinks;

//find the number of links to show on left of the current page
$lpage = floor(($page)/$numberoflinks)*$numberoflinks;

//if number of links on left of current page are zero we start from 1
$lpage = ($lpage==0)?1:$lpage;

//find the number of links to show on right of the current page and make sure it must be less than total number of pages
$upage = ($lpage==$upage)?$upage+$numberoflinks:$upage;
if($upage>$pages)$upage=($pages-1);

//start building links from left to right of current page
for($x=$lpage; $x<=$upage; $x++){
	$pagination.=($x == $page) ? ' <strong>'.$x.'</strong>': ' <a href="?page='.$x.'">'.$x.'</a>' ;
}
if($page!=$pages) $pagination.= ' <a href="?page='.$Next_Page.'">Next</a>';
if($page!=$pages) $pagination.= ' <a href="?page='.$pages.'">Last</a>';


?>


		
		<div class="container-fluid">
			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>Id</th>
						<th>Title</th>
						<th>Description</th>
						<th>Price</th>
					</tr>
					<?php
							while( $row = mysqli_fetch_array($query) )
							{
							$f1 = $row['id'];
							$f2 = $row['title'];
							$f3 = $row['description'];
							$f4 = $row['price'];
					?>
						<tr>
							<td><?php echo $f1 ?></td>
							<td><?php echo $f2 ?></td>
							<td><?php echo $f3 ?></td>
							<td><?php echo $f4 ?></td>
						</tr>
					<?php 
						} //while
					?>
				</table>
			</div>
		
			<nav>
				<ul class="pager">
					<li><a href="#"><?php echo $pagination; ?></a></li>
				</ul>
			</nav>

		</div>

<?php  

include('footer.php');

?>