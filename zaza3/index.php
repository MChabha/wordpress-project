<body>
<?php get_header(); ?>

<main>
<section class="content">
<?php
// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <div class="description">

            <h2 class="title2"><?php the_title(); ?></h2>

            <p class="article"><?php the_content()?></p>
        </div>
   <?php }
    
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}
?>
        </section>
        <section class="content">
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="description">
            <h2 class="title2">Construisons ensemble notre projet pour un Paris en commun</h2>
            <p class="article">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Ipsum non sapiente, sint ea praesentium neque quaerat? 
                Illum quam necessitatibus distinctio hic maiores maxime, velit temporibus, 
                architecto quisquam voluptates id quo!. Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Ipsum non sapiente, sint ea praesentium neque quaerat? 
                Illum quam necessitatibus distinctio hic maiores maxime, velit temporibus, 
                architecto quisquam voluptates id quo!</p>
        </div>
        <div class="description">
            <h2 class="title2">La construction de notre équipe</h2>
            <p class="article">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Laboriosam alias autem quidem facilis minima sed rerum, 
                architecto suscipit error quia maiores cupiditate, quos sit impedit deserunt eligendi! Animi, sequi sed.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Ipsum non sapiente, sint ea praesentium neque quaerat? 
                Illum quam necessitatibus distinctio hic maiores maxime, velit temporibus, 
                architecto quisquam voluptates id quo!</p>
        </div>
        <div class="description">
            <h2 class="title2">Faire des propositions: Ensemble, imaginons la ville de demain</h2>
                <ul>
                    <li class="article">Piétonniser la rue des Écoles entre la mairie et la place des Cerisiers.</li>
                    <li class="article">Construire un terrain de futsal à côté du stadium d'ici 2022.</li>
                    <li class="article">Introduire 50% de produits alimentaires d'origine locale dans les cantines municipales d'ici 2024</li>
                </ul>
            </div>
        <div class="form">
            <form>
              <fieldset>
                <legend><span class="number"></span> Faites votre proposition</legend>
                <input type="text" name="field1" placeholder="Prénom*">
                <input type="text" name="field2" placeholder="Nom*">
                <input type="email" name="field2" placeholder="E-Mail*">
                <textarea name="field3" placeholder="Sujet"></textarea>
                <textarea rows="7" name="field3" placeholder="Votre proposition"></textarea>
              </fieldset>
              <input type="submit" value="Envoyer" />
            </form>
        </div>
    </section>


</main> 
<?php get_footer(); ?>
