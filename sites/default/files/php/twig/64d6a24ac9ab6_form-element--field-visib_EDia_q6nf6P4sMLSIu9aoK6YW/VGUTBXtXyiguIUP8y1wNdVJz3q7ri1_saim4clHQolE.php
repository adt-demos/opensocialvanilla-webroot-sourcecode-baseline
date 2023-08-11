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

/* themes/contrib/socialbase/templates/form/form-element--field-visibility.html.twig */
class __TwigTemplate_eb1fe468c0f1566f676b3e4a8d497097 extends \Twig\Template
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
        // line 48
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "form-group"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
        echo ">
    ";
        // line 49
        if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
            // line 50
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 50, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 52
        echo "
    ";
        // line 53
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 54
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 54, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 57))) {
            // line 58
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo ">
            ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 62
        echo "
    ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 63, $this->source), "html", null, true);
        echo "

    ";
        // line 65
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 66
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 66, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 68
        echo "
    ";
        // line 69
        if ((($context["label_display"] ?? null) == "after")) {
            // line 70
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 70, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 72
        echo "
    ";
        // line 73
        if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 73))) {
            // line 74
            echo "        <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 74), "addClass", [0 => "help-block"], "method", false, false, true, 74), 74, $this->source), "html", null, true);
            echo ">
            ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 78
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/form-element--field-visibility.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 78,  116 => 75,  111 => 74,  109 => 73,  106 => 72,  100 => 70,  98 => 69,  95 => 68,  89 => 66,  87 => 65,  82 => 63,  79 => 62,  73 => 59,  68 => 58,  66 => 57,  63 => 56,  57 => 54,  55 => 53,  52 => 52,  46 => 50,  44 => 49,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/form-element--field-visibility.html.twig", "/var/www/html/themes/contrib/socialbase/templates/form/form-element--field-visibility.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 49);
        static $filters = array("escape" => 48);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
