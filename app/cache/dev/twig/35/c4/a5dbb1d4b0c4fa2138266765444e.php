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
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"dispositif d'apprentis, insertion professionnelle, cfa, formation adultes, btp, guadeloupe, entreprises btp, emploi btp\">
        <meta name=\"viewport\" content=\"width=device-width\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </head>
    <body>
        <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- DEBUT WRAPPER -->
        

            ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "
            
            <div class=\"main-container\">
                <div class=\"main wrapper clearfix\">
    \t\t\t\t";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "                </div> <!-- #main -->
            </div> <!-- #main-container -->




        ";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "DIAPASON - Dispositif d'Insertion d'Apprentis";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "\t\t\t<link rel=\"stylesheet\" href=\"/css/normalize.min.css\">
\t\t\t<!--<link rel=\"stylesheet\" href=\"/css/main.css\">-->
            <link href=\"/css/style.css\" rel=\"stylesheet\" />
            <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script> 
            <![endif]-->
            <!--[if IE]>
            <link href=\"css/style_ie.css\" rel=\"stylesheet\" />
            <![endif]-->
\t\t\t<!--<link rel=\"stylesheet/less\" href=\"/less/style.less\">-->
\t\t";
    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        // line 27
        echo "\t\t\t<script src=\"/js/vendor/less-1.3.0.min.js\"></script>
\t\t\t<!-- Use SimpLESS (Win/Linux/Mac) or LESS.app (Mac) to compile your .less files
\t\t\tto style.css, and replace the 2 lines above by this one:
\t\t\t<link rel=\"stylesheet\" href=\"less/style.css\">
\t\t\t -->
\t\t\t<script src=\"js/vendor/modernizr-2.6.1-respond-1.1.0.min.js\"></script>
\t\t";
    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        // line 44
        echo "            <div id=\"wrap_header\"> 

                <!-- logo -->
                <header id=\"main\">
                    <h1 id=\"logo\"><a href=\"index.html\"></a></h1>
                </header>   

                <!-- menu -->       
                <nav id=\"primary\">
                    <ul class=\"menu\">
                        <li><a href=\"app_dev.php\" id=\"bt_accueil\"></a></li>
                        <li><a href=\"/diapason\" id=\"bt_diapason\"></a></li>
                        <li><a href=\"\" id=\"bt_jt\"></a></li>
                        <li><a href=\"\" id=\"bt_ent\"></a></li>
                        <li><a href=\"/contact\" id=\"bt_contact\"></a></li>
                        <li><a href=\"\" id=\"bt_fcbk\" target=\"_blank\"></a></li>
                </nav>

            </div>             
    \t\t";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "\t\t\t<!-- BEGIN FOOTER -->    
            <footer class=\"footer\">
                <section>
                    <p><br />
                    Tous droit réservés &copy; 2012 - CFA Jean Belloc / 3AD -
                    </p>
                </section>
            </footer>
            <!-- END FOOTER -->

\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script>
\t\t\t<script>window.jQuery || document.write('<script src=\"js/vendor/jquery-1.8.1.min.js\"><\\/script>')</script>
\t\t\t<script src=\"js/main.js\"></script>

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
        return array (  122 => 43,  95 => 15,  60 => 43,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 91,  63 => 16,  36 => 6,  156 => 76,  148 => 68,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 19,  59 => 16,  45 => 9,  103 => 24,  91 => 20,  74 => 22,  70 => 69,  66 => 12,  25 => 4,  89 => 20,  82 => 19,  92 => 14,  86 => 10,  77 => 23,  57 => 22,  19 => 2,  42 => 12,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 44,  119 => 45,  116 => 44,  112 => 27,  102 => 36,  98 => 33,  76 => 24,  73 => 23,  69 => 19,  56 => 12,  32 => 11,  24 => 6,  22 => 3,  23 => 1,  17 => 1,  68 => 68,  61 => 24,  44 => 14,  20 => 2,  161 => 63,  153 => 75,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 75,  72 => 16,  64 => 15,  53 => 15,  50 => 15,  48 => 10,  41 => 7,  39 => 7,  35 => 8,  33 => 5,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 26,  106 => 37,  100 => 30,  96 => 34,  93 => 33,  90 => 28,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 64,  58 => 23,  55 => 14,  52 => 10,  49 => 34,  46 => 26,  43 => 8,  40 => 13,  37 => 9,  34 => 10,  31 => 4,  28 => 7,);
    }
}
