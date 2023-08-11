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

/* themes/contrib/socialbase/templates/form/form.html.twig */
class __TwigTemplate_5dd8a8c4736125c7a8bd9acb85a48d6b extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", [0 => "form--default"], "method", false, false, true, 16)) {
            // line 17
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/form-default"), "html", null, true);
            echo "
";
        }
        // line 19
        echo "
";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", [0 => "card"], "method", false, false, true, 20)) {
            // line 21
            echo "  <form";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => "card"], "method", false, false, true, 21), 21, $this->source), "html", null, true);
            echo ">
    <div class=\"card\">
      <div class=\"card__block\">
        ";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 24, $this->source), "html", null, true);
            echo "
    </form>

    ";
            // line 30
            echo "
";
        } elseif (        // line 31
($context["is_search_form"] ?? null)) {
            // line 32
            echo "
  ";
            // line 33
            if (($context["in_hero_region"] ?? null)) {
                // line 34
                echo "
    <form";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 35, $this->source), "html", null, true);
                echo ">
      <div class=\"form-group\">
        ";
                // line 37
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 37, $this->source), "html", null, true);
                echo "
      </div>
    </form>

  ";
            } elseif (            // line 41
($context["in_content_top_region"] ?? null)) {
                // line 42
                echo "
    <form";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "search-take-over"], "method", false, false, true, 43), 43, $this->source), "html", null, true);
                echo ">
      <div class=\"form-group\">
        <button class=\"btn--close-search-take-over\" type=\"button\" title=\"";
                // line 45
                echo t("Close search window", array());
                echo "\">
          <svg class=\"icon-search-form-close\" aria-hidden=\"true\">
            <title>";
                // line 47
                echo t("Close search window", array());
                echo "</title>
            <use xlink:href=\"#icon-close\"></use>
          </svg>
        </button>
        ";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 51, $this->source), "html", null, true);
                echo "
      </div>
    </form>

  ";
            } else {
                // line 56
                echo "
    <form";
                // line 57
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 57, $this->source), "html", null, true);
                echo ">
      <div class=\"form-group form--navbar-search\" id=\"navbar-search\">
        ";
                // line 59
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 59, $this->source), "html", null, true);
                echo "
      </div>
    </form>

  ";
            }
            // line 64
            echo "
";
        } else {
            // line 66
            echo "
  <form";
            // line 67
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 67, $this->source), "html", null, true);
            echo ">
    ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 68, $this->source), "html", null, true);
            echo "
  </form>

";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 68,  146 => 67,  143 => 66,  139 => 64,  131 => 59,  126 => 57,  123 => 56,  115 => 51,  108 => 47,  103 => 45,  98 => 43,  95 => 42,  93 => 41,  86 => 37,  81 => 35,  78 => 34,  76 => 33,  73 => 32,  71 => 31,  68 => 30,  62 => 24,  55 => 21,  53 => 20,  50 => 19,  44 => 17,  42 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/form.html.twig", "/var/www/html/themes/contrib/socialbase/templates/form/form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16, "trans" => 45);
        static $filters = array("escape" => 17);
        static $functions = array("attach_library" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape'],
                ['attach_library']
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
