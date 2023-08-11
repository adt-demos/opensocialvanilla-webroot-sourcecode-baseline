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

/* themes/contrib/socialbase/templates/system/container.html.twig */
class __TwigTemplate_7fb11da570f392e54028cf08d5db099e extends \Twig\Template
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
        echo "
";
        // line 21
        echo "
";
        // line 23
        $context["classes"] = [0 => (( !twig_get_attribute($this->env, $this->source,         // line 24
($context["attributes"] ?? null), "hasClass", [0 => "toolbar-menu-administration"], "method", false, false, true, 24)) ? ("form-group") : ("")), 1 => ((        // line 25
($context["has_parent"] ?? null)) ? ("js-form-wrapper form-wrapper") : ("")), 2 => ((        // line 26
($context["exposed_form"] ?? null)) ? ("views-exposed-form__actions") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 27
($context["attributes"] ?? null), "hasClass", [0 => "field--name-field-comment-body"], "method", false, false, true, 27)) ? ("media-body") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 28
($context["attributes"] ?? null), "hasClass", [0 => "field--name-message"], "method", false, false, true, 28)) ? ("media-body") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 29
($context["attributes"] ?? null), "hasClass", [0 => "more-link"], "method", false, false, true, 29)) ? ("btn btn-flat") : (""))];
        // line 32
        if (($context["bare"] ?? null)) {
            // line 33
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 33, $this->source), "html", null, true);
            echo "
";
        } else {
            // line 35
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
            echo ">
   ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 36, $this->source), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 36,  61 => 35,  55 => 33,  53 => 32,  51 => 29,  50 => 28,  49 => 27,  48 => 26,  47 => 25,  46 => 24,  45 => 23,  42 => 21,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/container.html.twig", "/var/www/html/themes/contrib/socialbase/templates/system/container.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 32);
        static $filters = array("escape" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
