<?php
/*
Template Name: Biographie template
*/
?>
<?php get_header(); ?>

<?php 
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
 
  
  endwhile;
else :
  _e( 'Sorry, no posts were found.', 'textdomain' );
endif;
the_title();
the_content();
?>

<!--
    <div class="description">
        <p class="title" >Zaza est née le 18 mai 1974 à Paris (75), conseillère de Paris, présidente du groupe des élu-es communistes, 
        Elle a été désignée chef de file des communistes aux élections municipales de 2020.
        class="contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
        adipisci commodi qui quam sunt, molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem.<br> <br>
        ipsum dolor sit amet consectetur adipisicing elit. At quam exercitationem perspiciatis magni enim eum blanditiis voluptas. <br> <br>
        quasi, numquam ipsam deserunt necessitatibus molestiae adipisci. Perspiciatis illum consequatur culpa modi animi.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
        adipisci commodi qui quam sunt, molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem.<br> <br>
        ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
        adipisci commodi qui quam sunt, molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem,
        ipsum dolor sit amet consectetur adipisicing elit. <br> <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
        adipisci commodi qui quam sunt, molestiae ipsum dolores cumque <br> <br>
        </p>
    </div> 
    <div class="description">
        <h2 class="title">Études</h2> <br>
        <p class="contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
            adipisci commodi qui quam sunt <br> <br> molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem,
            ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
            adipisci commodi qui quam sunt, molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem,
            ipsum dolor sit amet consectetur adipisicing elit. <br> <br>
        </p>
    </div>
    <div class="description">    
        <h2 class="title">profession</h2> <br>
        <p class="contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
        adipisci commodi qui quam sunt, molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem,
         ipsum dolor sit amet consectetur adipisicing elit. At quam exercitationem perspiciatis magni enim eum blanditiis voluptas <br> <br>
          numquam ipsam deserunt necessitatibus molestiae adipisci. Perspiciatis illum consequatur culpa modi animi. <br> <br>
        </p>
    </div>
    <div class="description">
        <h2 class="title">Parcours militant et politique</h2> <br>
        <p class="contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
        adipisci commodi qui quam sunt, molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem <br> <br>
         ipsum dolor sit amet consectetur adipisicing elit. At quam exercitationem perspiciatis magni enim eum blanditiis voluptas,
          quasi, numquam ipsam deserunt necessitatibus molestiae adipisci. Perspiciatis illum consequatur culpa modi animi.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
        adipisci commodi qui quam sunt, molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem <br> <br>
         ipsum dolor sit amet consectetur adipisicing elit. At quam exercitationem perspiciatis magni enim eum blanditiis voluptas,
          quasi, numquam ipsam deserunt necessitatibus molestiae adipisci. <br> <br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
        adipisci commodi qui quam sunt, molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem <br> <br>
         ipsum dolor sit amet consectetur adipisicing elit. At quam exercitationem perspiciatis magni enim eum blanditiis voluptas,
          quasi, numquam ipsam deserunt necessitatibus molestiae adipisci. Perspiciatis illum consequatur culpa modi animi.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
        adipisci commodi qui quam sunt, molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem,
         ipsum dolor sit amet consectetur adipisicing elit. At quam exercitationem perspiciatis magni enim eum blanditiis voluptas,
          quasi <br> numquam ipsam deserunt necessitatibus molestiae adipisci. Perspiciatis illum consequatur culpa modi animi. <br> <br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tenetur voluptatem incidunt numquam accusamus nisi quasi 
        adipisci commodi qui quam sunt, molestiae ipsum dolores cumque, doloribus a. Provident, commodi molestiae! Lorem,
         ipsum dolor sit amet consectetur adipisicing elit. At quam exercitationem perspiciatis magni enim eum blanditiis voluptas <br> <br>
          quasi, numquam ipsam deserunt necessitatibus molestiae adipisci. Perspiciatis illum consequatur culpa modi animi. <br> <br>
        </p>
    </div>-->

    <?php get_footer(); ?>