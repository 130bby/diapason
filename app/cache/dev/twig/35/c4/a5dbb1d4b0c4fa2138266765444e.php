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
        // line 68
        echo "
            
            <div class=\"wrap_main\">
    \t\t\t\t";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "            </div> <!-- #main-container -->




        ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 93
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
                    <h1 id=\"logo\"><a href=\"/\"></a></h1>
                </header>   


                ";
        // line 52
        echo $this->env->getExtension('actions')->renderAction("DiginUserBundle:Security:header_login", array(), array());
        // line 53
        echo "
                <!-- menu -->       
                <nav id=\"primary\">
                    <ul class=\"menu\">
                        <li><a href=\"/\" id=\"bt_accueil\"></a></li>
                        <li><a href=\"/diapason\" id=\"bt_diapason\"></a></li>
                        <li><a href=\"/login\" id=\"bt_jt\"></a></li>
                        <li><a href=\"/login\" id=\"bt_ent\"></a></li>
                        <li><a href=\"/contact\" id=\"bt_contact\"></a></li>
                        <li><a href=\"\" id=\"bt_fcbk\" target=\"_blank\"></a></li>
                </nav>


            </div>             
    \t\t";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        // line 78
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
        return array (  161 => 78,  158 => 77,  153 => 71,  135 => 53,  133 => 52,  123 => 44,  120 => 43,  110 => 27,  107 => 26,  93 => 15,  90 => 14,  84 => 10,  78 => 93,  76 => 77,  69 => 72,  67 => 71,  62 => 68,  60 => 43,  49 => 34,  46 => 26,  44 => 14,  40 => 13,  34 => 10,  23 => 1,  29 => 4,  26 => 3,);
    }
}
