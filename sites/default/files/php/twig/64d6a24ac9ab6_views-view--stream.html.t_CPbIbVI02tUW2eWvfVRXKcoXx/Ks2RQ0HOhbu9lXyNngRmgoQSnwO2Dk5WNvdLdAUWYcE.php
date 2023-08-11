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

/* themes/contrib/socialbase/templates/views/views-view--stream.html.twig */
class __TwigTemplate_97299ee4f3ae034876c59b4b57150e02 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/stream"), "html", null, true);
        echo "
<ul";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "stream"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo ">
  ";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 37, $this->source), "html", null, true);
        echo "
  ";
        // line 38
        if (($context["title"] ?? null)) {
            // line 39
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 39, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 41
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 41, $this->source), "html", null, true);
        echo "
  ";
        // line 42
        if (($context["header"] ?? null)) {
            // line 43
            echo "    <li class=\"stream-item\">
      <i class=\"stream-icon stream-icon-new\"></i>
      ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 45, $this->source), "html", null, true);
            echo "
    </li>
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        if (($context["rows"] ?? null)) {
            // line 50
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 50, $this->source), "html", null, true);
            echo "
  ";
        } elseif (        // line 51
($context["empty"] ?? null)) {
            // line 52
            echo "    <div class=\"view-empty\">
      ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 53, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if (($context["pager"] ?? null)) {
            // line 58
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 58, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if (($context["more"] ?? null)) {
            // line 62
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 62, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 64
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 65
            echo "    <div class=\"view-footer\">
      ";
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 66, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 69
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/views/views-view--stream.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 69,  125 => 66,  122 => 65,  119 => 64,  113 => 62,  111 => 61,  108 => 60,  102 => 58,  100 => 57,  97 => 56,  91 => 53,  88 => 52,  86 => 51,  81 => 50,  79 => 49,  76 => 48,  70 => 45,  66 => 43,  64 => 42,  59 => 41,  53 => 39,  51 => 38,  47 => 37,  43 => 36,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/views/views-view--stream.html.twig", "/var/www/html/themes/contrib/socialbase/templates/views/views-view--stream.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 38);
        static $filters = array("escape" => 35);
        static $functions = array("attach_library" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
