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

/* themes/contrib/socialbase/templates/system/details--plain.html.twig */
class __TwigTemplate_b4fba1314853af37e8d776f8b70c1074 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'heading' => [$this, 'block_heading'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["heading"] = ($context["title"] ?? null);
        // line 18
        $context["body"] = ($context["children"] ?? null);
        // line 19
        echo "
";
        // line 21
        $context["classes"] = [0 => "panel", 1 => ((        // line 23
($context["errors"] ?? null)) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["panel_type"] ?? null), 23, $this->source)))))];
        // line 26
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 26), "removeClass", [0 => "form-wrapper"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
        echo ">
  ";
        // line 28
        echo "
  ";
        // line 29
        if (($context["heading"] ?? null)) {
            // line 30
            echo "    ";
            $this->displayBlock('heading', $context, $blocks);
            // line 46
            echo "  ";
        }
        // line 47
        echo "
  ";
        // line 49
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "
  ";
        // line 78
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 79
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 87
            echo "  ";
        }
        // line 88
        echo "
</div>
";
    }

    // line 30
    public function block_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "      <div class=\"panel-heading\">
        <header>
          ";
        // line 34
        $context["heading_classes"] = [0 => "panel-title"];
        // line 38
        echo "          ";
        if (($context["collapsible"] ?? null)) {
            // line 39
            echo "            <a";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method", false, false, true, 39), 39, $this->source), "html", null, true);
            echo " href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["target"] ?? null), 39, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 39, $this->source), "html", null, true);
            echo "</a>
          ";
        } else {
            // line 41
            echo "            <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading_attributes"] ?? null), "addClass", [0 => ($context["heading_classes"] ?? null)], "method", false, false, true, 41), 41, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null), 41, $this->source), "html", null, true);
            echo "</div>
          ";
        }
        // line 43
        echo "        </header>
      </div>
    ";
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    ";
        // line 51
        $context["body_classes"] = [0 => "panel-body", 1 => ((        // line 53
($context["collapsible"] ?? null)) ? ("panel-collapse") : ("")), 2 => ((        // line 54
($context["collapsible"] ?? null)) ? ("collapse") : ("")), 3 => ((        // line 55
($context["collapsible"] ?? null)) ? ("fade") : ("")), 4 => (((        // line 56
($context["errors"] ?? null) || (($context["collapsible"] ?? null) &&  !($context["collapsed"] ?? null)))) ? ("in") : (""))];
        // line 59
        echo "    ";
        // line 60
        $context["description_classes"] = [0 => "help-block", 1 => (((        // line 62
($context["description"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 62) == "invisible"))) ? ("sr-only") : (""))];
        // line 65
        echo "
    <div";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["body_attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
        echo ">
      ";
        // line 67
        if ((($context["description"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 67) == "before"))) {
            // line 68
            echo "        <p";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 68), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 68), 68, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 70
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 70, $this->source), "html", null, true);
        echo "
      ";
        // line 71
        if (((($context["description"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 71) == "after")) || (twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "position", [], "any", false, false, true, 71) == "invisible"))) {
            // line 72
            echo "        <p";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 72), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 72), 72, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "</p>
      ";
        }
        // line 74
        echo "    </div>
  ";
    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "      ";
        // line 81
        $context["footer_classes"] = [0 => "panel-footer"];
        // line 85
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["footer_attributes"] ?? null), "addClass", [0 => ($context["footer_classes"] ?? null)], "method", false, false, true, 85), 85, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 85, $this->source), "html", null, true);
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/details--plain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 85,  189 => 81,  187 => 80,  183 => 79,  178 => 74,  170 => 72,  168 => 71,  163 => 70,  155 => 68,  153 => 67,  149 => 66,  146 => 65,  144 => 62,  143 => 60,  141 => 59,  139 => 56,  138 => 55,  137 => 54,  136 => 53,  135 => 51,  133 => 50,  129 => 49,  123 => 43,  115 => 41,  105 => 39,  102 => 38,  100 => 34,  96 => 31,  92 => 30,  86 => 88,  83 => 87,  80 => 79,  77 => 78,  74 => 76,  71 => 49,  68 => 47,  65 => 46,  62 => 30,  60 => 29,  57 => 28,  52 => 26,  50 => 23,  49 => 21,  46 => 19,  44 => 18,  42 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/details--plain.html.twig", "/var/www/html/themes/contrib/socialbase/templates/system/details--plain.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "if" => 29, "block" => 30);
        static $filters = array("clean_class" => 23, "escape" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
