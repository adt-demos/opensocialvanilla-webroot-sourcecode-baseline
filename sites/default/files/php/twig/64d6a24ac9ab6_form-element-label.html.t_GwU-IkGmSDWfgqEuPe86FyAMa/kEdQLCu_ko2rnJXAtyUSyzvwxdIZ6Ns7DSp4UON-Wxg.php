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

/* themes/contrib/socialbase/templates/form/form-element-label.html.twig */
class __TwigTemplate_9a28cb3bef539293242c56bdc6dbc499 extends \Twig\Template
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
        // line 21
        $context["classes"] = [0 => "control-label", 1 => (((        // line 23
($context["title_display"] ?? null) == "after")) ? ("option") : ("")), 2 => (((        // line 24
($context["title_display"] ?? null) == "invisible")) ? ("sr-only") : ("")), 3 => (((        // line 25
($context["title_display"] ?? null) == "above")) ? ("control-label--above") : ("")), 4 => ((        // line 26
($context["required"] ?? null)) ? ("js-form-required") : ("")), 5 => ((        // line 27
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["element"] ?? null), 31, $this->source), "html", null, true);
        // line 32
        if ( !twig_test_empty(($context["title"] ?? null))) {
            // line 33
            echo "<label";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ">";
            // line 34
            if ( !twig_test_empty(($context["icon"] ?? null))) {
                // line 35
                echo "<svg class=\"icon-small\" aria-hidden=\"true\">
        <use xlink:href=\"#icon-";
                // line 36
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null), 36, $this->source), "html", null, true);
                echo "\"></use>
      </svg>
      <span>";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 38, $this->source), "html", null, true);
                echo "</span>";
            } else {
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 40, $this->source), "html", null, true);
            }
            // line 43
            if ((($context["required"] ?? null) && (($context["title_display"] ?? null) != "invisible"))) {
                // line 44
                echo "<span class=\"form-required\" title=\"";
                echo t("This field is required", array());
                echo "\">*</span>";
            }
            // line 46
            if (($context["description"] ?? null)) {
                // line 47
                echo "<p class=\"help-block\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 47, $this->source), "html", null, true);
                echo "</p>";
            }
            // line 49
            echo "</label>";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/form-element-label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 49,  80 => 47,  78 => 46,  73 => 44,  71 => 43,  68 => 40,  64 => 38,  59 => 36,  56 => 35,  54 => 34,  50 => 33,  48 => 32,  46 => 31,  44 => 27,  43 => 26,  42 => 25,  41 => 24,  40 => 23,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/form-element-label.html.twig", "/var/www/html/themes/contrib/socialbase/templates/form/form-element-label.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 21, "if" => 32, "trans" => 44);
        static $filters = array("escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
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
