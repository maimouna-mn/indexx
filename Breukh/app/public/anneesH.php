<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

body {
    position: relative;
    width: 100%;
}

.header {
    height: 60px;
    width: 100%;
    display: flex;
    align-items: center;
    border-bottom: 2px solid #f1f1f1;
}

.logo {
    display: flex;
    align-items: center;
    width: 300px;
    padding-left: 40px;
}

.logo span {
    color: #5073fb;
}

.search--notification--profile {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: calc(100% - 300px);
    padding: 0 40px;
}
.container{
width:50%;

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
border:2px solid;
width:80%;
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
.search {
    background-color: #f1f4f8;
    border-radius: 50px;
    width: 400px;
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.search input {
    background-color: transparent;
    outline: none;
    border: none;
    text-indent: 15px;
    width: 85%;
}

.search button {
    outline: none;
    border: none;
    border-radius: 50%;
    background-color: #fff;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.search button i {
    font-size: 1.1rem;
    color: #5073fb;
}

.notification--profile {
    display: flex;
    align-items: center;
}

.picon {
    margin-left: 20px;
    font-size: 1.1rem;
    padding: 5px;
    border-radius: 5px;
}
.deux{
    display: flex;
    justify-content:space-around;
}
.lock {
    color: #5073fb;
    background-color: rgba(80, 115, 251, .2);
}

.bell {
    color: #f1d243;
    background-color: rgba(241, 210, 67, .2);
}

.chat {
    color: #70d7a5;
    background-color: rgba(112, 215, 165, .2);
}

.profile {
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
}

img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.main {
    position: relative;
    width: 100%;
    min-height: calc(100vh - 60px);
}


/* sidebar */

.sidebar {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 300px;
    background-color: #fff;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-right: 2px solid #f1f1f1;
    transition: .3s;
}

.sidebar.active {
    width: 103px;
    overflow: hidden;
}

.sidebar.active .sidebar--item {
    display: none;
}

li {
    list-style: none;
}

a {
    text-decoration: none;
}

.sidebar--items a,
.sidebar--bottom-items a {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 1.1rem;
    color: #000;
    padding: 10px;
    border-radius: 10px;
}

.sidebar--items a:hover,
.sidebar--bottom-items a:hover {
    background-color: #5073fb;
    color: #fff;
}

#active--link {
    background-color: #5073fb;
    color: #fff;
}

.sidebar--bottom-items li:last-child a {
    margin-bottom: 0;
}

.icon {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    font-size: 1.3rem;
}

.icon-0 {
    color: #5073fb;
}

.icon-1 {
    color: #c5bc58;
}

.icon-2 {
    color: #a280e9;
}

.icon-3 {
    color: #85ade3;
}

.icon-4 {
    color: #e36ac8;
}

.icon-5 {
    color: #70d7a5;
}

.icon-6 {
    color: #5f5ce0;
}

.icon-7 {
    color: #e86786;
}

.icon-8 {
    color: #f1d243;
}


/* main--content */

.main--content {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: calc(100% - 300px);
    padding: 0 40px;
    overflow-y: scroll;
    transition: .3s;
}

.main--content.active {
    width: calc(100% - 103px);
}

.title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
    margin-top: 30px;
}

.section--title {
    font-weight: 400;
}

.dropdown {
    outline: none;
    border: none;
    background-color: #f1f4f8;
    border-radius: 5px;
    width: 150px;
    padding: 5px;
}

.cards {
    display: flex;
    gap: 20px;
}

.card {
    padding: 20px;
    border-radius: 20px;
    min-width: 230px;
    height: auto;
    transition: .3s;
}

.card:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.card--data {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}

.card h1 {
    font-size: 30px;
    margin-top: 10px;
}

.card--icon--lg {
    font-size: 80px;
}

.card--stats {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 5px;
}

.card--stats span {
    display: flex;
    align-items: center;
}

.card--icon {
    margin-right: 5px;
}

.stat--icon {
    color: #5f5ce0;
}

.up--arrow {
    color: #70d7a5;
}

.down--arrow {
    color: #e86786;
}

.card-1 {
    background-color: rgba(80, 115, 251, .1);
}

.card-1 .card--title {
    color: rgba(80, 115, 251, 1);
}

.card-1 .card--icon--lg {
    color: rgba(80, 115, 251, .4);
}

.card-2 {
    background-color: rgba(241, 210, 67, .1);
}

.card-2 .card--title {
    color: rgba(241, 210, 67, 1);
}

.card-2 .card--icon--lg {
    color: rgba(241, 210, 67, .4);
}

.card-3 {
    background-color: rgba(112, 215, 165, .1);
}

.card-3 .card--title {
    color: rgba(112, 215, 165, 1);
}

.card-3 .card--icon--lg {
    color: rgba(112, 215, 165, .4);
}

.card-4 {
    background-color: rgba(227, 106, 200, .1);
}

.card-4 .card--title {
    color: rgba(227, 106, 200, 1);
}

.card-4 .card--icon--lg {
    color: rgba(227, 106, 200, .4);
}


/* doctors */

.doctors--right--btns {
    display: flex;
    align-items: center;
    gap: 30px;
}

.add {
    display: flex;
    align-items: center;
    padding: 5px 10px;
    outline: none;
    border: none;
    background-color: #5073fb;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}

.add:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.add i {
    margin-right: 10px;
    padding: 5px;
    background-color: #fff;
    border-radius: 50%;
    color: #000;
}

.doctors--cards {
    display: flex;
    gap: 20px;
}

.doctor--card {
    padding: 20px;
    border-radius: 20px;
    height: auto;
    transition: .3s;
    border: 2px solid #f1f1f1;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: .8rem;
}

.doctor--card:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.img--box--cover {
    border: 1px solid #5073fb;
    padding: 2px;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 10px;
}

.img--box {
    position: relative;
    width: 71px;
    height: 71px;
    overflow: hidden;
    border-radius: 50%;
}

.free {
    color: #70d7a5;
}

.scheduled {
    color: #5073fb;
}


/* recent--patients */

.recent--patients {
    margin-bottom: 20px;
}


.edit {
    color: #70d7a5;
    margin-right: 10px;
}

.delete {
    color: #e86786;
}

.pending {
    color: #f1d243;
}

.confirmed {
    color: #70d7a5;
}

.rejected {
    color: #e86786;
}


/* responsive starts here */

@media screen and (max-width:1350px) {
    .cards,
    .doctors--cards {
        overflow-x: scroll;
    }
}

@media screen and (max-width:1024px) {
    table {
        min-width: 600px;
    }
}

@media screen and (max-width:768px) {
    .logo {
        padding-left: 30px;
        width: fit-content;
    }
    .search--notification--profile {
        padding: 0 20px;
        margin-left: auto;
    }
    .main--content {
        padding: 0 20px;
    }
    .sidebar {
        padding: 20px;
    }
    .sidebar.active {
        width: 85px;
    }
    .main--content.active {
        width: calc(100% - 85px);
    }
}
@media screen and (max-width:590px) {
    .search,
    .lock,
    .chat {
        display: none;
    }
    .notification--profile {
        margin-left: auto;
    }
    .search--notification--profile {
        width: fit-content;
    }
    .sidebar {
        transform: translateX(-100%);
        z-index: 10;
        background-color: #fff;
    }
    .sidebar.active {
        transform: translateX(0);
        width: 300px;
    }
    .sidebar.active .sidebar--item {
        display: block;
    }
    .main--content {
        width: calc(100% - 0px);
    }
    .main--content.active {
        width: calc(100% - 0px);
    }
}
@media screen and (max-width:450px) {
    .doctor--filter {
        display: none;
    }
    .main--content {
        padding: 0 10px;
    }
    .logo {
        padding-left: 10px;
    }
    .search--notification--profile {
        padding: 0 10px;
    }
    .sidebar {
        padding: 10px;
    }
}</style>
    <title>Dashboard</title>
</head>

<body>
<?php
$donnees_assoc = array();
foreach ($annee as $objet) {
 $donnees = array(
     'id' => $objet->id,
     'dateDebut' => $objet->dateDebut,
     'dateFin' => $objet->dateFin,
     'statut' => $objet->statut
 );
 $donnees_assoc[] = $donnees;
}
?>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Med<span>Ex</span></h2>
        </div>
        <div class="search--notification--profile">
            <div class="search">
                <input type="text" placeholder="Search Scdule..">
                <button><i class="ri-search-2-line"></i></button>
            </div>
            <div class="notification--profile">
                <div class="picon lock">
                    <i class="ri-lock-line"></i>
                </div>
                <div class="picon bell">
                    <i class="ri-notification-2-line"></i>
                </div>
                <div class="picon chat">
                    <i class="ri-wechat-2-line"></i>
                </div>
                <div class="picon profile">
                    <img src="assets/images/profile.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="#" id="active--link">
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-2"><i class="ri-calendar-2-line"></i></span>
                        <span class="sidebar--item">Eleve</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-3"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Niveau</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Classe</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-5"><i class="ri-line-chart-line"></i></span>
                        <span class="sidebar--item">Annee</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                    <a href="#">
                        <span class="icon icon-7"><i class="ri-settings-3-line"></i></span>
                        <span class="sidebar--item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                    <h2 class="section--title">Liste</h2>
                    <div class="deux">
  <a class="btn btn-primary btn1" href="pageEnregistrementE.php" role="button">Ajouter</a>
                    <select name="date" id="date" class="dropdown">
                        <option value="today">Today</option>
                        <option value="lastweek">Last Week</option>
                        <option value="lastmonth">Last Month</option>
                        <option value="lastyear">Last Year</option>
                        <option value="alltime">All Time</option>
                    </select>
                    </div>
                </div>
                        <table class="table user-list">
  <thead>
						<tr>
							<th><span>ID</span></th>
							<th class="text-center"><span>Date Debut</span></th>
              <th><span>Date Fin</span></th>
							<th class="text-center"><span>Statut</span></th>
							<th>&nbsp;</th>
						</tr>
  </thead>
  <tbody>
    <?php foreach ($donnees_assoc as $donnees) { ?>
      <tr>
        <td class="user-link"><?php echo $donnees['id']; ?></td>
        <td style="width: 20%;"><?php echo $donnees['dateDebut']; ?></td>
        <td class="user-link"><?php echo $donnees['dateFin']; ?></td>
        <td style="width: 20%;"><?php echo $donnees['statut']; ?></td>
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
    </section>
    <script src="assets/js/main.js"></script>
</body>

</html>