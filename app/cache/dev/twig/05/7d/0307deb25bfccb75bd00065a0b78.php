<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_057d0307deb25bfccb75bd00065a0b78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 77,  126 => 66,  139 => 73,  135 => 57,  84 => 33,  54 => 26,  132 => 69,  47 => 24,  88 => 43,  67 => 31,  111 => 42,  51 => 20,  75 => 32,  38 => 12,  21 => 3,  122 => 47,  95 => 47,  60 => 27,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 32,  63 => 29,  36 => 6,  156 => 84,  148 => 79,  142 => 76,  140 => 74,  127 => 67,  123 => 63,  115 => 43,  110 => 43,  85 => 33,  65 => 28,  59 => 28,  45 => 24,  103 => 39,  91 => 36,  74 => 35,  70 => 34,  66 => 29,  25 => 7,  89 => 34,  82 => 19,  92 => 35,  86 => 44,  77 => 31,  57 => 26,  19 => 2,  42 => 24,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 67,  125 => 53,  119 => 62,  116 => 59,  112 => 58,  102 => 51,  98 => 33,  76 => 31,  73 => 30,  69 => 29,  56 => 22,  32 => 11,  24 => 2,  22 => 6,  23 => 3,  17 => 1,  68 => 28,  61 => 27,  44 => 23,  20 => 1,  161 => 63,  153 => 75,  150 => 49,  147 => 61,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 48,  113 => 44,  104 => 35,  99 => 38,  94 => 21,  81 => 39,  78 => 32,  72 => 30,  64 => 31,  53 => 23,  50 => 10,  48 => 25,  41 => 7,  39 => 15,  35 => 8,  33 => 5,  30 => 12,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 85,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 71,  131 => 43,  128 => 68,  120 => 63,  117 => 36,  114 => 35,  109 => 55,  106 => 42,  100 => 39,  96 => 36,  93 => 35,  90 => 45,  87 => 35,  83 => 34,  79 => 33,  71 => 31,  62 => 28,  58 => 27,  55 => 12,  52 => 10,  49 => 26,  46 => 9,  43 => 15,  40 => 22,  37 => 14,  34 => 13,  31 => 5,  28 => 1,);
    }
}
