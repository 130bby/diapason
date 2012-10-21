<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_998df42e7c1104500673c79a64414f18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
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
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1>Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a class=\"symfony-button-green\" href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/quick_tour/index.html\">Read the Quick Tour</a>
        </div>
        ";
        // line 21
        if (($this->getAttribute($this->getContext($context, "app"), "environment") == "dev")) {
            // line 22
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a class=\"symfony-button-green\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_home"), "html", null, true);
            echo "\">Configure</a>
            </div>
        ";
        }
        // line 29
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a class=\"symfony-button-green\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Run The Demo</a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 41
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 42
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 43
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 44
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, $this->getContext($context, "version"), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 61,  84 => 39,  146 => 77,  126 => 66,  135 => 57,  108 => 42,  132 => 69,  47 => 13,  88 => 43,  67 => 31,  111 => 43,  51 => 11,  75 => 27,  38 => 6,  21 => 1,  122 => 47,  95 => 45,  60 => 27,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 42,  101 => 34,  80 => 37,  63 => 23,  36 => 6,  156 => 84,  148 => 79,  142 => 76,  140 => 74,  127 => 53,  123 => 63,  115 => 44,  110 => 43,  85 => 33,  65 => 28,  59 => 22,  45 => 17,  103 => 41,  91 => 36,  74 => 35,  70 => 34,  66 => 21,  25 => 7,  89 => 34,  82 => 19,  92 => 33,  86 => 41,  77 => 26,  57 => 13,  19 => 2,  42 => 24,  29 => 3,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 67,  125 => 53,  119 => 45,  116 => 29,  112 => 58,  102 => 51,  98 => 33,  76 => 37,  73 => 30,  69 => 29,  56 => 17,  32 => 11,  24 => 9,  22 => 6,  23 => 29,  17 => 1,  68 => 22,  61 => 19,  44 => 8,  20 => 1,  161 => 63,  153 => 75,  150 => 49,  147 => 61,  143 => 46,  137 => 45,  129 => 42,  121 => 33,  118 => 48,  113 => 28,  104 => 35,  99 => 38,  94 => 21,  81 => 39,  78 => 28,  72 => 24,  64 => 31,  53 => 23,  50 => 14,  48 => 27,  41 => 11,  39 => 10,  35 => 5,  33 => 5,  30 => 12,  27 => 5,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 85,  155 => 56,  151 => 54,  149 => 52,  141 => 40,  136 => 47,  134 => 71,  131 => 31,  128 => 30,  120 => 63,  117 => 36,  114 => 35,  109 => 55,  106 => 42,  100 => 47,  96 => 34,  93 => 35,  90 => 43,  87 => 31,  83 => 29,  79 => 33,  71 => 31,  62 => 29,  58 => 28,  55 => 12,  52 => 10,  49 => 26,  46 => 9,  43 => 8,  40 => 7,  37 => 14,  34 => 5,  31 => 4,  28 => 3,);
    }
}
