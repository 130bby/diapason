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
        return array (  139 => 73,  135 => 72,  95 => 47,  67 => 31,  132 => 55,  88 => 43,  84 => 33,  54 => 26,  126 => 49,  21 => 3,  60 => 27,  38 => 12,  18 => 1,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 32,  63 => 16,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 67,  123 => 44,  115 => 42,  110 => 42,  85 => 28,  65 => 18,  59 => 16,  45 => 24,  103 => 24,  91 => 20,  74 => 35,  70 => 20,  66 => 29,  25 => 7,  89 => 20,  82 => 19,  92 => 35,  86 => 14,  77 => 9,  57 => 46,  19 => 2,  42 => 12,  29 => 4,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 50,  119 => 62,  116 => 44,  112 => 43,  102 => 51,  98 => 33,  76 => 31,  73 => 23,  69 => 53,  56 => 18,  32 => 11,  24 => 2,  22 => 6,  23 => 1,  17 => 1,  68 => 20,  61 => 24,  44 => 9,  20 => 1,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 44,  104 => 35,  99 => 33,  94 => 21,  81 => 39,  78 => 25,  72 => 30,  64 => 50,  53 => 23,  50 => 10,  48 => 25,  41 => 7,  39 => 15,  35 => 8,  33 => 5,  30 => 4,  27 => 3,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 54,  131 => 53,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 55,  106 => 31,  100 => 37,  96 => 36,  93 => 18,  90 => 26,  87 => 25,  83 => 13,  79 => 25,  71 => 70,  62 => 28,  58 => 27,  55 => 12,  52 => 16,  49 => 11,  46 => 9,  43 => 13,  40 => 8,  37 => 7,  34 => 5,  31 => 5,  28 => 1,);
    }
}
