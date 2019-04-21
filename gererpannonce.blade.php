<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion des Annonces</title>

        <!-- Fonts -->
        <link href="" rel="stylesheet" type="text/css" >

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <h1 align="center" >Gestion des Annonces</h1>
        <div align="center" >
            <div>
                <table>
                        <tr>
                            <th>
                            Titre
                            </th>

                            <th>
                            Prix
                            </th>
                             
                            <th>
                            Date
                            </th>

                            <th>
                            De
                            </th>

                            <th>
                            A
                            </th>

                            <th>
                            Etat 
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
                                  <?php ?>
                            </td>

                            <td>
                                 <form action="" method="">
                                 @csrf
                                    <input type="hidden" name="id_annonce" value="<?php ?>">

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