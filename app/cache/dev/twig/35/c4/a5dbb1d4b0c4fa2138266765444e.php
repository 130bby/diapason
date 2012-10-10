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
        return array (  126 => 49,  21 => 3,  60 => 19,  38 => 11,  18 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 27,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 18,  59 => 16,  45 => 18,  103 => 24,  91 => 20,  74 => 23,  70 => 20,  66 => 12,  25 => 4,  89 => 20,  82 => 19,  92 => 39,  86 => 14,  77 => 9,  57 => 46,  19 => 2,  42 => 12,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 24,  73 => 23,  69 => 53,  56 => 18,  32 => 5,  24 => 2,  22 => 6,  23 => 1,  17 => 1,  68 => 20,  61 => 24,  44 => 9,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 25,  72 => 16,  64 => 50,  53 => 12,  50 => 15,  48 => 26,  41 => 7,  39 => 12,  35 => 8,  33 => 9,  30 => 4,  27 => 8,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 54,  131 => 53,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 32,  106 => 31,  100 => 30,  96 => 19,  93 => 18,  90 => 26,  87 => 25,  83 => 13,  79 => 25,  71 => 70,  62 => 49,  58 => 14,  55 => 31,  52 => 16,  49 => 11,  46 => 11,  43 => 13,  40 => 8,  37 => 7,  34 => 5,  31 => 5,  28 => 1,);
    }
}
