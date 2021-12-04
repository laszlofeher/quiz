<!DOCTYPE HTML>

<html>
    <head>
        <title>My Quiz</title>
        <base href="<?php print(base_url()); ?>" >
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php print(base_url('/public/assets/css/main.css')); ?>" />
        <noscript><link rel="stylesheet" href="<?php print(base_url('/public/assets/css/noscript.css')); ?>" /></noscript>
    </head>
    <body>

    <!-- Page Wrapper -->
    <div id="page-wrapper">

        <!-- Wrapper -->
        <div id="wrapper">
            <section class="panel color2-alt">
                <div class="intro color2">
                    <h2 class="major">Quiz bejelentkezés</h2>
                    <p>A kapott felhasználónév jelszó párossal kérem lépjen be!</p>
                </div>
                <div class="span-4-5">
                    <h3 class="major">Belépés</h3>
                    <form method="post" action="#">
                        <div class="field">
                            <label for="demo-name">Email</label>
                            <input type="email" name="demo-name" id="demo-name" value="" placeholder="Kérem írja be az email címét!" />
                        </div>
                        <div class="field">
                            <label for="demo-email">Password</label>
                            <input type="password" name="demo-email" id="demo-email" value="" />
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Belépés" class="special color2" /></li>
                        </ul>
                    </form>
                </div>
            </section>
        </div>
    
    </div>
                
    <!-- Scripts -->
    <script src="<?php print(base_url('/public/assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php print(base_url('assets/js/skel.min.js')); ?>"></script>
    <script src="<?php print(base_url('assets/js/main.js')); ?>"></script>        
    </body>
</html>