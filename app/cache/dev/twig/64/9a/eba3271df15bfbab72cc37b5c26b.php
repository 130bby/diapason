<?php

/* DiginHomeBundle:Default:index.html.twig */
class __TwigTemplate_649aeba3271df15bfbab72cc37b5c26b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div id=\"body_home\"> 
\t\t<section id=\"bt_espaces\">
\t\t
\t\t\t<a href=\"/login\" class=\"bt_espace_jt\">
\t    \t\t<img src=\"/images/bt_espace_jt.png\" alt=\"Espace Jeunes Travailleurs\" />
\t    \t\t<img class=\"hover\" src=\"/images/bt_espace_jt_hov.png\" alt=\"Espace Jeunes Travailleurs\" />
\t    \t</a>

\t\t\t<a href=\"/login\" class=\"bt_espace_ent\">
\t    \t\t<img src=\"/images/bt_espace_ent.png\" alt=\"Espace Entreprises\" />
\t    \t\t<img class=\"hover\" src=\"/images/bt_espace_ent_hov.png\" alt=\"Espace Entreprises\" />
\t    \t</a>

\t\t\t<div class=\"liens_jt\">
\t\t\t\t<a href=\"\">Consulter les nouvelles offres d’emplois</a><br />
\t\t\t\t<a href=\"\">Consulter ou modifier mon profil</a>
\t\t\t</div>
\t\t\t<div class=\"liens_ent\">
\t\t\t\t<a href=\"\">Déposer une nouvelle offre d’emploi</a><br />
\t\t\t\t<a href=\"\">Consulter les candidatures</a>
\t\t\t</div>
\t\t</section>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "DiginHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,);
    }
}
