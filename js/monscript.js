var  monapp = angular.module('monapp',[]);


monapp.controller('mycontroller', function($scope,$http){
	//lecture de la bdd
	$http.get('./conn.php').success(function(data) {

		$scope.rows = data;
		console.log("Lecture de la bdd réussi !");
		console.log($scope.rows);
	});

 
	//Ajouter des données 
	$scope.ajouter =function(){
		$http.post('insert.php', { 'Nom':$scope.Nom,'Password':$scope.Password,'Email':$scope.Email})
		.success(function(data,status,headers,config){
			console.log(" Ajout a la bdd réussi !!");
			location.reload();
		});
	};

	//supprimer des données 
	$scope.delete = function($index,id){				
 
		$scope.rows.splice( $index , 1 );	
		$http.post('delete.php', { 'id':id})
		.success(function(data,status,headers,config){
			console.log("Suppression de l'élément "+id+" réussi !");
		});	
	};
	// 
	//modifier des données 
	$scope.update =function(id){

		$http.post('update.php', { 'id':id})
		.success(function(data,status,headers,config){
			console.log("modification de l'élément "+id+" réussi !");

		});
	};



});