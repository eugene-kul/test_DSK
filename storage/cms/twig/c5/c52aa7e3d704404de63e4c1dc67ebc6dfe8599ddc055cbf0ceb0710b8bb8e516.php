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

/* D:\OpenServer\domains\localhost/themes/demo/pages/home.htm */
class __TwigTemplate_24f13e8c1a8c279b6204a5bea0828d526070121c770277270714d868ad5864b7 extends \Twig\Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["apartments"] = twig_get_attribute($this->env, $this->source, ($context["ApartmentsList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "
<h1>Квартиры</h1>
<hr>

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apartments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["apartment"]) {
            // line 7
            echo "\t<div class=\"apartments\"
\t\tdata-index=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["apartment"], "id", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\"
\t\tdata-images=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["apartment"], "images", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\"
\t\tdata-props='{
\t\t\t\"name\": \"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["apartment"], "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\",
\t\t\t\"deadline\": \"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["apartment"], "deadline", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\",
\t\t\t\"tags\": \"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["apartment"], "tags", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\",
\t\t\t\"price\": \"";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["apartment"], "price", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\",
\t\t\t\"initial_payment\": \"";
            // line 15
            ((twig_get_attribute($this->env, $this->source, $context["apartment"], "percent", [], "any", false, false, true, 15)) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["apartment"], "price", [], "any", false, false, true, 15) * twig_get_attribute($this->env, $this->source, $context["apartment"], "percent", [], "any", false, false, true, 15)) / 100), "html", null, true))) : (print (null)));
            echo "\"
\t\t}'></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apartment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
<div id=\"modal\"></div>";
    }

    public function getTemplateName()
    {
        return "D:\\OpenServer\\domains\\localhost/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  58 => 9,  54 => 8,  51 => 7,  47 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set apartments = ApartmentsList.records %}

<h1>Квартиры</h1>
<hr>

{% for apartment in apartments %}
\t<div class=\"apartments\"
\t\tdata-index=\"{{ apartment.id }}\"
\t\tdata-images=\"{{ apartment.images }}\"
\t\tdata-props='{
\t\t\t\"name\": \"{{ apartment.name }}\",
\t\t\t\"deadline\": \"{{ apartment.deadline }}\",
\t\t\t\"tags\": \"{{ apartment.tags }}\",
\t\t\t\"price\": \"{{ apartment.price }}\",
\t\t\t\"initial_payment\": \"{{ apartment.percent ? (apartment.price * apartment.percent)/100 : null }}\"
\t\t}'></div>
{% endfor %}

<div id=\"modal\"></div>", "D:\\OpenServer\\domains\\localhost/themes/demo/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 6);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape'],
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
}
