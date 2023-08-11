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

/* themes/contrib/socialbase/templates/form/dropdown.html.twig */
class __TwigTemplate_5a40fbd6d51117784ad1c82b46eb8eda extends \Twig\Template
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
        // line 13
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown field--name-field-post-visibility"], "method", false, false, true, 13), 13, $this->source), "html", null, true);
        echo ">
    ";
        // line 15
        echo "        <button id=\"post-visibility\" type=\"button\" ";
        if (($context["edit_mode"] ?? null)) {
            echo "disabled";
        }
        echo " data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-default dropdown-toggle\">
          <svg class=\"icon-small\" aria-hidden=\"true\">
            <use class=\"btnicon\" xlink:href=\"#icon-";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["selected_icon"] ?? null), 17, $this->source), "html", null, true);
        echo "\"></use>
          </svg>
          <span class=\"text\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["selected"] ?? null), 19, $this->source), "html", null, true);
        echo " </span>
          ";
        // line 20
        if ( !($context["edit_mode"] ?? null)) {
            echo "<span class=\"caret\"></span>";
        }
        // line 21
        echo "        </button>
  ";
        // line 22
        if ( !($context["edit_mode"] ?? null)) {
            // line 23
            echo "    <ul role=\"menu\" aria-labelledby=\"post-visibility\" class=\"dropdown-menu dropdown-menu--visibility\">
      <li class=\"dropdown-header\">";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 24, $this->source), "html", null, true);
            echo "</li>
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["child"]) {
                // line 26
                echo "        <li class=\"list-item list-item--visibility ";
                if (($context["key"] == ($context["active"] ?? null))) {
                    echo "list-item--active";
                }
                echo "\">
          <a href=\"\" role=\"button\">
            ";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["child"], 28, $this->source), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </ul>
    ";
        }
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  99 => 32,  89 => 28,  81 => 26,  77 => 25,  73 => 24,  70 => 23,  68 => 22,  65 => 21,  61 => 20,  57 => 19,  52 => 17,  44 => 15,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/dropdown.html.twig", "/var/www/html/themes/contrib/socialbase/templates/form/dropdown.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "for" => 25);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
