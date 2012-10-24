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
        return array (  54 => 11,  18 => 1,  21 => 3,  135 => 53,  133 => 52,  84 => 10,  67 => 71,  60 => 43,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 77,  107 => 26,  101 => 34,  80 => 24,  63 => 16,  36 => 5,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 27,  85 => 28,  65 => 18,  59 => 13,  45 => 8,  103 => 24,  91 => 20,  74 => 22,  70 => 20,  66 => 12,  25 => 4,  89 => 20,  82 => 19,  92 => 39,  86 => 27,  77 => 23,  57 => 22,  19 => 2,  42 => 7,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 77,  73 => 21,  69 => 72,  56 => 12,  32 => 5,  24 => 26,  22 => 3,  23 => 3,  17 => 1,  68 => 20,  61 => 24,  44 => 9,  20 => 1,  161 => 78,  153 => 71,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 93,  72 => 16,  64 => 15,  53 => 12,  50 => 15,  48 => 8,  41 => 7,  39 => 10,  35 => 8,  33 => 4,  30 => 3,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 43,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 15,  90 => 14,  87 => 19,  83 => 24,  79 => 25,  71 => 19,  62 => 68,  58 => 14,  55 => 14,  52 => 10,  49 => 9,  46 => 11,  43 => 8,  40 => 8,  37 => 7,  34 => 5,  31 => 5,  28 => 1,);
    }
}
