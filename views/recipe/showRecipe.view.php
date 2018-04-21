<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb20">
            <img class="recipe__infos__image" src="../../public/img/recipe_cover/salade.jpg" alt="">
        </div>
    </div>
</div>
<div class="container-380">
    <div class="row">
        <div class="col-12">
            <div class="content">
                <div class="col-12">
                    <div class="recipe__infos__general mb20">
                        <h1 class="recipe__infos__title">Informations génerales</h1>
                        <div class="recipe__infos">
                            <ul class="recipe__infos__general__label">
                                <li><i class="far fa-clock"></i>Temps de préparation</li>
                                <li><i class="far fa-clock"></i>Temps de cuisson</li>
                                <li><i class="far fa-user"></i>Nombre d'invités</li>
                                <li><img src="../../public/img/plat.svg" alt="">Type de plat</li>
                                <li><i class="fas fa-signal"></i>Difficulté</li>
                            </ul>
                            <ul class="recipe__infos__general__values">
                                <li><?php echo $recipe['preparation_time']?> minutes</li>
                                <li><?php echo $recipe['bake_time']?> minutes</li>
                                <li><?php echo $recipe['nb_guests']?> <?php echo $recipe['nb_guests'] > 1 ? 'personnes' : 'personne' ?></li>
                                <li><?php echo ucfirst($recipe['plate_type'])?></li>
                                <li><?php echo ucfirst($recipe['difficulty'])?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="recipe__infos__ingredients__wrap mb20">
                        <h1 class="recipe__infos__title">Ingredients</h1>
                        <div class="recipe__infos__ingredients">
                            <div class="ingredient row">
	                            <?php foreach ( $recipeUnits as $recipeUnit ) : ?>
<!--		                            --><?php //var_dump('../../'.$recipeUnit['img_url']) ?>
                                <div class="col-6 ingredient__item">
                                    <img src="<?php echo DIRNAME.''.$recipeUnit['img_url'] ?>" alt="" class="ingredient__img">
                                    <div>
                                        <p class="name"><?php echo $recipeUnit['ingredient_name']?></p>
                                        <p class="unit"><?php echo $recipeUnit['quantity'].' '.$recipeUnit['unit_name'] ?></p>
                                    </div>
                                </div>
	                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="recipe__infos__steps__wrap mb20">
                        <p class="recipe__infos__title">Etapes</p>
                        <div class="row">
                            <?php foreach ( $steps as $step ) : ?>
                            <div class="step col-12">
                                <div class="step__number">
                                    <div class="number"><span><?php echo $step['step']?></span></div>
                                </div>
                                <div class="step__instruction">
                                    <p><?php echo $step['text'] ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="recipe__infos__comments-wrap mb20">
                        <p class="recipe__infos__title">Commentaires</p>
                        <?php foreach ($comments as $comment): ?>
                        <div class="comment">
                            <p class="author">Par <?php echo $comment['author']; ?></p>
                            <p class="date">le <?php echo $comment['created_at'] ?></p>
                            <div class="comment__text">
                                <p class="text" id="comment-<?php echo $comment['id']?>"><?php echo $comment['text'] ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="col-12">
                    <form action="/comment/add" method="POST">
                        <textarea name="text" id="" cols="40" rows="10" placeholder="votre texte"></textarea>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
