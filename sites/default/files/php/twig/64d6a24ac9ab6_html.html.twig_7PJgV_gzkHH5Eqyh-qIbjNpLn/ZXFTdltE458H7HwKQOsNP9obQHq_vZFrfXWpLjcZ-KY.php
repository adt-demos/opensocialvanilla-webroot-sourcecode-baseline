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

/* themes/contrib/socialbase/templates/system/html.html.twig */
class __TwigTemplate_b176ec635d9db6b100d0c9437a809b24 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'custom_css' => [$this, 'block_custom_css'],
            'svg_icons' => [$this, 'block_svg_icons'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $context["body_classes"] = [0 => ((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), 2 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), 3 => ((        // line 31
($context["node_edit"] ?? null)) ? ("page-node-edit") : (""))];
        // line 34
        echo "
<!DOCTYPE html>
<html";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 36, $this->source), "html", null, true);
        echo ">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta charset=\"utf-8\">
    <head-placeholder token=\"";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 42, $this->source));
        echo "\">
    <title>";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 43, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 45, $this->source));
        echo "\">
    ";
        // line 46
        $this->displayBlock('custom_css', $context, $blocks);
        // line 47
        echo "  </head>
  <body";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 48), 48, $this->source), "html", null, true);
        echo ">
    <div id=\"skip-link\">
      <a href=\"#main-content\" class=\"sr-only-focusable\">
        ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
      </a>
    </div>
    ";
        // line 54
        if (($context["is_front"] ?? null)) {
            // line 55
            echo "      <h1 class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 55, $this->source), " | "));
            echo "</h1>
    ";
        }
        // line 57
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 57, $this->source), "html", null, true);
        echo "
    ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 58, $this->source), "html", null, true);
        echo "
    ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 59, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 60, $this->source));
        echo "\">
    ";
        // line 61
        $this->displayBlock('svg_icons', $context, $blocks);
        // line 64
        echo "  </body>
</html>
";
    }

    // line 46
    public function block_custom_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 61
    public function block_svg_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["svg_icons"] ?? null), 62, $this->source));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/system/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 62,  133 => 61,  126 => 46,  120 => 64,  118 => 61,  114 => 60,  110 => 59,  106 => 58,  101 => 57,  95 => 55,  93 => 54,  87 => 51,  81 => 48,  78 => 47,  76 => 46,  72 => 45,  68 => 44,  64 => 43,  60 => 42,  51 => 36,  47 => 34,  45 => 31,  44 => 30,  43 => 29,  42 => 28,  41 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/system/html.html.twig", "/var/www/html/themes/contrib/socialbase/templates/system/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "block" => 46, "if" => 54);
        static $filters = array("clean_class" => 29, "escape" => 36, "raw" => 42, "safe_join" => 43, "t" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
