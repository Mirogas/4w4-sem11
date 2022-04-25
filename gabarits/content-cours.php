<?php 

    $categorie = get_the_category();
    // var_dump($categorie);
    // echo $categorie[1]->slug

?>
<article class="formation__cours  <?php  echo $categorie[1]->slug; ?>">
    <?php          
    $titre = get_the_title();
    // 1w1 Mise en page Web
    $titreFiltreCours = substr($titre, 4, -6);
    //$nbHeures = substr($titre, -6);
    // on peut utiliser le champ personnalisé « nombre_dheures »
    $nbHeures = get_field( "nombre_dheures" ) . " heures";
   //echo $nombre_dheure;
    $sigleCours = substr($titre, 0, 3);
    $descCours = get_the_excerpt();
    $descCours = get_the_content();
    ?>

    <code class="cours__invisible">
        <?php echo($descCours) ?>
    </code>
    
    <?php the_post_thumbnail("thumbnail"); ?>
    <h3 class="cours__titre">
        <a href="<?php echo get_permalink(); ?>">
            <?= $titreFiltreCours; ?>
        </a>
    </h3>
    <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
    <p class="cours__sigle"><?= $sigleCours; ?> </p>
    <p class="cours__desc"> <?= wp_trim_words($descCours, 12, "<bouton class='cours_des_bouton> suite </button>'") ?></p>
</article>