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

/* themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_d367e4b40ababa154c91416c35d252e0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "
<button href=\"#\" data-toggle=\"collapse\" data-target=\"#main-navigation\" type=\"button\" aria-expanded=\"false\" class=\"navbar-toggle collapsed\">
  <span>";
        // line 38
        echo t("Menu", array());
        echo "</span>
  <span class=\"sr-only\">
    ";
        // line 40
        echo t("Toggle navigation", array());
        // line 41
        echo "  </span>
</button>

<div id=\"main-navigation\" class=\"collapse navbar-collapse\">
  <div class=\"navbar-search\">";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 45), "search_block", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</div>
  ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, true, true, 49), "search_block", [], "any", true, true, true, 49)) {
            // line 50
            echo "    <div class=\"navbar__open-search-control\">
      <a href=\"";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("/search/all");
            echo "\" class=\"navbar__open-search-block\" rel=\"search\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click to open search box"));
            echo "\">
        <svg class=\"navbar-nav__icon navbar-nav__icon--search\" aria-hidden=\"true\">
          <title>";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search"));
            echo "</title>
          <use xlink:href=\"#icon-search\"></use>
        </svg>
      </a>
    </div>
  ";
        }
        // line 59
        echo "</div>
";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 47, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 47,  90 => 46,  85 => 59,  76 => 53,  69 => 51,  66 => 50,  63 => 49,  61 => 46,  57 => 45,  51 => 41,  49 => 40,  44 => 38,  40 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig", "/var/www/html/themes/contrib/socialbase/templates/block/block--system-menu-block--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 38, "block" => 46, "if" => 49);
        static $filters = array("escape" => 45, "t" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'block', 'if'],
                ['escape', 't'],
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
