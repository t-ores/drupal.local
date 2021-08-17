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

/* themes/drupalbook/templates/system/page.html.twig */
class __TwigTemplate_dd151cb914dad9f9031e52db40f4dcbce012b812010d05a1d54c2c87cda7af22 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 56))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 98
        echo "
";
        // line 100
        $this->displayBlock('main', $context, $blocks);
        // line 168
        echo "

<div class=\"container\">

  <a href=\"/admin/help\" class=\"use-ajax\" data-dialog-type=\"modal\">Помощь в модальном окне</a>
  <br>
  <a href=\"/album/albom-3\" class=\"use-ajax\" data-dialog-type=\"modal\">Albums в модальном окне</a>
  <br>
  <a href=\"/ads\" class=\"use-ajax\" data-dialog-type=\"modal\">Ads в модальном окне</a>

  <div class=\"contact_form\">
  ";
        // line 180
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_form"] ?? null), 180, $this->source), "html", null, true);
        echo "
  ";
        // line 182
        echo "  </div>
</div>

";
        // line 185
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 185)) {
            // line 186
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "navbar_inverse", [], "any", false, false, true, 61)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62), 62, $this->source)))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 66)) {
            // line 67
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 67, $this->source), "html", null, true);
            echo "\">
      ";
        }
        // line 69
        echo "      <div class=\"container\">
        <div class=\"navbar-header\">
          ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "
          ";
        // line 73
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 73)) {
            // line 74
            echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
              <span class=\"sr-only\">";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            echo "</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
          ";
        }
        // line 81
        echo "        </div>
      </div>

      ";
        // line 85
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 85)) {
            // line 86
            echo "        <div class=\"container\">
          <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
            ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
          </div>
          ";
        }
        // line 91
        echo "          ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 91)) {
            // line 92
            echo "          </div>
        </div>
      ";
        }
        // line 95
        echo "    </header>
  ";
    }

    // line 100
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 101, $this->source), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 105
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 105)) {
            // line 106
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 113
            echo "      ";
        }
        // line 114
        echo "
      ";
        // line 116
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 116)) {
            // line 117
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 122
            echo "      ";
        }
        // line 123
        echo "
      ";
        // line 125
        echo "      ";
        // line 126
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 127
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 127) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 127))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 128
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 128) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 128)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 129
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 129) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 129)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 130
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 130)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 130)))) ? ("col-sm-12") : (""))];
        // line 133
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 133), 133, $this->source), "html", null, true);
        echo ">
        <div class=\"container\">
          ";
        // line 136
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 136)) {
            // line 137
            echo "            ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 140
            echo "          ";
        }
        // line 141
        echo "
          ";
        // line 143
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 143)) {
            // line 144
            echo "            ";
            $this->displayBlock('help', $context, $blocks);
            // line 147
            echo "          ";
        }
        // line 148
        echo "
          ";
        // line 150
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 154
        echo "        </div>
      </section>

      ";
        // line 158
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 158)) {
            // line 159
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 164
            echo "      ";
        }
        // line 165
        echo "    </div>
  </div>
";
    }

    // line 106
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "          <div class=\"container\">
            <div role=\"heading\">
              ";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
        echo "
            </div>
          </div>
        ";
    }

    // line 117
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 119
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 137
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "              <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
        echo "</div>
            ";
    }

    // line 144
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "              ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
        echo "
            ";
    }

    // line 150
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "            <a id=\"main-content\"></a>
            ";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
        echo "
          ";
    }

    // line 159
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 161
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 186
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 187, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 188
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/drupalbook/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 188,  348 => 187,  344 => 186,  337 => 161,  334 => 160,  330 => 159,  324 => 152,  321 => 151,  317 => 150,  310 => 145,  306 => 144,  299 => 138,  295 => 137,  288 => 119,  285 => 118,  281 => 117,  273 => 109,  269 => 107,  265 => 106,  259 => 165,  256 => 164,  253 => 159,  250 => 158,  245 => 154,  242 => 150,  239 => 148,  236 => 147,  233 => 144,  230 => 143,  227 => 141,  224 => 140,  221 => 137,  218 => 136,  212 => 133,  210 => 130,  209 => 129,  208 => 128,  207 => 127,  206 => 126,  204 => 125,  201 => 123,  198 => 122,  195 => 117,  192 => 116,  189 => 114,  186 => 113,  183 => 106,  180 => 105,  173 => 101,  169 => 100,  164 => 95,  159 => 92,  156 => 91,  150 => 88,  146 => 86,  143 => 85,  138 => 81,  129 => 75,  126 => 74,  123 => 73,  119 => 71,  115 => 69,  109 => 67,  107 => 66,  102 => 65,  100 => 62,  99 => 61,  98 => 59,  96 => 58,  92 => 57,  86 => 186,  84 => 185,  79 => 182,  74 => 180,  61 => 168,  59 => 100,  56 => 98,  52 => 57,  50 => 56,  48 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupalbook/templates/system/page.html.twig", "/var/www/drupal.local/web/themes/drupalbook/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 56, "block" => 57);
        static $filters = array("escape" => 180, "clean_class" => 62, "t" => 75);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 'clean_class', 't'],
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
