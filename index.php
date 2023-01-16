<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    
    <!----------------- LINK CSS --------------->
    <link rel="stylesheet" href="./style.css">
    
    <!----------------- LINK FONT --------------->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Extra+Condensed:ital,wght@0,300;1,200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">

    <!-----------------  FONT AWESOME --------------->

    <script src="https://kit.fontawesome.com/add92c8faf.js" crossorigin="anonymous"></script> 
        <!-----------------  LINK BOOSTRAP --------------->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<body>
<section id="home">

  <section id="body">
      
      <!----------------- HEAD --------------->
      <header class="header">        
      <div id="bar-head">
      <img src="./img-logo/logopmp.png" alt="logo">
      <div class="info-user">
          <p> Utilisateur : cc6</p>
          <p> Client : sodia2009 </p>
      </div>
      <div class="date">
              <SCRIPT LANGUAGE="JavaScript">
              var maintenant=new Date();
              var jour=maintenant.getDate();
              var mois=maintenant.getMonth()+1;
              var an=maintenant.getFullYear();
              var ladate=new Date()
              var tab_jour=new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
              var tab_months=new Array("Janvier","Février","Mars","Avril","Mail","Juin","Juillet","Aout","Septembre","Octobre","Novembre", "Décembre")
              document.write(tab_jour[ladate.getDay()]," ", jour," " +tab_months[ladate.getMonth()]," ",an,".");
              </SCRIPT>
  
      </div>
      </div>
  
      </header>
      <!----------------- NAVBAR --------------->
      
      <section class="nav-home">
          
          
          <nav>
              <section id="navbar">
                  <ul class="exit">
                      <a href="#"><li>Quitter</li></a>
                  </ul>
                  <ul class="general"> 
                      <h1>GENERAL</h1>
                      <ul class="nav-rubrique">
                         <a href="./connect.php"><li>Call Center </li></a>
                         <a href="#"><li>Nombre Apppel / Jour</li></a>
                          <a href="#"><li>Recherche Pharmacies</li></a>
                      </ul>
                  </ul>
                  <ul class="clients" > 
                      <h1>CLIENTS</h1>
                      <ul class="nav-rubrique">
                          <a href="#"><li>Clients</li></a>
                          <a href="#"><li>Clients à reconquérir</li></a>
                          <a href="#"><li>Gestion Visites</li></a>
                          <a href="#"><li>A visiter </li></a>
                      </ul>
                  </ul>
                  <ul class="prospection"> 
                      <h1>PROSPECTION</h1>
                      <ul class="nav-rubrique">
                          <a href="#"><li>Prospection Pharmacies</li></a>
                          <a href="#"><li>Prospection Autre</li></a>
                          <a href="#"><li>Prospection</li></a>
                      </ul>
                  </ul>
                  <ul class="commandes"> 
                      <h1>COMMANDES</h1>
                      <ul class="nav-rubrique">
                          <a href="#"><li>Portefeuille</li></a>
                          <a href="#"><li>Numéro de Cde</li></a>
                          <input type="text" name="num-code" id="num-code">
                          <button>recherche</button>
                      </ul>
      
                  </ul>
                  <ul class="delegues"> 
                      <h1>DELEGUES</h1>
                      <a href="#"><li>CA / Clients</li></a>
                  </ul>
              </section>
          </nav>
  
      
          
          <!----------------- PAGE PRINCIPALE --------------->
          
          <section id="page-client">

             <!----------------- INFO CLIENTS --------------->
            <section id="info-client">
                <h1>
                    PH AYOUN
                </h1>
                  <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                           <!----------------- FICHE CLIENTS --------------->
                            <section class="fiche-client">
                                  <table>
                                      <thead>
                                          <h2>Fiche Client</h2>
                                          <p class="num-tel-client"><i class="fa-solid fa-phone"></i> 0000000000 </p>
                                      </thead>
                                     
                                      <tbody> 
                                              <tr>
                                                <th scope="row">Code Clients :</th>
                                                <td><?= $code_clients ?></td>
                                                <th scope="row">Code CIP :</th>
                                                <td>234567890</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Adresse :</th>
                                                <td>8 AV DE VILLLIERS <br>
                                                  75017 PARIS
                                                </td>
                                                <th scope="row">Téléphone :</th>
                                                <td>0000000000</td>
                                              </tr>
  
                                              <tr>
                                                <th scope="row">UGA :</th>
                                                <td>75PER</td>
                                                <th scope="row">Fax</th>
                                                <td>0000000000</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Blocage :</th>
                                                <td>Actif</td>
                                                <th scope="row">Code CSP :</th>
                                                <td>333333</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">E-mail :</th>
                                                <td>exemple@yahoo.fr</td>
                                                <th scope="row">D.Rgt :</th>
                                                <td> </td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Délegué :</th>
                                                <td>Hippolyte Nathan</td>
                                              </tr>
                                              <tr>
                                                <th scope="row">Téléopérateur :</th>
                                                <td>CG6-Magali</td>
                                              </tr>
                                      </tbody>
                                  </table>
                              </section>
                        </div>
                           <!----------------- HISTORIQUE D'APPELS RECENT --------------->
                        <div class="col-md-6">
                                <section id="historique-appel">
                                    <div class="btn-call">
                                      <button>Début d'appels</button>
                                    </div>
                                     <!----------------- HISTORIQUE DES CONTACT --------------->
                                    <section class="historique-contact">
                                      <section class="fiche-contact">
                                        <table>
                                            <thead>
                                                <h2>Historique des contacts <p>Tous</p></h2>                                            </thead>
                                            <tbody> 
                                                    <tr>
                                                      <th scope="row">Le 16/11/2023 à 16:43:54</th>
                                                      <td>SIEGE</td>
                                                    </tr>
                                                    <TR>
                                                      <th scope="row">Le 16/11/2023 à 16:43:54</th>
                                                      <td>SIEGE</td>
                                                    </TR>
                                                    <tr>
                                                      <th scope="row">Le 16/11/2023 à 16:43:54</th>
                                                      <td>SIEGE</td>
                                                    </tr>
                                            </tbody>
                                          </table>
                                  </section>
                                       <!----------------- DERNIERE VISITES --------------->
                                  <section class="last-visite">
                                    <h2>Les 10 dernières visites</h2>
                                    <p>Pas de visites !!</p>
                                  </section>
                                   <!----------------- GESTION VISITE --------------->
                                  <section class="gestion-visite">
                                    <h2>Gestion des visites</h2>

                                    <button>Ajouter aux clients à visiter</button>

                                  </section>



                              </section>
                        </div>
  
                      </div>
  
                    </div>
                  </section>
                   <!----------------- INFORMATIONS CLIENTS --------------->
                  <section class="form-clients">
                    <h2>Informations Clients</h2>
                    <div class="container">
                      <div class="row">
                         <!----------------- FORMULAIRE PARTIE 1 --------------->
                        <div class="col-md-4">
                          <form id="summary-form" action="forms-validation.html" class="form-horizontal">
                            <section class="panel">
                            
                              <div class="panel-body">
                                
                                <div class="form-group">
                                  <label class=" control-label">Nom du titulaire : <span class="required">*</span></label>
                                  <div class="col-sm-9">
                                    <input type="text" name="fullname" class="form-control" title="Please enter a name." placeholder="ex: John Doe" required/>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Code CIP :</label>
                                    <div class="col-sm-9">
                                      <input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Résponsable des achats :</label>
                                      <div class="col-sm-9">
                                        <input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label">Résponsable Para :</label>
                                        <div class="col-sm-9">
                                          <input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
                                        </div>
                                        <div class="form-group">
                                          <label class="col-sm-3 control-label">Email <span class="required">*</span></label>
                                          <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" title="Please enter an email address." placeholder="eg.: john@doe.com" required/>
                                          </div>
                                
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </form>
                            </section>
                        </div>
                                                 <!----------------- FORMULAIRE PARTIE 2 --------------->

                              <div class="col-md-4">
                                <form id="summary-form" action="forms-validation.html" class="form-horizontal">
                                    <section class="panel">
                                  <div class="panel-body">
                                        <div class="form-group">
                                  <label class=" control-label">Commentaire :</label>
                                  <div class="col-sm-9">
                                    <textarea name="resume" rows="2" title="Your resume is too short." class="form-control" placeholder="Enter your resume" required></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label">Nombre de personnes :</label>
                                    <div class="col-sm-9">
                                      <input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label">Fax :</label>
                                      <div class="col-sm-9">
                                        <input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
                                      </div>
                                      <div class="form-group">
                                      <section class="style-proche">
                                        <div class="btn-style">
                                          <label class="control-label">Style :</label>
                                          <select name="style" id="company" title="Please select at least one company" required>
                                            <option value="">$</option>
                                            <option value="apple">Apple</option>
                                            <option value="google">Google</option>
                                            <option value="microsoft">Microsoft</option>
                                            <option value="yahoo">Yahoo</option>
                                          </select>       
                                        </div>
                                          <div class="form-group part-proche">
                                            <label class="control-label proche-middle">Proches :<span class="required"></span></label>
                                            <div class="proche-part1">
                                            <div class="col-sm-9">
                                              <div class="container">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                    <div class="radio-custom radio-primary">
                                                      <input id="gare" name="porto_is" type="radio" value="awesome" required />
                                                      <label for="gare">Gare</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="radio-custom radio-primary">
                                                      <input id="hopital" name="porto_is" type="radio" value="very-awesome" />
                                                      <label for="hopital">Hôpital</label>
                                                    </div>
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="container">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                    <div class="radio-custom radio-primary">
                                                      <input id="gare" name="porto_is" type="radio" value="awesome" required />
                                                      <label for="gare">Écoles</label>
                                                    </div>
                                                    
                                                  </div>
                                                  <div class="col-md-6">
                                                    <div class="radio-custom radio-primary">
                                                      <input id="gare" name="porto_is" type="radio" value="awesome" required />
                                                      <label for="gare">Aéroport</label>
                                                    </div>
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="container">
                                                <div class="row">
                                                  <div class="col-md-6">
                                                    
                                                    <div class="radio-custom radio-primary">
                                                      <input id="centre-commercial" name="porto_is" type="radio" value="ultra-awesome" />
                                                      <label for="centre-commercial">Centre Commercial</label>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                             
                                              </div>
                                            </div>
                                          </div>                
                                        </section>
                                      </div>
                                </form>
                              </section>
                              </div>
                                                       <!----------------- FORMULAIRE PARTIE 3 --------------->

                                <div class="col-md-4">
                                  <div class="btn-style">
                                    <label class="control-label">Fréquence visite délégué :</label>
                                    <select id="company2" title="Please select at least one company" required>
                                      <option data-display="Select">Nothing</option>
                                      <option value="apple">Apple</option>
                                      <option value="google">Google</option>
                                      <option value="microsoft">Microsoft</option>
                                      <option value="yahoo">Yahoo</option>
                                    </select>       
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="code">
                                        <div class="form-group">
                                         <div class="col-md-6">
                                          <label class="control-label banque">Code Banque :</label>
                                            <input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
                                          </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="control-label guichet">Code Guichet :</label>
                                            <div class="cde-guichet">
                                              <input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
                                            </div>

                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                  </div>
                                  <div class="container">
                                    <div class="row">
                                      <div class="compte">
                                        <div class="form-group">
                                         <div class="col-md-9">
                                          <label class="control-label num-compte">Numéro de compte :</label>
                                            <input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
                                          </div>
                                        </div>
                                        <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label clef">Clé :</label>
                                            <div class="cde-guichet">
                                              <input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">IBAN <span class="required">*</span></label>
                                    <div class="col-sm-9">
                                      <input type="email" name="email" class="form-control" title="Please enter an email address." placeholder="eg.: john@doe.com" required/>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-3 control-label">BIC <span class="required">*</span></label>
                                      <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" title="Please enter an email address." placeholder="eg.: john@doe.com" required/>
                                      </div>
                                </div>
                                </div>
      
                              </form>
                            </div>
                            <footer class="panel-footer">
                              <div class="row">
                                <div class="col-sm-9 col-sm-offset-3">
                                  <button class="btn btn-primary">Submit</button>
                                  <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                              </div>
                            </footer>
                  </section>
          </section>
         

  </section>        
</section>  



</body>
</html>