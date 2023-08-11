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

/* profiles/contrib/social/modules/social_features/social_post/modules/social_post_album/templates/image-widget--album.html.twig */
class __TwigTemplate_3a73b44335c2ef76a49067b03e68e065 extends \Twig\Template
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
        // line 15
        echo "
";
        // line 16
        if ((is_string($__internal_compile_0 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "upload", [], "any", false, false, true, 16)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#id"] ?? null) : null)) && is_string($__internal_compile_1 = "edit-field-post-image-0-upload") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) {
            // line 17
            echo "  ";
            $context["in_post"] = true;
        } else {
            // line 19
            echo "  ";
            $context["in_post"] = false;
        }
        // line 21
        echo "
";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 22)) {
            // line 23
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/image-widget"), "html", null, true);
            echo "
  <div";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "image-widget"], "method", false, false, true, 24), "removeClass", [0 => "clearfix"], "method", false, false, true, 24), 24, $this->source), "html", null, true);
            echo ">
    <div class=\"preview\">
      ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "preview", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "
    </div>
    <div class=\"data image-widget-data\">

      ";
            // line 30
            if (($context["in_post"] ?? null)) {
                // line 31
                echo "        ";
                // line 32
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 32, $this->source), "preview", "image_crop", ("file_" . $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "fids", [], "any", false, false, true, 32)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#value"] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), 32, $this->source)), "remove_button"), "html", null, true);
                echo "
      ";
            } else {
                // line 34
                echo "        ";
                // line 35
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 35, $this->source), "preview", "image_crop"), "html", null, true);
                echo "
      ";
            }
            // line 37
            echo "
    </div>
  </div>

  ";
            // line 41
            if (($context["in_post"] ?? null)) {
                // line 42
                echo "    ";
                // line 43
                echo "    <div class=\"hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "remove_button", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</div>
    <button type=\"button\" id=\"post-photo-remove\" class=\"btn--post-remove-image\">
      <svg class=\"btn-icon\">
        <use id=\"btnicon\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-close\"></use>
      </svg>
      <span class=\"sr-only\">
        ";
                // line 49
                echo t("Remove image", array());
                // line 50
                echo "      </span>
    </button>

  ";
            } else {
                // line 54
                echo "
    ";
                // line 55
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("image_widget_crop/cropper"), "html", null, true);
                echo "
    ";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "image_crop", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "

  ";
            }
            // line 59
            echo "
";
        } else {
            // line 61
            echo "
  ";
            // line 62
            if (($context["in_post"] ?? null)) {
                // line 63
                echo "
    ";
                // line 65
                echo "    <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "hidden"], "method", false, false, true, 65), 65, $this->source), "html", null, true);
                echo ">
      ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 66, $this->source), "html", null, true);
                echo "
    </div>
    <button type=\"button\" id=\"post-photo-add\" class=\"btn btn-default\">
      <svg class=\"btn-icon\">
        <use id=\"btnicon\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xlink:href=\"#icon-plus\"></use>
      </svg>
      <span>
        ";
                // line 73
                echo t("Add images", array());
                // line 74
                echo "      </span>
    </button>

  ";
            } else {
                // line 78
                echo "
    <div";
                // line 79
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
                echo ">
      ";
                // line 80
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["data"] ?? null), 80, $this->source), "html", null, true);
                echo "
      <div class=\"add-image-help\">
        <svg><use xlink:href=\"#icon-plus\"></use></svg>
        <span class=\"text\">";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add images"));
                echo "</span>
      </div>
      <img src=\"/profiles/contrib/social/modules/social_features/social_post/modules/social_post_album/assets/images/add-image-hidden-image.png\" alt=\"";
                // line 85
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Default hidden image"));
                echo "\" aria-hidden=\"true\">
    </div>

  ";
            }
            // line 89
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/social/modules/social_features/social_post/modules/social_post_album/templates/image-widget--album.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 89,  186 => 85,  181 => 83,  175 => 80,  171 => 79,  168 => 78,  162 => 74,  160 => 73,  150 => 66,  145 => 65,  142 => 63,  140 => 62,  137 => 61,  133 => 59,  127 => 56,  123 => 55,  120 => 54,  114 => 50,  112 => 49,  102 => 43,  100 => 42,  98 => 41,  92 => 37,  86 => 35,  84 => 34,  78 => 32,  76 => 31,  74 => 30,  67 => 26,  62 => 24,  57 => 23,  55 => 22,  52 => 21,  48 => 19,  44 => 17,  42 => 16,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/social/modules/social_features/social_post/modules/social_post_album/templates/image-widget--album.html.twig", "/var/www/html/profiles/contrib/social/modules/social_features/social_post/modules/social_post_album/templates/image-widget--album.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16, "set" => 17, "trans" => 49);
        static $filters = array("escape" => 23, "without" => 32, "t" => 83);
        static $functions = array("attach_library" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'trans'],
                ['escape', 'without', 't'],
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
