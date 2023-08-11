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

/* themes/contrib/socialbase/templates/system/image.html.twig */
class __TwigTemplate_331a1c348bbda9337b3e77e61eae1c91 extends \Twig\Template
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
        // line 15
        echo "
";
        // line 16
        if ((($context["style_name"] ?? null) == "social_large")) {
            // line 17
            echo "
  ";
            // line 18
            $context["classes"] = [0 => "hero-avatar"];
            // line 21
            echo "
";
        } else {
            // line 23
            echo "
  ";
            // line 24
            $context["classes"] = [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
($context["theme"] ?? null), "settings", [], "any", false, false, true, 25), "image_shape", [], "any", false, false, true, 25)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 25), "image_shape", [], "any", false, false, true, 25)) : ("")), 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 26
($context["theme"] ?? null), "settings", [], "any", false, false, true, 26), "image_responsive", [], "any", false, false, true, 26)) ? ("img-responsive") : (""))];
            // line 28
            echo "
";
        }
        // line 30
        echo "
  <img";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 31), 31, $this->source), "html", null, true);
        echo " />
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 31,  64 => 30,  60 => 28,  58 => 26,  57 => 25,  56 => 24,  53 => 23,  49 => 21,  47 => 18,  44 => 17,  42 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/image.html.twig", "/var/www/html/themes/contrib/socialbase/templates/system/image.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16, "set" => 18);
        static $filters = array("escape" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
