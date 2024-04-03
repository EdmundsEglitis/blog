<?php require "views/components/head.php" ?>

<?php require "views/components/navbar.php" ?>

<h1>Create a post </h1>


<form method="POST">
    <label> Title:
        <input name="title" />

        <?php if (isset($errors["title"])) { ?>
                <p class="invalid-data"><?= $errors["title"] ?></p>
        <?php } ?>

    </label>
    <label> category ID:
        <input name="category-id"/> 
        <?php if (isset($errors["category-id"])) { ?>
                <p class="invalid-data"><?= $errors["category-id"] ?> </p>
        <?php } ?>
    </label>
    <button>save</button>
<ul>
    <li>1-sport</l1>
    <li>2-music</l1>
    <li>3-food</l1>
</ul>


</form>

<?php require "views/components/footer.php " ?>