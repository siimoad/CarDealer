<!DOCTYPE html>
<html lang="en">
<head>
  <title>Afficher mails</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Afficher les emails</h2>
  <p>Les emails enregister avec leurs fréquences est :</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Email</th>
         <th>Fréquences</th>
      </tr>
    </thead>

          <?php
                $fich      =   file('Emails.txt'); 
                $array     =   array_count_values($fich);
                
                foreach($array as $mail => $freq)
                {
                  echo "<tr>";
                  echo "<td>" .$mail."</td>";
                  echo "<td>" .$freq."</td>";
                  echo "</tr>";
                }

            ?>
        

    </tbody>
  </table>
</div>

</body>
</html>