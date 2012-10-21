<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_571370a300412158d3aad40cac4d9e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 39,  146 => 77,  139 => 73,  135 => 57,  84 => 39,  54 => 26,  132 => 69,  47 => 10,  88 => 43,  67 => 31,  60 => 27,  122 => 47,  111 => 42,  95 => 45,  51 => 11,  75 => 27,  38 => 6,  21 => 1,  126 => 66,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 5,  101 => 34,  80 => 37,  63 => 23,  36 => 6,  156 => 84,  148 => 79,  142 => 76,  140 => 74,  127 => 67,  123 => 63,  115 => 43,  110 => 43,  85 => 33,  65 => 28,  59 => 22,  45 => 24,  103 => 39,  91 => 36,  74 => 35,  70 => 34,  66 => 24,  25 => 7,  89 => 34,  82 => 19,  92 => 44,  86 => 41,  77 => 31,  57 => 13,  19 => 2,  42 => 24,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 67,  125 => 53,  119 => 30,  116 => 29,  112 => 58,  102 => 51,  98 => 33,  76 => 31,  73 => 30,  69 => 29,  56 => 22,  32 => 11,  24 => 11,  22 => 6,  23 => 3,  17 => 1,  68 => 28,  61 => 27,  44 => 8,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 61,  143 => 46,  137 => 45,  129 => 42,  121 => 33,  118 => 48,  113 => 28,  104 => 35,  99 => 38,  94 => 21,  81 => 39,  78 => 28,  72 => 30,  64 => 31,  53 => 23,  50 => 10,  48 => 25,  41 => 7,  39 => 15,  35 => 5,  33 => 5,  30 => 12,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 85,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 47,  134 => 71,  131 => 31,  128 => 30,  120 => 63,  117 => 36,  114 => 35,  109 => 55,  106 => 42,  100 => 47,  96 => 36,  93 => 35,  90 => 43,  87 => 35,  83 => 34,  79 => 33,  71 => 31,  62 => 28,  58 => 27,  55 => 12,  52 => 10,  49 => 26,  46 => 9,  43 => 8,  40 => 7,  37 => 14,  34 => 5,  31 => 6,  28 => 3,);
    }
}
