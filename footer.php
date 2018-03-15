<?php
wp_footer()?>


<footer>

    <div class="row">


        <div id="footer">
            <?php dynamic_sidebar('footer') ?>
        </div>
        <div id="footer2">
            <?php dynamic_sidebar('footer2') ?>
        </div>

    </div>

</footer>



<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>

    $(document).ready(function(){
    var fadeInText = function(){
        $(".top-text").fadeIn();
        $(".top-text").css("opacity",1);
        $(".bottom-text h1").css("opacity",1);
        $(".bottom-text h1").fadeIn();
    }

    var fadeInParagraph = function(){
        $("p").css("opacity",1);
    }

    var fillInLines = function(){
        $(".top").css("width","100%");
        $(".top").css("opacity",1);
        $(".inline").css("width","25%");
        $(".inline").css("opacity",1);
    }

    var shrinkText = function(){
        $('.centered-text-area-error').css({
            '-webkit-transform' : 'scale(1.0,1.0)',
            '-moz-transform'    : 'scale(1.0,1.0)',
            '-ms-transform'     : 'scale(1.0,1.0)',
            '-o-transform'      : 'scale(1.0,1.0)',
            'transform'         : 'scale(1.0,1.0)'
        });
    }

    window.setTimeout(shrinkText, 100);
    window.setTimeout(fadeInText, 500);
    window.setTimeout(fillInLines, 3000);
    window.setTimeout(fadeInParagraph, 5000);
    // fadeInText();

    // script slider


        $('.slider').slider();
        $('.scrollspy').scrollSpy();

    var options = [
        {selector: '.class', offset: 200, callback: customCallbackFunc },
        {selector: '.other-class', offset: 200, callback: function() {
                customCallbackFunc();
            } },
    ];
    Materialize.scrollFire(options);

    });

</script>
</body>

</html>