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

/* themes/contrib/socialbase/templates/views/views-view.html.twig */
class __TwigTemplate_ccdc42a91525b467e8bcc827a1fef1a9 extends \Twig\Template
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
        // line 35
        echo "
";
        // line 37
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null), 39, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["id"] ?? null), 40, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 41
($context["display_id"] ?? null), 41, $this->source)), 4 => ((        // line 42
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 42, $this->source))) : (""))];
        // line 45
        echo "
";
        // line 47
        $context["error_classes"] = [0 => (((        // line 48
($context["display_id"] ?? null) == "page")) ? ("alert alert-info") : ("")), 1 => (((        // line 49
($context["display_id"] ?? null) != "page")) ? ("small card__block") : (""))];
        // line 52
        echo "
<div";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 53), 53, $this->source), "html", null, true);
        echo ">
  ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 54, $this->source), "html", null, true);
        echo "
  ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 55, $this->source), "html", null, true);
        echo "
  ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 56, $this->source), "html", null, true);
        echo "

  ";
        // line 58
        if (($context["header"] ?? null)) {
            // line 59
            echo "    <div class=\"view-header\">
      ";
            // line 60
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 60, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 63
        echo "
  ";
        // line 64
        if (($context["exposed"] ?? null)) {
            // line 65
            echo "    <div class=\"view-filters form-group\">
      ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 66, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 69
        echo "
  ";
        // line 70
        if (($context["attachment_before"] ?? null)) {
            // line 71
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 72, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "
  ";
        // line 76
        if ( !($context["empty"] ?? null)) {
            // line 77
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 77, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 79
        echo "
  ";
        // line 80
        if (($context["empty"] ?? null)) {
            // line 81
            echo "
    <div";
            // line 82
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["error_classes"] ?? null)], "method", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "\" role=\"alert\">
      <h4 class=\"sr-only\">";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Informative message"));
            echo "</h4>
      ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 84, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 87
        echo "
  ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 88, $this->source), "html", null, true);
        echo "

  ";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 90, $this->source), "html", null, true);
        echo "
  ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 91, $this->source), "html", null, true);
        echo "

  ";
        // line 93
        if (($context["footer"] ?? null)) {
            // line 94
            echo "    <div class=\"view-footer\">
      ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 95, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 98
        echo "
  ";
        // line 99
        if (($context["feed_icons"] ?? null)) {
            // line 100
            echo "    <div class=\"feed-icons\">
      ";
            // line 101
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 101, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 104
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 104,  183 => 101,  180 => 100,  178 => 99,  175 => 98,  169 => 95,  166 => 94,  164 => 93,  159 => 91,  155 => 90,  150 => 88,  147 => 87,  141 => 84,  137 => 83,  133 => 82,  130 => 81,  128 => 80,  125 => 79,  119 => 77,  117 => 76,  114 => 75,  108 => 72,  105 => 71,  103 => 70,  100 => 69,  94 => 66,  91 => 65,  89 => 64,  86 => 63,  80 => 60,  77 => 59,  75 => 58,  70 => 56,  66 => 55,  62 => 54,  58 => 53,  55 => 52,  53 => 49,  52 => 48,  51 => 47,  48 => 45,  46 => 42,  45 => 41,  44 => 40,  43 => 39,  42 => 37,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/views/views-view.html.twig", "/var/www/html/themes/contrib/socialbase/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 37, "if" => 58);
        static $filters = array("clean_class" => 39, "escape" => 53, "t" => 83);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 't'],
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
