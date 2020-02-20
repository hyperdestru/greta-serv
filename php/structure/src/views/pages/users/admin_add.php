<?php $errors = checkFields($requireFields); ?>

<?php get_header('admin'); ?>

<h1 class="mb-4">Éditer un utilisateur</h1>

<form action="" method="post" class="form">
    <div class="form-group">
        <?php $error = errorField($errors, 'email'); ?>
        <label for="email">Email</label>
        <input type="email" class="form-control<?= $error['class']; ?>" value="<?= valueField('email'); ?>" id="email" name="email">
        <?= $error['message']; ?>
    </div>

    <div class="form-group">
        <?php $error = errorField($errors, 'password'); ?>
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" value="" id="password" name="password">
        <?= $error['message']; ?>
    </div>

    <div class="form-group">
        <?php $error = errorField($errors, 'confirmPassword'); ?>
        <label for="">Confirmation du mot de passe</label>
        <input type="password" class="form-control" value="" id="confirmPassword" name="confirmPassword">
        <?= $error['message']; ?>
    </div>

    <div class="form-group">
        <?php $error = errorField($errors, 'firstname'); ?>
        <label for="firstname">Prénom</label>
        <input type="text" class="form-control" value="<?= valueField('firstname'); ?>" id="firstname" name="firstname">
        <?= $error['message']; ?>
    </div>

    <div class="form-group">
        <?php $error = errorField($errors, 'lastname'); ?>
        <label for="lastname">Nom</label>
        <input type="text" class="form-control<?= $error['class']; ?>" value="<?= valueField('lastname'); ?>" id="lastname" name="lastname">
        <?= $error['message']; ?>
    </div>

    <div class="form-group">
        <?php $error = errorField($errors, 'role'); ?>
        <label for="role">Rôle</label>
        <select class="form-control<?= $error['class']; ?>" name="role" id="role">
            <option value="">Sélectionner un rôle</option>
            <?php foreach (getRoles() as $value) : ?>
                <option value="<?= $value['id']; ?>"<?= valueFieldSelect('role', $value['id']); ?>><?= $value['name']; ?></option>
            <?php endforeach; ?>
        </select>
        <?= $error['message']; ?>
    </div>

    <div class="form-group">
        <input type="submit" value="Sauvegarder" class="btn btn-primary">
    </div>
</form>

<?php get_footer('admin'); ?>