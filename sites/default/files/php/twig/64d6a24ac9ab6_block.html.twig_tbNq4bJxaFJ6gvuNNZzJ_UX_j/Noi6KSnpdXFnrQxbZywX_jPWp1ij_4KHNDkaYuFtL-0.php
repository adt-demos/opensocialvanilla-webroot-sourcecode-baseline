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

/* block.html.twig */
class __TwigTemplate_15ec0c4e57071b7140f370f95fdc5982 extends \Twig\Template
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
        // line 48
        echo "
";
        // line 50
        $context["classes"] = [0 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 51
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 51), 51, $this->source))), 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["plugin_id"] ?? null), 52, $this->source))), 2 => ((        // line 53
($context["card"] ?? null)) ? ("card") : (""))];
        // line 56
        echo "
";
        // line 58
        $context["title_classes"] = [0 => ((        // line 59
($context["card"] ?? null)) ? ("card__title") : ("block-title"))];
        // line 62
        echo "

";
        // line 64
        if ( !($context["bare"] ?? null)) {
            // line 65
            echo "
  <section";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 66), 66, $this->source), "html", null, true);
            echo ">

    ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 68, $this->source), "html", null, true);
            echo "
    ";
            // line 69
            if (($context["label"] ?? null)) {
                // line 70
                echo "      <h2 ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method", false, false, true, 70), 70, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 70, $this->source), "html", null, true);
                echo "</h2>
    ";
            }
            // line 72
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 72, $this->source), "html", null, true);
            echo "

";
        }
        // line 75
        echo "
  ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        if ( !($context["bare"] ?? null)) {
            // line 81
            echo "  </section>

";
        }
    }

    // line 76
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 77, $this->source), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 77,  106 => 76,  99 => 81,  97 => 80,  94 => 79,  92 => 76,  89 => 75,  82 => 72,  74 => 70,  72 => 69,  68 => 68,  63 => 66,  60 => 65,  58 => 64,  54 => 62,  52 => 59,  51 => 58,  48 => 56,  46 => 53,  45 => 52,  44 => 51,  43 => 50,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "block.html.twig", "themes/contrib/socialbase/templates/block/block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 50, "if" => 64, "block" => 76);
        static $filters = array("clean_class" => 51, "escape" => 66);
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
