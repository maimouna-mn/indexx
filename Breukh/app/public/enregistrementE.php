<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Enregistrement d'élève</title>
</head>
<body>
  <form action="ajouterEleve.php" method="POST">
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="photo.png" alt="Sample photo" class="img-fluid" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Enregistrement d'élève</h3>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="prenom" name="prenom" class="form-control form-control-lg" required/>
                            <label class="form-label" for="prenom">Prénom</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="nom" name="nom" class="form-control form-control-lg" required/>
                            <label class="form-label" for="nom">Nom</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="date" id="dateNaissance" name="dateNaissance" class="form-control form-control-lg" required/>
                            <label class="form-label" for="dateNaissance">Date de Naissance</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" id="matricule" name="matricule" class="form-control form-control-lg" required/>
                            <label class="form-label" for="matricule">Matricule</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                           <div class="row">
                        <div class="col-md-6 mb-4">
                          <select class="select" name="classe" required>
                            <option value="">Statut</option>
                            <option value="Option 1">Abonne</option>
                            <option value="Option 2">Pas Abonné</option>
                          </select>
                        </div>
                      </div>
      
                      <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                        <h6 class="mb-0 me-4">Genre: </h6>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="genre" id="femaleGender" value="Feminin" required/>
                          <label class="form-check-label" for="femaleGender">Féminin</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="genre" id="maleGender" value="Masculin" required/>
                          <label class="form-check-label" for="maleGender">Masculin</label>
                        </div>
                      </div>
                      <div class="d-flex justify-content-end pt-3">
                        <a class="btn btn-primary btn1" href="eleveH.php" role="button">Annuler</a>
                        <button type="submit" class="btn btn-warning btn-lg ms-2">Valider</button>
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>

</body>
</html>