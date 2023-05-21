<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{margin-top:20px;

}

.container{
/* background:blue; */
width:50%;

/* transform:translate(0%,0%); */

}
/* USER LIST TABLE */
.user-list tbody td > img {
position: relative;
max-width: 50px;
float: left;
margin-right: 15px;
}
.user-list tbody td .user-link {
  
display: block;
font-size: 1.25em;
padding-top: 3px;
margin-left: 60px;
background-color: red;
}
.user-list tbody td .user-subhead {
font-size: 0.875em;
font-style: italic;
}

/* TABLES */
.table {
border-collapse: separate;
border:3px solid;
width:50%;
margin-top:2rem;

}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
background-color: #eee;
}
.table thead > tr > th {
border-bottom: 1px solid #C2C2C2;
padding-bottom: 0;
}
.table tbody > tr > td {
font-size: 0.875em;
background: #f5f5f5;
border-top: 10px solid #fff;
vertical-align: middle;
padding: 12px 8px;
}
.table tbody > tr > td:first-child,
.table thead > tr > th:first-child {
padding-left: 20px;
}
.table thead > tr > th span {
border-bottom: 2px solid #C2C2C2;
display: inline-block;
padding: 0 5px;
padding-bottom: 5px;
font-weight: normal;
}
.table thead > tr > th > a span {
color: #344644;
}
.table thead > tr > th > a span:after {
content: "\f0dc";
font-family: FontAwesome;
font-style: normal;
font-weight: normal;
text-decoration: inherit;
margin-left: 5px;
font-size: 0.75em;
}
.table thead > tr > th > a.asc span:after {
content: "\f0dd";
}
.table thead > tr > th > a.desc span:after {
content: "\f0de";
}
.table thead > tr > th > a:hover span {
text-decoration: none;
color: #2bb6a3;
border-color: #2bb6a3;
}
.table.table-hover tbody > tr > td {
-webkit-transition: background-color 0.15s ease-in-out 0s;
transition: background-color 0.15s ease-in-out 0s;
}
.table tbody tr td .call-type {
display: block;
font-size: 0.75em;
text-align: center;
}
.table tbody tr td .first-line {
line-height: 1.5;
font-weight: 400;
font-size: 1.125em;
}
.table tbody tr td .first-line span {
font-size: 0.875em;
color: #969696;
font-weight: 300;
}
.table tbody tr td .second-line {
font-size: 0.875em;
line-height: 1.2;
}
.table a.table-link {
margin: 0 5px;
font-size: 1.125em;
}
.table a.table-link:hover {
text-decoration: none;
color: #2aa493;
}
.table a.table-link.danger {
color: #fe635f;
}
.table a.table-link.danger:hover {
color: #dd504c;
}

.table-products tbody > tr > td {
background: none;
border: none;
border-bottom: 1px solid #ebebeb;
-webkit-transition: background-color 0.15s ease-in-out 0s;
transition: background-color 0.15s ease-in-out 0s;
position: relative;
}
.table-products tbody > tr:hover > td {
text-decoration: none;
background-color: #f6f6f6;
}
.table-products .name {
display: block;
font-weight: 600;
padding-bottom: 7px;
}
.table-products .price {
display: block;
text-decoration: none;
width: 50%;
float: left;
font-size: 0.875em;
}
.table-products .price > i {
color: #8dc859;
}
.table-products .warranty {
display: block;
text-decoration: none;
width: 50%;
float: left;
font-size: 0.875em;
}
.table-products .warranty > i {
color: #f1c40f;
}
.table tbody > tr.table-line-fb > td {
background-color: #9daccb;
color: #262525;
}
.table tbody > tr.table-line-twitter > td {
background-color: #9fccff;
color: #262525;
}
.table tbody > tr.table-line-plus > td {
background-color: #eea59c;
color: #262525;
}
.table-stats .status-social-icon {
font-size: 1.9em;
vertical-align: bottom;
}
.table-stats .table-line-fb .status-social-icon {
color: #556484;
}
.table-stats .table-line-twitter .status-social-icon {
color: #5885b8;
}
.table-stats .table-line-plus .status-social-icon {
color: #a75d54;}


.container-fluid{
    position: relative;
    left: 10%;
}
.deux{
    display: flex;
    justify-content:space-between;
}</style>
<link rel="stylesheet" href="style.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body> 
   <form action="pageEnregistrementE.php" method="POST"> 

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="listeEleve.php">Eleve</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listeModule.php">Module</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listeClasse.php">Classe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listeAnnee.php">Annee</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="niveauEtude.php">niveau Etude</a>
        </li> 
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> 
       </ul>
    </div>
  </div>
</nav>
<?php
 
// Convertir le tableau d'objets en tableau associatif
$donnees_assoc = array();
foreach ($classe as $objet) {
    $donnees = array(
        'id' => $objet->id,
        'nom_classe' => $objet->nomclasse,
    );
    $donnees_assoc[] = $donnees;
}
?>
<div class="container">
  <div class="deux">
   
<a class="btn btn-primary btn1" href="pageEnregistrementE.php" role="button">Ajouter</a>
		  </div>

<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="table-responsive">
					<table class="table user-list">
  <thead>
  
						<tr>
							<th><span>ID</span></th>
							<th class="text-center"><span>Nom classe</span></th>
							<th>&nbsp;</th>
						</tr>
  </thead>
  <tbody>
    <?php foreach ($donnees_assoc as $donnees) { ?>
      <tr>
        <td class="user-link"><?php echo $donnees['id']; ?></td>
        <td style="width: 40%;"><?php echo $donnees['nom_classe']; ?></td>
		<td style="width: 30%;">
								<a href="#" class="table-link">
									<span class="fa-stack"> 
								
									 </span>
								</a>
								<a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href="#" class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</td>
      </tr>
    <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
</div>
 </body>
</html>
