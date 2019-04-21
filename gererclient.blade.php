<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion des Clients</title>

        <!-- Fonts -->
        <link href="" rel="stylesheet" type="text/css" >

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <h1 align="center" >Gestion des Clients</h1>
        <div align="center" >
            <div>
                <table>
                        <tr>
                            <th>
                            Nom et Prenom
                            </th>
                             
                            <th>
                            Ville
                            </th>

                            <th>
                            Tel
                            </th>

                            <th>
                            Mot de passe
                            </th>

                            <th>
                            Note 
                            </th>

                            <th>
                            Modifier
                            </th>

                            <th>
                            Supprimer
                            </th>

                        </tr>
                        <?php ?>
                        <tr>

                            <td>
                                 <?php ?>
                            </td>

                            <td>
                                  <?php ?>                       
                            </td>

                            <td>
                                  <?php ?>
                            </td>

                            <td>
                                  <?php ?>
                            </td>

                            <td>
                                  <?php ?>
                            </td>

                            <td>
                                 <form action="" method="">
                                 @csrf
                                    <input type="hidden" name="id_client" value="<?php ?>">

                                    <input type="button" value="Modifier" name="modifier">
                                 
                            </td>
                            <td>
                        
                                    <input type="button" value="Supprimer" name="supprimer">
                                 </form>
                            </td>
                        </tr>
                        <?php ?>
                
                </table>
            

            </div>
        
        </div>
        

    </body>



</html>