<?php
include_once("db_connect.php");
include("export_data.php");
include("header.php");
?>
<title>Movie Bunkers : Export Data to Excel</title>
<?php include('container.php');?>
<div class="container">
	<h2><b>Movie</b><u>B</u>unkers <i class="fa fa-film"> </i></h2>
</br>
  <h4>Export Data To Excel Sheet</h4>
	<h6>Note: </br>
		Seen value = <b>1</b> means <b>Watched</b> . </br>
		Seen value = <b>0</b> means <b>Not Watched</b> .

	<div class="well-sm col-sm-12">
		<div class="btn-group pull-right">
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
				<button type="submit" id="export_data" name='export_data' value="Export to excel" class="hidden">Export Less Details</button>
				<input type="button" class="btn btn-info" id="btnExport" value="Export To XLS" onclick="Export()" />
				<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
				<script src="table2excel.js" type="text/javascript"></script>
				<script type="text/javascript">
						function Export() {
								$("#movies").table2excel({
										filename: "moviebunkers_movies_data.xls"
								});
						}
				</script>
			</form>
		</div>
	</div>
	<table id="movies" class="table table-striped table-bordered">
		<tr>
			<th>Name</th>
			<th>Year</th>
			<th>Rating</th>
			<th>Genres</th>
			<th>Director</th>
			<th>Languages</th>
			<th>Seen ? </th>
			<th>Favourite</th>
			<th> Added On </th>
			<th>IMDB ID</th>
			<th>Notes</th>
			<th> ID </th>
		</tr>
		<tbody>
			<?php foreach($developer_records as $developer) { ?>
			   <tr>
			   <td><?php echo $developer ['name']; ?></td>
				 <td><?php echo $developer ['rating']; ?></td>
			   <td><?php echo $developer ['year']; ?></td>
			   <td><?php echo $developer ['genres']; ?></td>
			   <td><?php echo $developer ['director']; ?></td>
				 <td><?php echo $developer ['languages']; ?></td>
				 <td><?php echo $developer ['seen']; ?></td>
				 <td><?php echo $developer ['favourite']; ?></td>
				 <td><?php echo $developer ['added']; ?></td>
				 <td><?php echo $developer ['imdbid']; ?></td>
				 <td><?php echo $developer ['notes']; ?></td>
				 <td><?php echo $developer ['id']; ?></td>
			  </tr>
			<?php } ?>
		</tbody>
    </table>
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="../">Back Movies</a>
	</div>
</div>
<?php include('footer.php');?>
