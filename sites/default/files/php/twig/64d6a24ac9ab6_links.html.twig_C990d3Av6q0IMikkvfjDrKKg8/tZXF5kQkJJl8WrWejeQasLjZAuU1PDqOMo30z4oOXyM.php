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

/* themes/contrib/socialbase/templates/system/links.html.twig */
class __TwigTemplate_66a0dfac612c0b52acbce86ddc2edc90 extends \Twig\Template
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
        if (($context["links"] ?? null)) {
            // line 36
            if (($context["heading"] ?? null)) {
                // line 37
                if (twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 37)) {
                    // line 38
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 40
                    echo "<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 43
            if ((twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "edit", [], "any", false, false, true, 43) || twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "report", [], "any", false, false, true, 43))) {
                // line 44
                echo "<div class=\"comment__actions pull-right\">
      <button type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-icon-toggle dropdown-toggle\" aria-label=\"";
                // line 45
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("More options"));
                echo "\">
        <svg class=\"btn-icon icon-gray\" aria-hidden=\"true\">
          <title>";
                // line 47
                echo t("More options", array());
                echo "</title>
          <use xlink:href=\"#icon-expand_more\"></use>
        </svg>
      </button>
      <ul";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                echo ">";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 52
($context["attributes"] ?? null), "hasClass", [0 => "inline"], "method", false, false, true, 52)) {
                // line 53
                echo "<ul";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "list-inline"], "method", false, false, true, 53), 53, $this->source), "html", null, true);
                echo ">";
            } else {
                // line 55
                echo "<ul";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 55, $this->source), "html", null, true);
                echo ">";
            }
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 58
                echo "<li";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 58), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"], 58, $this->source))], "method", false, false, true, 58), 58, $this->source), "html", null, true);
                echo ">";
                // line 59
                if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 59)) {
                    // line 60
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 61
$context["item"], "text_attributes", [], "any", false, false, true, 61)) {
                    // line 62
                    echo "<span";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                    echo "</span>";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 63
$context["item"], "disabled", [], "any", false, false, true, 63)) {
                    // line 64
                    echo "<span>";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo "</span>";
                } else {
                    // line 66
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                }
                // line 68
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "</ul>";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "edit", [], "any", false, false, true, 71) || twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "report", [], "any", false, false, true, 71))) {
                // line 72
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 72,  133 => 71,  131 => 70,  125 => 68,  122 => 66,  117 => 64,  115 => 63,  109 => 62,  107 => 61,  105 => 60,  103 => 59,  99 => 58,  95 => 57,  90 => 55,  85 => 53,  83 => 52,  80 => 51,  73 => 47,  68 => 45,  65 => 44,  63 => 43,  55 => 40,  45 => 38,  43 => 37,  41 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/links.html.twig", "/var/www/html/themes/contrib/socialbase/templates/system/links.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 35, "trans" => 47, "for" => 57);
        static $filters = array("escape" => 38, "t" => 45, "clean_class" => 58);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'for'],
                ['escape', 't', 'clean_class'],
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
