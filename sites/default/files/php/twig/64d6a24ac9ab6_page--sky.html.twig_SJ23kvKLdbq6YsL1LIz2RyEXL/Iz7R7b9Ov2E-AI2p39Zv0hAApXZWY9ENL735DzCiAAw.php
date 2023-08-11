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

/* themes/contrib/socialblue/templates/layout/page--sky.html.twig */
class __TwigTemplate_fa8c7b535edfa3de6f85828a69fc92a7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'section' => [$this, 'block_section'],
            'content' => [$this, 'block_content'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "
";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 38) && ($context["multi_line"] ?? null))) {
            // line 39
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
";
        }
        // line 41
        echo "
";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 42)) {
            // line 43
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
";
        }
        // line 45
        echo "
<main id=\"content\" class=\"main-container ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_style"] ?? null)) ? ("main-container-no-padding-top") : ("")));
        echo "\" role=\"main\">

  ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 48)) {
            // line 49
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 51
        echo "
  ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 52)) {
            // line 53
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 55
        echo "
  ";
        // line 57
        echo "  ";
        $this->displayBlock('section', $context, $blocks);
        // line 98
        echo "
  ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 99)) {
            // line 100
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 102
        echo "
</main>

";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 105)) {
            // line 106
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
";
        }
    }

    // line 57
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 58, $this->source), "html", null, true);
        echo ">

      ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 60) && ($context["display_page_title"] ?? null))) {
            // line 61
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 63
        echo "
      ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_navigation", [], "any", false, false, true, 64)) {
            // line 65
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_navigation", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 67
        echo "
      ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 68) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 68))) {
            // line 69
            echo "        <aside class=\"region--complementary\" role=\"complementary\">
          ";
            // line 70
            if ( !($context["not_card"] ?? null)) {
                echo "<div class=\"content-merged--sky--complementary card\">";
            }
            // line 71
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
            ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
          ";
            // line 73
            if ( !($context["not_card"] ?? null)) {
                echo "</div>";
            }
            // line 74
            echo "        </aside>
      ";
        }
        // line 76
        echo "
      ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "
      ";
        // line 83
        echo "      ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 83) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 83)) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 83))) {
            // line 84
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 87
            echo "      ";
        }
        // line 88
        echo "
      ";
        // line 90
        echo "      ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 90) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "complementary_top", [], "any", false, false, true, 90)) &&  !twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "complementary_bottom", [], "any", false, false, true, 90))) {
            // line 91
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 94
            echo "      ";
        }
        // line 95
        echo "
    </section>
  ";
    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "
      ";
    }

    // line 84
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
        ";
    }

    // line 91
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialblue/templates/layout/page--sky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 92,  241 => 91,  234 => 85,  230 => 84,  224 => 79,  221 => 78,  217 => 77,  211 => 95,  208 => 94,  205 => 91,  202 => 90,  199 => 88,  196 => 87,  193 => 84,  190 => 83,  187 => 81,  185 => 77,  182 => 76,  178 => 74,  174 => 73,  170 => 72,  165 => 71,  161 => 70,  158 => 69,  156 => 68,  153 => 67,  147 => 65,  145 => 64,  142 => 63,  136 => 61,  134 => 60,  128 => 58,  124 => 57,  116 => 106,  114 => 105,  109 => 102,  103 => 100,  101 => 99,  98 => 98,  95 => 57,  92 => 55,  86 => 53,  84 => 52,  81 => 51,  75 => 49,  73 => 48,  68 => 46,  65 => 45,  59 => 43,  57 => 42,  54 => 41,  48 => 39,  46 => 38,  43 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialblue/templates/layout/page--sky.html.twig", "/var/www/html/themes/contrib/socialblue/templates/layout/page--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38, "block" => 57);
        static $filters = array("escape" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
