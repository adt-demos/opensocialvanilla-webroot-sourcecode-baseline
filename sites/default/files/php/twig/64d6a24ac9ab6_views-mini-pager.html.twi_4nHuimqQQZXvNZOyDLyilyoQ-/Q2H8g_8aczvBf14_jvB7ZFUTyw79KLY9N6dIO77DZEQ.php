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

/* themes/contrib/socialbase/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_3c946a49592744312aea63fda8fc632b extends \Twig\Template
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
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/pagination"), "html", null, true);
        echo "
";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 15) || twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 15))) {
            // line 16
            echo "  <nav role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"sr-only\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            echo "</h4>
    <ul class=\"mini-pager\">
      ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 19)) {
                // line 20
                echo "        <li class=\"pager__item pager__item--previous\">
          <a class=\"btn btn-flat\" href=\"";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 21), "href", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 21), "attributes", [], "any", false, false, true, 21), 21, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span aria-hidden=\"true\">
              <svg class=\"icon-small\" aria-hidden=\"true\">
                <title>";
                // line 24
                echo t("Previous page", array());
                echo "</title>
                <use xlink:href=\"#icon-navigate_before\">  </use>
              </svg>
            </span>
            <span>";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Newer items"));
                echo " </span>
          </a>
        </li>
      ";
            }
            // line 32
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 32)) {
                // line 33
                echo "        <li class=\"pager__item pager__item--next\">
          <a class=\"btn btn-flat\" href=\"";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 34), "href", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 34), "attributes", [], "any", false, false, true, 34), 34, $this->source), "href", "title", "rel"), "html", null, true);
                echo ">
            <span>";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Older items"));
                echo " </span>
            <span aria-hidden=\"true\">
              <svg class=\"icon-small\" aria-hidden=\"true\">
                <use xlink:href=\"#icon-navigate_next\"> </use>
              </svg>
            </span>
          </a>
        </li>
      ";
            }
            // line 44
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 44,  96 => 35,  88 => 34,  85 => 33,  82 => 32,  75 => 28,  68 => 24,  58 => 21,  55 => 20,  53 => 19,  48 => 17,  45 => 16,  43 => 15,  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/views/views-mini-pager.html.twig", "/var/www/html/themes/contrib/socialbase/templates/views/views-mini-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 15, "trans" => 24);
        static $filters = array("escape" => 14, "t" => 17, "without" => 21);
        static $functions = array("attach_library" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 't', 'without'],
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
