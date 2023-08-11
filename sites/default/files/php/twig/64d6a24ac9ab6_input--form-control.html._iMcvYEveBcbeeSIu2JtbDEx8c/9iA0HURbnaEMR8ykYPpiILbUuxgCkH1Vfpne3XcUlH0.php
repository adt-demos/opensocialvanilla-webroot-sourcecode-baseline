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

/* themes/contrib/socialbase/templates/form/input--form-control.html.twig */
class __TwigTemplate_e1e0420fdb6f2f4d4fa78df5ccdb683a extends \Twig\Template
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
        // line 1
        echo "
";
        // line 24
        $context["classes"] = [0 => "form-control"];
        // line 28
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/form--input-groups"), "html", null, true);
        echo "

";
        // line 31
        ob_start(function () { return ''; });
        // line 32
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 33
            echo "
    <div class=\"input-group\">
  ";
        }
        // line 36
        echo "
  ";
        // line 37
        if (($context["prefix"] ?? null)) {
            // line 38
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 38, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 40
        echo "
  ";
        // line 41
        $this->displayBlock('input', $context, $blocks);
        // line 44
        echo "
  ";
        // line 45
        if (($context["suffix"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 46, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "
  ";
        // line 49
        if (($context["input_group"] ?? null)) {
            // line 50
            echo "    </div>
  ";
        }
        // line 52
        echo "
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
    }

    // line 41
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    <input";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo " />
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/input--form-control.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  107 => 41,  103 => 31,  99 => 52,  95 => 50,  93 => 49,  90 => 48,  84 => 46,  82 => 45,  79 => 44,  77 => 41,  74 => 40,  68 => 38,  66 => 37,  63 => 36,  58 => 33,  55 => 32,  53 => 31,  48 => 29,  45 => 28,  43 => 24,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/input--form-control.html.twig", "/var/www/html/themes/contrib/socialbase/templates/form/input--form-control.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 24, "apply" => 31, "if" => 32, "block" => 41);
        static $filters = array("escape" => 29, "spaceless" => 31);
        static $functions = array("attach_library" => 29);

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
