<?php require_once '../config/function.php';


if (!empty($_POST)) {


    if (empty($_POST['mdp'])) {

        $error = 'Ce champs est obligatoire';

    }

    if (!isset($error)) {

        if (empty($_POST['mdp'])) {


            execute("INSERT INTO  motdepass(mdp) VALUES (:mdp)", array(
                ':mdp' => $_POST['mdp']
            ));

            $_SESSION['messages']['success'][] = 'Média type ajouté';
            header('location:./mdp.php');
            exit();
        }// fin soumission en insert
        else {
        // on hash le mot de passe

        $mdph = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

            execute("UPDATE motdepass SET mdp=:mdp WHERE id=:id", array(
                ':id' => $_POST['id'],
                ':mdp' => $mdph
            ));

            $_SESSION['messages']['success'][] = 'Mot de passe modifié';
            header('location:./mdp.php');
            exit();


        }// fin soumission modification
    }// fin si pas d'erreur

}// fin !empty $_POST

$mdp = execute("SELECT * FROM motdepass")->fetchAll(PDO::FETCH_ASSOC);

//debug($medias_type);


if (!empty($_GET) && isset($_GET['id']) && isset($_GET['a']) && $_GET['a'] == 'edit') {

    $mp = execute("SELECT * FROM motdepass WHERE id=:id", array(
        ':id' => $_GET['id']
    ))->fetch(PDO::FETCH_ASSOC);
    //debug($media_type);


}




require_once '../inc/backheader.inc.php';
?>

   <h1>Changer mot de passe</h1>
    <form action="" method="post" class="w-75 mx-auto mt-5 mb-5">
        <div class="form-group">
            <small class="text-danger">*</small>
            <label for="mdp" class="form-label">Cliquer sur "Modifier"</label>
            <input name="mdp" id="mdp"  type="text"
                   value="<?= $mp['mdp'] ?? ''; ?>" class="form-control">
            <small class="text-danger"><?= $error ?? ''; ?></small>
        </div>
        <input type="hidden" name="id" value="<?= $mp['id'] ?? ''; ?>">
        <button type="submit" class="btn btn-primary mt-2">Valider</button>
    </form>

    <table class="table table-dark table-striped w-75 mx-auto">
        <thead>
        <tr>
            <th>Mot de passe</th>
            <th class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($mdp as $mp): ?>
            <tr>
                <td><?= $mp['mdp']; ?></td>
                <td class="text-center">
                    <a href="?id=<?= $mp['id']; ?>&a=edit" class="btn btn-outline-info">Modifier</a>
                    
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


<?php require_once '../inc/backfooter.inc.php'; ?>