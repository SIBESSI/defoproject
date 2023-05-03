<div class="container">   
<?php
$libCat="";
$idCat=0;
?>
<h2>Categorie</h2>
<hr/>
<div class="row">
    <div class="col m6 s12">
        <h4>Liste</h4>
        <table>
            <thead>
                <tr>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                    <th>Nom de la catégorie</th>
                    
                </tr>
            </thead>
            <tbody>
                
                    <tr>
                        <td><a href="" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">mode_edit</i></a></td>
                        <td><a href="" id="del" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">delete</i></a></td>
                        <td>Categorie#01</td>
                    </tr>
                    <tr>
                        <td><a href="" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">mode_edit</i></a></td>
                        <td><a href="" id="del" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">delete</i></a></td>
                        <td>Categorie#02</td>
                    </tr>
                    <tr>
                        <td><a href="" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">mode_edit</i></a></td>
                        <td><a href="" id="del" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">delete</i></a></td>
                        <td>Categorie#03</td>
                    </tr>


            </tbody>
        </table>
    </div>
    <div class="col m6 s12">
        <h4>Ajouter une catégorie</h4>

        

        <form method="post" action="">
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="category" id="category" value=""/>
                    <label for="category">Nom de la catégorie</label>
                    <input type="hidden" name="id" id="id" value=""/>

                </div>


                <div class="col s12">        
                    <button type="submit" name="submit" class="btn grey-text text-lighten-4">Ajouter</button>
                </div>
            </div>
        </form>
    </div>
</div>

</div>