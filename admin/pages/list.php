<div class="container">
    <h2>Listing des articles</h2>
    <p style="color:red"><?php echo $_SESSION['login']; ?></p>
    <hr />
 
    <div class="rows">
        <div class="col s12 m12 l12">
            <h4>Titre#01<i class='material-icons'>lock</i></h4>

            <div class="row">
                <div class="col s12 m6 l8">
                    <!--Affichage de l'aperçu du post-->
                	<p>lorem ipsum</p>    
                </div>
                <div class="col s12 m6 l4">
                    <!--Affichage de l'image du post-->
                    <img src="imgs/posts/post.png" class="materialboxed responsive-img" alt=""/>
                    <br><br>
                    <a class="btn grey-text text-lighten-4" href="">Lire l'article complet</a>
                    <br><br>
                    <a class="btn grey-text text-lighten-4" href="" >Supprimer l'article</a>
                </div>
            </div>
        </div>
    </div>
  
</div>