<?php 
include ("sidebar.php");
include ("header.php");
 ?>

<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Forms</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Basic Form :</h4>
						</div>
						<div class="form-body">
							<form> <div class="form-group"> <label for="exampleInputEmail1">Email address</label> <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"> </div> <div class="form-group"> <label for="exampleInputPassword1">Password</label> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div> <div class="form-group"> <label for="exampleInputFile">File input</label> <input type="file" id="exampleInputFile"> <p class="help-block">Example block-level help text here.</p> </div> <div class="checkbox"> <label> <input type="checkbox"> Check me out </label> </div> <button type="submit" class="btn btn-default">Submit</button> </form> 
						</div>
					</div>

					<div class="bs-example widget-shadow" data-example-id="bordered-table"> 
						<h4>Bordered Basic Table:</h4>
						<table class="table table-bordered"> <thead> <tr> <th>#</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> </tr> </thead> <tbody> <tr> <th scope="row">1</th> <td>Mark</td> <td>Otto</td> <td>@mdo</td> </tr> <tr> <th scope="row">2</th> <td>Jacob</td> <td>Thornton</td> <td>@fat</td> </tr> <tr> <th scope="row">3</th> <td>Larry</td> <td>the Bird</td> <td>@twitter</td> </tr> </tbody> </table>
					</div>
		<?php
		include ("footer.php");
		?>