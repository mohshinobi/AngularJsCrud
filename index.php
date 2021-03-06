<!DOCTYPE html>
<html lang ="fr" ng-app="monapp" >
 

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title> AngularJS CRUD Json </title>
	<script src="js/jquery.min.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/monjqueryscript.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/monscript.js"></script>
 
	 



</head>
<body>

	<div class="container" style="margin-top:20px;" ng-controller="mycontroller">

		<h3> BDD CRUD with AngularJs Php Json Mysql</h3>
		


		<div class="row"> 
			<div class="col-md-9">  
				<!-- debut tableau -->
				<table  class="table table-striped"  >
					<thead>
						<tr style="font-weight:bold; background :#303030; color:#fff; ">
							<td ><span class="glyphicon glyphicon-asterisk" style="margin:5px;">  </span>id</td> 
							<td  ><span class="glyphicon glyphicon-user" style="margin:5px;">  </span>Nom</td> 
							<td><span class="glyphicon glyphicon-wrench" style="margin:5px;">  </span>Password</td> 
							<td><span class="glyphicon glyphicon-envelope" style="margin:5px;">  </span>Email</td>
							<td><span class="glyphicon glyphicon-cog" style="margin:5px;">  </span>Option</td>  
						</tr>
					</thead>
					<tbody> 
						<tr ng-repeat="row in rows   | filter : search">
							<td>{{row.id}}</td> 
							<td>{{row.Nom}}</td> 
							<td>{{row.Password}}</td>
							<td>{{row.Email}}</td> 
							<td style="width:100px;">   
								<a type="button" class="btn btn-danger" ng-click="delete($index,row.id)" ><span class="glyphicon glyphicon-trash"></span> </a>
								<a type="button" class="btn btn-info"  data-toggle="modal" data-target="#editModal" id="edit"  ng-click="edit(row.id)" ><span class="glyphicon glyphicon-pencil"></span> </a>

							</td>
						</tr>
					</tbody>
				</table></div>
				<!-- fin tableau -->



				<!-- debutpanel -->
				<div class="col-md-3"> 

					<form class="form-inline" style="margin:0px 0 20px 0px; ">
						<div class="form-group">

							<div class="input-group">

								<input type="text" class="form-control" placeholder="Recherche"  ng-model="search"  >
								<span class="input-group-addon"><span class="glyphicon glyphicon-search"> </span></span>
							</div>
						</div>
					</form>


				</div>	
				<div class="col-md-3"> 

					<div class="panel panel-primary "  > 
						<div class="panel-heading"> <span class="glyphicon glyphicon-user">  </span>     Ajouter un utilisateurs  </div>
						<div class="pane-body ">

							<form class="form-inline" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
								<input type="text" style="margin:15px 10px 5px 10px; width:90%;" class="form-control " name="name" placeholder="Nom" ng-model="Nom">  
								<input type="text"	style="margin:10px 10px 5px 10px; width:90%;" class="form-control" name="password" placeholder="Password" ng-model="Password"> 
								<input type="text"  style="margin:10px 10px 5px 10px; width:90%;" class="form-control" name="email" placeholder="Email"	ng-model="Email"> 
								<a type="submit" style="margin:10px;"class="btn btn-success"  name="submit"  ng-click="ajouter()"><span class="glyphicon glyphicon-plus">  </span> Ajouter</a> 
							</form>

						</div>
					</div></div>
					<!-- fin panel -->



				</div>



				<!-- debut modal -->
				<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">

								</button>
								<h5 class="modal-title">Modifier les champs :</h5>
							</div>

							<div class="modal-body">
								<!-- The form is placed inside the body of modal -->
								<form id="editForm" method="post" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'];?> ">

									<div class="form-group">
										<label class="col-xs-3 control-label">Nom</label>
										<div class="input-group col-xs-5">
											<input type="text" class="form-control" id="name_mod" />
											<span class="input-group-addon info">
												<span class="glyphicon glyphicon-user"></span>
											</span>
										</div>
									</div>


									<div class="form-group">
										<label class="col-xs-3 control-label">Password</label>
										<div class="input-group col-xs-5">
											<input type="text" class="form-control" id="password_mod" />
											<span class="input-group-addon info">
												<span class="glyphicon glyphicon-wrench"></span>
											</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-xs-3 control-label">Email</label>
										<div class="input-group col-xs-5">
											<input type="text" class="form-control" id="email_mod" />
											<span class="input-group-addon info">
												<span class="glyphicon glyphicon-envelope"></span>
											</span>
										</div>
									</div>



									<div class="form-group">
										<div class="col-xs-6 col-xs-offset-3">
											<button type="submit" id="edit_submit_ok"class="btn btn-info"><span class="glyphicon glyphicon-ok"></span> Sauvegarder</button>
											<button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>
										</div>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div><!-- fin modal -->
			</div>

		</body>
		</html>