<?php $title = "Info"; ?>

<?php ob_start() ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="/img/maurice4.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="/img/maurice5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="/img/maurice6.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Bienvenue à </small>
                    </h2>
                    <h1 class="brand-name">Maurice</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    
                     <div class="col-lg-6 center">
                        <hr>
                        <h2 class="intro-text text-center">Le
                            <strong>planning</strong>
                        </h2>
                        <hr>
                        <p>15h : Cérémonie</p>
                        <p>18h : Apéro</p>
                        <p>21h : Réception</p>
                    </div>

                    <div class="col-lg-6 center">
                        <hr>
                        <h2 class="intro-text text-center">Le
                            <strong>Menu du soir</strong>
                        </h2>
                        <hr>
                        <p>Foie gras sur son lit de pain d'épices à la figue</p>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <p>Saumon et crevette rose</p>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <p>Trilogie de bûches</p>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">L'incroyable
                        <strong>Lieu de la cérémonie</strong>
                    </h2>
                    <hr>
                </div>
                
                <div class="col-md-4">
                    <p>Adresse:<br>
                        <strong>Cap Malheureux<br>Rivière du Rempart<br>Maurice</strong>
                    </p>
                    <p>Personnes à contacter sur place:<br>
                        <strong>Bidule 0123456789<br>
                        <a href="mailto:name@example.com">name@example.com</a></strong>
                    </p>
                    <p>Personnes à contacter sur Paris:<br>
                        <strong>Bidule 0123456789<br>
                        <a href="mailto:name@example.com">name@example.com</a></strong>
                    </p>
                    
                </div>
            
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d261320.9997505141!2d57.535058319868604!3d-20.18134274405949!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217daa373ba0c59d%3A0x950e4670f39a5680!2sCap+Malheureux%2C+Maurice!5e0!3m2!1sfr!2sfr!4v1460727392989" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Le <strong>lieu</strong> paisible
                        <strong>de la réception</strong>
                    </h2>
                    <hr>
                </div>
                
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d261320.9997505141!2d57.535058319868604!3d-20.18134274405949!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217daa373ba0c59d%3A0x950e4670f39a5680!2sCap+Malheureux%2C+Maurice!5e0!3m2!1sfr!2sfr!4v1460727392989" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-md-4">
                    <p>Adresse:<br>
                        <strong>Cap Malheureux<br>Rivière du Rempart<br>Maurice</strong>
                    </p>
                    <p>Personnes à contacter sur place:<br>
                        <strong>Bidule 0123456789<br>
                        <a href="mailto:name@example.com">name@example.com</a></strong>
                    </p>
                    <p>Personnes à contacter sur Paris:<br>
                        <strong>Bidule 0123456789<br>
                        <a href="mailto:name@example.com">name@example.com</a></strong>
                    </p>
                    
                </div>
            
              

            </div>
        </div>


        

    </div>
    <!-- /.container -->


<?php $content = ob_get_clean() ?>

<?php include "layout.php" ?>