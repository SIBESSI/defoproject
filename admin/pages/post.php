</div>
<div class="parallax-container">
    <div class="parallax"><img src="imgs/posts/<?= $post->image ?>" alt="<?= $post->title ?>"/></div>
</div>
<div class="container">


    <form method="post"  enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="title" id="title" value ="<?= $post->title ?> " />
                <label for="title">Titre de l'article : </label>
            </div>

            <div class="input-field col s12">
               <textarea name="content" id="content" class="materialize-textarea"><?= $post->content ?></textarea>
               <label for="content">Contenu de l'article : </label>
           </div>

           <div class="input-field col s12">
                <select name="category" id="category">                
                <option value="">Categorie#01</option>    
		<option value="">Categorie#02</option>         
		<option value="">Categorie#03</option>
                </select>
                <label for="category">Sélectionnez la Categorie</label>
            </div>
    
            <div class="col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Image de l'article</span>
                        <input type="file" name="image" class="col s12" >
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate col s10" type="text" >
                    </div>
                </div>
            </div>

            <br><br><br>
            <div class="col s6">
                <p>Public</p>
                <div class="switch">
                    <label>
                        Non
                        <input type="checkbox" name="public" checked/>
                        <span class="lever"></span>
                        Oui
                    </label>
                </div>
            </div>

            <div class="col s6 right-align">
                <br/><br/>
                <button type="submit" name="submit" class="btn grey-text text-lighten-4">
                    Modifier l'article
                </button>
            </div>
        </div>
    </form>
</div>