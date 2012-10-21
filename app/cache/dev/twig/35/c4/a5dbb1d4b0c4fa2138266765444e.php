<?php

/* ::base.html.twig */
class __TwigTemplate_35c4a5dbb1d4b0c4fa2138266765444e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "
        <div class=\"main-container\">
            <div class=\"main wrapper clearfix\">
\t\t\t\t";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "            </div> <!-- #main -->
        </div> <!-- #main-container -->

        ";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "\t\t\t<link rel=\"stylesheet\" href=\"/css/normalize.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/main.css\">
\t\t\t<link rel=\"stylesheet/less\" href=\"/less/style.less\">
\t\t";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "\t\t\t<script src=\"/js/vendor/less-1.3.0.min.js\"></script>
\t\t\t<!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
\t\t\tto style.css, and replace the 2 lines above by this one:
\t\t\t<link rel=\"stylesheet\" href=\"less/style.css\">
\t\t\t -->
\t\t\t<script src=\"js/vendor/modernizr-2.6.1-respond-1.1.0.min.js\"></script>
\t\t";
    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        // line 32
        echo "
        <div class=\"header-container\">
            <header class=\"wrapper clearfix\">
                <h1 class=\"title\">h1.title</h1>
                <nav>
                    <ul>
                        <li><a href=\"#\">nav ul li a</a></li>
                        <li><a href=\"#\">nav ul li a</a></li>
                        <li><a href=\"#\">nav ul li a</a></li>
                    </ul>
                </nav>
            </header>
        </div>
\t\t";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "\t\t\t<div class=\"footer-container\">
\t\t\t\t<footer class=\"wrapper\">
\t\t\t\t\t<h3>footer</h3>
\t\t\t\t</footer>
\t\t\t</div>
\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
\t\t\t<script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.8.1.min.js\"><\\/script>')</script>
\t\t\t<script src=\"js/main.js\"></script>

\t\t\t<script>
\t\t\t\tvar _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
\t\t\t\t(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
\t\t\t\tg.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
\t\t\t\ts.parentNode.insertBefore(g,s)}(document,'script'));
\t\t\t</script>
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 54,  131 => 53,  126 => 49,  109 => 32,  106 => 31,  96 => 19,  93 => 18,  86 => 14,  83 => 13,  77 => 9,  71 => 70,  69 => 53,  64 => 50,  62 => 49,  57 => 46,  55 => 31,  48 => 26,  45 => 18,  43 => 13,  39 => 12,  33 => 9,  23 => 1,  29 => 4,  26 => 3,);
    }
}
