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

/* themes/contrib/socialbase/templates/form/input.html.twig */
class __TwigTemplate_8d4aca8239867b23c187faaa87f451f7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        $context["classes"] = [0 => ((((        // line 24
($context["type"] ?? null) != "submit") && (($context["type"] ?? null) != "button"))) ? ("form-control") : ("")), 1 => (((        // line 25
($context["type"] ?? null) == "button")) ? ("btn") : ("")), 2 => (((        // line 26
($context["type"] ?? null) == "submit")) ? ("btn js-form-submit") : ("")), 3 => ((        // line 27
($context["float_right"] ?? null)) ? ("pull-right") : ("")), 4 => (((        // line 28
($context["button_level"] ?? null) == "raised")) ? ("btn-raised") : ("")), 5 => (((        // line 29
($context["button_type"] ?? null) == "default")) ? ("btn-default") : ("")), 6 => (((        // line 30
($context["button_type"] ?? null) == "flat")) ? ("btn-flat") : ("")), 7 => (((        // line 31
($context["button_type"] ?? null) == "primary")) ? ("btn-primary") : ("")), 8 => (((        // line 32
($context["button_type"] ?? null) == "accent")) ? ("btn-accent") : ("")), 9 => (((        // line 33
($context["button_size"] ?? null) == "small")) ? ("btn-sm") : ("")), 10 => ((twig_get_attribute($this->env, $this->source,         // line 34
($context["attributes"] ?? null), "hasClass", [0 => "crop-preview-wrapper__crop-reset"], "method", false, false, true, 34)) ? ("btn-flat") : ("")), 11 => ((((        // line 35
($context["icon"] ?? null) && ($context["icon_position"] ?? null)) &&  !($context["icon_only"] ?? null))) ? (("icon-" . $this->sandbox->ensureToStringAllowed(($context["icon_position"] ?? null), 35, $this->source))) : (""))];
        // line 38
        ob_start(function () { return ''; });
        // line 39
        echo "
  ";
        // line 40
        if (($context["input_group"] ?? null)) {
            // line 41
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/form--input-groups"), "html", null, true);
            echo "

    <div class=\"input-group\">
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if (($context["prefix"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 47, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "
  ";
        // line 50
        $this->displayBlock('input', $context, $blocks);
        // line 57
        echo "
  ";
        // line 58
        if (($context["suffix"] ?? null)) {
            // line 59
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 59, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 61
        echo "
  ";
        // line 62
        if (($context["input_group"] ?? null)) {
            // line 63
            echo "    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 66, $this->source), "html", null, true);
        echo "
";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
    }

    // line 50
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "      ";
        if (($context["simple_checkbox"] ?? null)) {
            // line 52
            echo "        <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 52, $this->source), "html", null, true);
            echo " />
      ";
        } else {
            // line 54
            echo "        <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo " />
      ";
        }
        // line 56
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  130 => 54,  124 => 52,  121 => 51,  117 => 50,  113 => 38,  108 => 66,  105 => 65,  101 => 63,  99 => 62,  96 => 61,  90 => 59,  88 => 58,  85 => 57,  83 => 50,  80 => 49,  74 => 47,  72 => 46,  69 => 45,  61 => 41,  59 => 40,  56 => 39,  54 => 38,  52 => 35,  51 => 34,  50 => 33,  49 => 32,  48 => 31,  47 => 30,  46 => 29,  45 => 28,  44 => 27,  43 => 26,  42 => 25,  41 => 24,  40 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/input.html.twig", "/var/www/html/themes/contrib/socialbase/templates/form/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "apply" => 38, "if" => 40, "block" => 50);
        static $filters = array("escape" => 41, "spaceless" => 38);
        static $functions = array("attach_library" => 41);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply', 'if', 'block'],
                ['escape', 'spaceless'],
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
