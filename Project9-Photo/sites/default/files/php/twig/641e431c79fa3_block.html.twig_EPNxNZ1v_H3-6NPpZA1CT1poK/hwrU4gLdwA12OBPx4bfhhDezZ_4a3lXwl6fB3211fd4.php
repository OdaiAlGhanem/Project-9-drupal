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

/* themes/theme__100124/templates/block.html.twig */
class __TwigTemplate_a7b09d0f383ed125e4c0bdb96ef87776 extends \Twig\Template
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
        // line 2
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 4), 4, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 5
($context["plugin_id"] ?? null), 5, $this->source)))];
        // line 8
        $context["theme_path"] = ($this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["node"] ?? null), 8, $this->source)) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        echo " 
 ";
        // line 9
        if ((((((((((((((((((((((((((((((((((((($context["region"] ?? null) == "leftfooterarea") && (($context["style_leftfooterarea"] ?? null) == 0)) || ((($context["region"] ?? null) == "centerfooterarea") && (($context["style_centerfooterarea"] ?? null) == 0))) || ((($context["region"] ?? null) == "rightfooterarea") && (($context["style_rightfooterarea"] ?? null) == 0))) || ((        // line 10
($context["region"] ?? null) == "slideshowshape00") && (($context["style_slideshowshape00"] ?? null) == 0))) || ((        // line 11
($context["region"] ?? null) == "slideshowshape10") && (($context["style_slideshowshape10"] ?? null) == 0))) || ((        // line 12
($context["region"] ?? null) == "slideshowshape20") && (($context["style_slideshowshape20"] ?? null) == 0))) || ((        // line 13
($context["region"] ?? null) == "slideshowabovecolumn1") && (($context["style_slideshowabovecolumn1"] ?? null) == 0))) || ((        // line 14
($context["region"] ?? null) == "slideshowabovecolumn2") && (($context["style_slideshowabovecolumn2"] ?? null) == 0))) || ((        // line 15
($context["region"] ?? null) == "slideshowabovecolumn3") && (($context["style_slideshowabovecolumn3"] ?? null) == 0))) || ((        // line 16
($context["region"] ?? null) == "slideshowabovecolumn4") && (($context["style_slideshowabovecolumn4"] ?? null) == 0))) || ((        // line 17
($context["region"] ?? null) == "slideshowbelowcolumn1") && (($context["style_slideshowbelowcolumn1"] ?? null) == 0))) || ((        // line 18
($context["region"] ?? null) == "slideshowbelowcolumn2") && (($context["style_slideshowbelowcolumn2"] ?? null) == 0))) || ((        // line 19
($context["region"] ?? null) == "slideshowbelowcolumn3") && (($context["style_slideshowbelowcolumn3"] ?? null) == 0))) || ((        // line 20
($context["region"] ?? null) == "slideshowbelowcolumn4") && (($context["style_slideshowbelowcolumn4"] ?? null) == 0))) || ((        // line 21
($context["region"] ?? null) == "contenttopcolumn1") && (($context["style_contenttopcolumn1"] ?? null) == 0))) || ((        // line 22
($context["region"] ?? null) == "contenttopcolumn2") && (($context["style_contenttopcolumn2"] ?? null) == 0))) || ((        // line 23
($context["region"] ?? null) == "contenttopcolumn3") && (($context["style_contenttopcolumn3"] ?? null) == 0))) || ((        // line 24
($context["region"] ?? null) == "contenttopcolumn4") && (($context["style_contenttopcolumn4"] ?? null) == 0))) || ((        // line 25
($context["region"] ?? null) == "contentbottomcolumn1") && (($context["style_contentbottomcolumn1"] ?? null) == 0))) || ((        // line 26
($context["region"] ?? null) == "contentbottomcolumn2") && (($context["style_contentbottomcolumn2"] ?? null) == 0))) || ((        // line 27
($context["region"] ?? null) == "contentbottomcolumn3") && (($context["style_contentbottomcolumn3"] ?? null) == 0))) || ((        // line 28
($context["region"] ?? null) == "contentbottomcolumn4") && (($context["style_contentbottomcolumn4"] ?? null) == 0))) || ((        // line 29
($context["region"] ?? null) == "footerabovecolumn1") && (($context["style_footerabovecolumn1"] ?? null) == 0))) || ((        // line 30
($context["region"] ?? null) == "footerabovecolumn2") && (($context["style_footerabovecolumn2"] ?? null) == 0))) || ((        // line 31
($context["region"] ?? null) == "footerabovecolumn3") && (($context["style_footerabovecolumn3"] ?? null) == 0))) || ((        // line 32
($context["region"] ?? null) == "footerabovecolumn4") && (($context["style_footerabovecolumn4"] ?? null) == 0))) || ((        // line 33
($context["region"] ?? null) == "footercellcolumn1") && (($context["style_footercellcolumn1"] ?? null) == 0))) || ((        // line 34
($context["region"] ?? null) == "footercellcolumn2") && (($context["style_footercellcolumn2"] ?? null) == 0))) || ((        // line 35
($context["region"] ?? null) == "footercellcolumn3") && (($context["style_footercellcolumn3"] ?? null) == 0))) || ((        // line 36
($context["region"] ?? null) == "footercellcolumn4") && (($context["style_footercellcolumn4"] ?? null) == 0))) || ((        // line 37
($context["region"] ?? null) == "footerbelowcolumn1") && (($context["style_footerbelowcolumn1"] ?? null) == 0))) || ((        // line 38
($context["region"] ?? null) == "footerbelowcolumn2") && (($context["style_footerbelowcolumn2"] ?? null) == 0))) || ((        // line 39
($context["region"] ?? null) == "footerbelowcolumn3") && (($context["style_footerbelowcolumn3"] ?? null) == 0))) || ((        // line 40
($context["region"] ?? null) == "footerbelowcolumn4") && (($context["style_footerbelowcolumn4"] ?? null) == 0)))) {
            // line 41
            echo " 
\t";
            // line 42
            if ((($context["region"] ?? null) == "sidebar_first")) {
                echo " 
<div class= \"ttr_sidebar_left_padding\" >
";
            } else {
                // line 44
                echo " 
";
                // line 45
                if ((($context["region"] ?? null) == "sidebar_second")) {
                    echo " 
<div class= \"ttr_sidebar_right_padding\" >
";
                }
                // line 47
                echo " 
";
            }
            // line 48
            echo " 
";
            // line 49
            if (twig_in_filter("shape", ($context["region"] ?? null))) {
                // line 50
                echo "<div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_shapes"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "> 
";
            } else {
                // line 51
                echo " 
";
                // line 52
                if (twig_in_filter("footercellcolumn", ($context["region"] ?? null))) {
                    // line 53
                    echo "<div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_footer_block"], "method", false, false, true, 53), 53, $this->source), "html", null, true);
                    echo "> 
";
                } else {
                    // line 54
                    echo " 
<div";
                    // line 55
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_block"], "method", false, false, true, 55), 55, $this->source), "html", null, true);
                    echo "> 
";
                }
                // line 56
                echo " 
";
            }
            // line 57
            echo " 
<div class=\"margin_collapsetop\"></div> 
";
            // line 59
            if (($context["label"] ?? null)) {
                echo " 
<div class=\"ttr_block_header\"> 
";
                // line 61
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 61, $this->source), "html", null, true);
                echo " 
<h3 ";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "ttr_block_heading"], "method", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "> 
";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 63, $this->source), "html", null, true);
                echo " </h3> 
";
                // line 64
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 64, $this->source), "html", null, true);
                echo " 
";
            } else {
                // line 65
                echo " 
<div class=\"ttr_block_without_header\"> 
";
            }
            // line 67
            echo " 
</div> 
";
            // line 69
            if (twig_in_filter("shape", ($context["region"] ?? null))) {
                echo " 
";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 70, $this->source), "html", null, true);
                echo " 
";
            } else {
                // line 71
                echo " 
";
                // line 72
                if (twig_in_filter("footercellcolumn", ($context["region"] ?? null))) {
                    // line 73
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 73, $this->source), "html", null, true);
                    echo "
";
                } else {
                    // line 75
                    echo "<div class = \"ttr_block_content\"> 
";
                    // line 76
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 76, $this->source), "html", null, true);
                    echo "
</div> 
";
                }
            }
            // line 80
            echo "<div class=\"margin_collapsetop\"></div>
</div>
";
        } else {
            // line 82
            echo " 
<div";
            // line 83
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "> 
";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 84, $this->source), "html", null, true);
            echo " 
";
            // line 85
            if (($context["label"] ?? null)) {
                echo " 
<h2";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 86, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 86, $this->source), "html", null, true);
                echo "</h2> 
";
            }
            // line 87
            echo " 
";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 88, $this->source), "html", null, true);
            echo " 
";
            // line 89
            $this->displayBlock('content', $context, $blocks);
            // line 93
            echo " 
</div> 
";
        }
        // line 95
        echo " 
";
    }

    // line 89
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<div";
        // line 90
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "> 
";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 91, $this->source), "html", null, true);
        echo " 
</div> 
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100124/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 91,  253 => 90,  247 => 89,  242 => 95,  237 => 93,  235 => 89,  231 => 88,  228 => 87,  221 => 86,  217 => 85,  213 => 84,  209 => 83,  206 => 82,  201 => 80,  194 => 76,  191 => 75,  186 => 73,  184 => 72,  181 => 71,  176 => 70,  172 => 69,  168 => 67,  163 => 65,  158 => 64,  154 => 63,  150 => 62,  146 => 61,  141 => 59,  137 => 57,  133 => 56,  128 => 55,  125 => 54,  119 => 53,  117 => 52,  114 => 51,  108 => 50,  106 => 49,  103 => 48,  99 => 47,  93 => 45,  90 => 44,  84 => 42,  81 => 41,  79 => 40,  78 => 39,  77 => 38,  76 => 37,  75 => 36,  74 => 35,  73 => 34,  72 => 33,  71 => 32,  70 => 31,  69 => 30,  68 => 29,  67 => 28,  66 => 27,  65 => 26,  64 => 25,  63 => 24,  62 => 23,  61 => 22,  60 => 21,  59 => 20,  58 => 19,  57 => 18,  56 => 17,  55 => 16,  54 => 15,  53 => 14,  52 => 13,  51 => 12,  50 => 11,  49 => 10,  48 => 9,  44 => 8,  42 => 5,  41 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100124/templates/block.html.twig", "C:\\xampp\\htdocs\\Project9-Photo\\themes\\theme__100124\\templates\\block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 9, "block" => 89);
        static $filters = array("clean_class" => 4, "escape" => 50);
        static $functions = array("file_url" => 8, "active_theme_path" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
                ['file_url', 'active_theme_path']
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
