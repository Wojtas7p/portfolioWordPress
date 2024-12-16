<?php /*Template Name: Strona główna*/ ?>
<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
    <main>
        <section id="home-main">
           <div class="main-content">
                <div class="decoration-box-green"></div>
                <div class="scrol-photo">
                    <div class="scrol-content">
                       <?=wp_get_attachment_image( 23 , 'full') ?>
                       <?=wp_get_attachment_image( 26, 'full') ?>
                       <?=wp_get_attachment_image( 25 , 'full') ?>
                       <?=wp_get_attachment_image( 23 , 'full') ?>
                    </div>
                </div>
                
                <div class="decoration-box-yellow"></div>

                <div class="main-text-content">

                    <h1>Portfolio</h1>
                        <div>
                           <p>Jestem , twórcą, który wierzy w siłę wyobraźni i kreatywności. 
                            Każdy projekt to dla mnie historia, którą mogę opowiedzieć za pomocą obrazów, 
                            kolorów czy linii kodu. Specjalizuję się w [Twoja Specjalizacja] i uwielbiam 
                            tworzyć prace, które wywołują emocje, inspirują i zapadają w pamięć. 
                            Moje projekty to coś więcej niż techniczne wykonanie – to sztuka, która żyje.
                           </p>
                       </div>
                       <div>
                           <p>Tworzenie dla mnie to nie tylko praca, ale też sposób wyrażania siebie. 
                            Czerpię inspirację z natury, sztuki i technologii, szukając rozwiązań, 
                            które łączą klasyczne piękno z nowoczesnymi trendami. Moje projekty to coś 
                            więcej niż techniczne wykonanie – to sztuka, która żyje i przemawia do odbiorców.
                            Zapraszam do mojego świata, gdzie wyobraźnia i kreatywność nie mają granic.
                           </p>
                       </div>
                       <div class="decoration-box-shine"></div>
                </div>

           </div>

        
        </section>
        <section id="skills-main">
            <h2>Skills</h2>

            <div class="skillsbox">
            <div class="shape1"></div>
            <div class="shape2"></div>
            
            <p>HTML</p>
            <div class="container">

            <div class="skills html">90%</div>
            </div>

            <p>CSS</p>
            <div class="container">
            <div class="skills css">80%</div>
            </div>

            <p>JavaScript</p>
            <div class="container">
            <div class="skills js">65%</div>
            </div>

            </div>

        </section>
        <section class="adds-main" id="adds-main">
            <div class="toolsh2">
                <h2 class="headertools">Tools</h2>
            </div>
            
            <div class="toolsdiv">
                <a class="toolsclick" href="https://code.visualstudio.com/" target="_blank"><?=wp_get_attachment_image( 28 , 'full', false, ['class'=>'tools-img']) ?></a>
                <a class="toolsclick" href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank"><?=wp_get_attachment_image( 22 , 'full',false, ['class'=>'tools-img']) ?></a>
                <a class="toolsclick" href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank"><?=wp_get_attachment_image( 19 , 'full',false, ['class'=>'tools-img']) ?></a>
            </div>
            <div style="clear: both;"></div>
        </section>

        <section class="projects-main" id="projects-main">
            <div class="projectsh2">
              
            <h2>Projects</h2>
            
            </div>
            <div class="projectdiv">
                <div class="projectsdivs"><a class="projectsclick" href="index.html" target="_blank">This is my first HTML and CSS only page</a></div>
                <div class="projectsdivs"><p class ="projectspar">Hopefully more to come</p></div>            
            </div>
        </section>

            <section class="contact-main" id="contact-main">
                <div class="contact-main-shadow">
                    <!-- Tekst nad formularzem -->
                    <div class="contact-main-text">
                        <h1>Zadaj mi pytanie :)</h1>
                    </div>
    
                    <!-- Formularz -->
                    <form action="#">
                        <div class="name">
                            <label for="fname">First name:</label><br>
                            <input type="text" id="fname" name="fname" required autofocus autocomplete="off"><br>
                        </div>
                        <div class="email">
                            <label for="email">Email:</label><br>
                            <input type="email" id="email" name="email" required autocomplete="off"><br>
                        </div>
                            <div class="Tekst">
                        <label for="story">Write to me:</label><br>
                            </div>
                        <textarea id="story" name="story" rows="5" cols="33" placeholder="Cześć, czy powiesz mi jak..." required></textarea><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </section>

    </main>
	<?php endwhile; ?>
	<?php the_posts_pagination( array(
		'prev_text'          => __( '<' ),
		'next_text'          => __( '>' ),
	) );
	?>
	<?php else : get_template_part( 'content', 'none' ); ?>
<?php endif; ?>
<?php get_footer(); ?>