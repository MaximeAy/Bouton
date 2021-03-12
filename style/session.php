   
        <?php
        $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'apprenant';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    $conn = mysqli_connect($db_se

     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT EMAIL,NOM,PRENOM, DATE,FORMATION FROM monprojet
      WHERE EMAIL LIKE '%$recherche%'
      OR NOM LIKE '%$recherche%'
      OR PRENOM LIKE '%$recherche%'
      OR DATE LIKE '%$recherche%'
      OR FORMATION LIKE '%$recherche%'
      LIMIT 10");

     // affichage du résultat
     while( $data = mysqli_fetch_array($q))
     {
      $tablo[]=$data;
      }
      $nbcol=1;
      
      echo '<table>';
      echo "<tr>";
      echo "<th>nom</th>";
      echo "<th>prenom</th>";
      echo " <th>email</th>";
      echo "<th>naissance</th>";
      echo " <th>genre</th>";
      echo "</tr>";
      $nb=count($tablo);
      for($i=0;$i<$nb;$i++){
          $valeur1=$tablo[$i]['nom'];
          $valeur2=$tablo[$i]['prenom'];
          $valeur3=$tablo[$i]['email'];
          $valeur4=$tablo[$i]['naissance'];
          $valeur5=$tablo[$i]['genre'];
      
          if($i%$nbcol==0)
          echo '<tr>';
          echo '<td>',$valeur1,'</td>';
          echo '<td>',$valeur2,'</td>';
          echo '<td>',$valeur3,'</td>';
          echo '<td>',$valeur4,'</td>';
          echo '<td>',$valeur5,'</td>';
      
          if($i%$nbcol==($nbcol-1))
          echo '</tr>';
          
      
          }
          echo '</table>';
     
          
?>
       </div>
    </div>
		
</div>
