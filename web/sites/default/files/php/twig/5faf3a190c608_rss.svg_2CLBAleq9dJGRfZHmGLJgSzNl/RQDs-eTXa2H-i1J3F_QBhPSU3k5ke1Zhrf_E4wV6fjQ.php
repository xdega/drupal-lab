<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @olivero/../images/rss.svg */
class __TwigTemplate_04cef4b4c5d6c936a15d7b30b7c9d55fd8ac6c23d43f0574e870528793e15413 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"14.1px\" height=\"14.1px\" viewBox=\"0 0 14.1 14.1\">
  <path d=\"M3.9 12.2c0-1.1-.9-1.9-1.9-1.9s-2 .8-2 1.9c0 1.1.9 1.9 1.9 1.9s2-.8 2-1.9zM9 13.4c-.2-2.1-1.1-4.2-2.6-5.7S2.8 5.3.7 5.1H.6c-.2 0-.3.1-.4.2-.1.1-.2.3-.2.5v1.4c0 .3.3.6.6.6 3.1.3 5.5 2.7 5.8 5.8 0 .3.3.6.6.6h1.4c.2 0 .4-.1.5-.2 0-.2.1-.4.1-.6zm5.1.1C14 10 12.5 6.6 10 4.2 7.5 1.7 4.2.2.7 0 .5 0 .3.1.2.2.1.3 0 .5 0 .6V2c0 .3.3.6.6.6 5.8.3 10.5 5 10.8 10.8 0 .3.3.6.6.6h1.4c.2 0 .3-.1.5-.2.2 0 .3-.2.2-.3z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@olivero/../images/rss.svg";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@olivero/../images/rss.svg", "/var/www/html/web/themes/contrib/olivero/images/rss.svg");
    }
}
