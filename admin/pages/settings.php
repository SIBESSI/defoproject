<div class="container">
   

<h2>Paramètres</h2>
<hr/>
<div class="row">
    <div class="col m7 s12">
        <h4>Les utilisateurs</h4>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Rôle</th>
                    <th>Validé</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><a href="" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">mode_edit</i></a></td>
                        <td><a href="" id="del" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">delete</i></a></td>

                        <td>Login#01</td>
                        <td>login1@web.dev</td>
                        <td>Administrateur</td>
                        <td><i class="material-icons">av_timer</i></td>
                    </tr>
                    <tr>
                        <td><a href="" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">mode_edit</i></a></td>
                        <td><a href="" id="del" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">delete</i></a></td>

                        <td>Login#02</td>
                        <td>login2@web.dev</td>
                        <td>Modérateur</td>
                        <td><i class="material-icons">av_timer</i></td>
                    </tr>
                    <tr>
                        <td><a href="" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">mode_edit</i></a></td>
                        <td><a href="" id="del" class="btn-floating btn grey-text text-lighten-4"><i class="material-icons">delete</i></a></td>

                        <td>Login#03</td>
                        <td>login3@web.dev</td>
                        <td>Editeurteur</td>
                        <td><i class="material-icons">av_timer</i></td>
                    </tr>
        
            </tbody>
        </table>
    </div>
    <div class="col m5 s12">
        <h4>Ajouter un utilisateur</h4>

        <form method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="login" id="login" value=""/>
                    <label for="login">Login</label>
                </div>
                <div class="input-field col s12">
                    <input type="email" name="email" id="email" value=""/>
                    <label for="email">Adresse email</label>
                </div>
                
                <div class="input-field col s12">
                    <input type="email" name="email_again" id="email_again" value="" />
                    <label for="email_again">Répéter l'adresse email</label>
                </div>
                            

                <div class="input-field col s12">
                    <input type="password" id="pass" name="pass">
                    <label for="pass">Mot de passe</label>
                </div>              
                
                <div class="input-field col s12">
                    <input type="password" id="pass_again" name="pass_again">
                    <label for="pass_again">Repété le mot de passe</label>
                </div>             

                <div class="input-field col s12">
                    <select name="role" id="role" value="">
                        <option value="modo">Modérateur</option>
                        <option value="admin">Administrateur</option>
                    </select>
                    <label for="role">Rôle</label>
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