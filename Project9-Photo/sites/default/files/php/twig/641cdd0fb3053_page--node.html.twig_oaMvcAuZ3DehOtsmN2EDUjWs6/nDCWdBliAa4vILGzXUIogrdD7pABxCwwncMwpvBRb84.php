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

/* themes/theme__100124/templates/page--node.html.twig */
class __TwigTemplate_7752d8970a03f101e8161513caf0501a extends \Twig\Template
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
        // line 1
        $context["theme_path"] = ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1, $this->source) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        // line 2
        $context["theme_path1"] = ($this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 2, $this->source) . "/content");
        // line 3
        echo "<div class=\"ttr_banner_slideshow\">
";
        // line 5
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 5) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 5)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 5))) {
            // line 7
            echo "<div class=\"ttr_banner_slideshow_inner_above_widget_container\">
<div class=\"ttr_banner_slideshow_inner_above0 container row\">
";
            // line 9
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 9);
            // line 10
            if (($context["showcolumn"] ?? null)) {
                // line 11
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn1\">
";
                // line 13
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn1", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 17
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 21
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 22
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 22);
            // line 23
            if (($context["showcolumn"] ?? null)) {
                // line 24
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn2\">
";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn2", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 30
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 34
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 35
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 35);
            // line 36
            if (($context["showcolumn"] ?? null)) {
                // line 37
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn3\">
";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn3", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 43
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 47
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 48
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 48);
            // line 49
            if (($context["showcolumn"] ?? null)) {
                // line 50
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowabovecolumn4\">
";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowabovecolumn4", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 56
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 60
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 66
        echo "</div>
<div class=\"ttr_slideshow\">
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_slideshow_inner\">
<ul>
<li id=\"Slide0\" class=\"ttr_slide\" data-slideEffect=\"Blind\">
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\" data-begintime=\"0\" data-effect=\"Blind\" data-easing=\"linear\" data-slide=\"None\" data-duration=\"0\">
</div>
";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape00", [], "any", false, false, true, 76)) {
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape00", [], "any", false, false, true, 76);
            // line 77
            if (($context["showcolumn"] ?? null)) {
                // line 78
                echo "<div class=\"ttr_slideshowshape01\" data-effect=\"Fade\" data-begintime=\"0\" data-duration=\"1\" data-easing=\"linear\" data-slide=\"right\">
";
                // line 79
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape00", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "
</div>
";
            }
        }
        // line 83
        echo "</div>
</li>
<li id=\"Slide1\" class=\"ttr_slide\" data-slideEffect=\"Blind\">
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\" data-begintime=\"0\" data-effect=\"Blind\" data-easing=\"linear\" data-slide=\"None\" data-duration=\"0\">
</div>
";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape10", [], "any", false, false, true, 90)) {
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape10", [], "any", false, false, true, 90);
            // line 91
            if (($context["showcolumn"] ?? null)) {
                // line 92
                echo "<div class=\"ttr_slideshowshape11\" data-effect=\"Fade\" data-begintime=\"0\" data-duration=\"1\" data-easing=\"linear\" data-slide=\"bottom\">
";
                // line 93
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape10", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                echo "
</div>
";
            }
        }
        // line 97
        echo "</div>
</li>
<li id=\"Slide2\" class=\"ttr_slide\" data-slideEffect=\"Blind\">
<div class=\"ttr_slideshow_last\">
<div class=\"ttr_slideshow_element_alignment container\" data-begintime=\"0\" data-effect=\"Blind\" data-easing=\"linear\" data-slide=\"None\" data-duration=\"0\">
</div>
";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape20", [], "any", false, false, true, 104)) {
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape20", [], "any", false, false, true, 104);
            // line 105
            if (($context["showcolumn"] ?? null)) {
                // line 106
                echo "<div class=\"ttr_slideshowshape21\" data-effect=\"Fade\" data-begintime=\"0\" data-duration=\"1\" data-easing=\"linear\" data-slide=\"bottom\">
";
                // line 107
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowshape20", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo "
</div>
";
            }
        }
        // line 111
        echo "</div>
</li>
</ul>
</div>
<div class=\"ttr_slideshow_in\">
<div class=\"margin_collapsetop\"></div>
<div class=\"innermenu\"><div id=\"ttr_menu\"> 
<div class=\"margin_collapsetop\"></div>
<nav class=\"navbar-default navbar-expand-md navbar\">
<div id=\"ttr_menu_inner_in\"> 
<div class=\"ttr_menu_element_alignment container\">
<div class=\"ttr_images_container\">
<div class=\"ttr_menu_logo\">
<a href=\"\">
<img src=\"";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 125, $this->source) . "/menulogo.png"), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        echo "\"class=\"\" />
</a>
</div>
</div>
<div id=\"navigationmenu\">
<div class=\"navbar-header\">
<button id=\"nav-expander\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle\" type=\"button\">
<span class=\"ttr_menu_toggle_button\">
<span class=\"sr-only\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
<span class=\"icon-bar\">
</span>
</span>
<span class=\"ttr_menu_button_text\">
Menu
</span>
</button>
</div>
<div class=\"menu-center collapse navbar-collapse\">
";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "
</div>
</div>
</div>
</div>
</nav>
</div>

</div>
<div class=\"ttr_slideshow_last\">
<div id=\"nav\"></div>
<div class=\"ttr_slideshow_logo\">
</div>
</div>
</div>
</div>
<div class=\"ttr_banner_slideshow\">
";
        // line 166
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 166) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 166)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 166)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 166))) {
            // line 168
            echo "<div class=\"ttr_banner_slideshow_inner_below_widget_container\">
<div class=\"ttr_banner_slideshow_inner_below0 container row\">
";
            // line 170
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 170);
            // line 171
            if (($context["showcolumn"] ?? null)) {
                // line 172
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn1\">
";
                // line 174
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn1", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 178
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 182
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 183
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 183);
            // line 184
            if (($context["showcolumn"] ?? null)) {
                // line 185
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn2\">
";
                // line 187
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn2", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 191
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 195
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 196
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 196);
            // line 197
            if (($context["showcolumn"] ?? null)) {
                // line 198
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn3\">
";
                // line 200
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn3", [], "any", false, false, true, 200), 200, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 204
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 208
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 209
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 209);
            // line 210
            if (($context["showcolumn"] ?? null)) {
                // line 211
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"slideshowbelowcolumn4\">
";
                // line 213
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "slideshowbelowcolumn4", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 217
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 221
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 227
        echo "</div>
<div class=\"margin_collapsetop\"></div>
<div id=\"ttr_page\" class=\"container\">
<div id=\"ttr_content_and_sidebar_container\">
<div id=\"ttr_content\">
";
        // line 232
        $context["type"] = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "getType", [], "any", false, false, true, 232);
        // line 233
        if ((($context["type"] ?? null) == "page")) {
            // line 234
            echo "<div id=\"ttr_html_content_margin\" class=\"container-fluid\">
";
        } else {
            // line 236
            echo "<div id=\"ttr_content_margin\" class=\"container-fluid\">
";
        }
        // line 238
        echo "<div class=\"margin_collapsetop\"></div>
";
        // line 239
        if (($context["breadcrumb"] ?? null)) {
            // line 240
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null), 240, $this->source), "html", null, true);
            echo "
";
        }
        // line 243
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 243) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 243)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 243)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 243))) {
            // line 245
            echo "<div class=\"ttr_topcolumn_widget_container\">
<div class=\"contenttopcolumn0 row\">
";
            // line 247
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 247);
            // line 248
            if (($context["showcolumn"] ?? null)) {
                // line 249
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn1\">
";
                // line 251
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn1", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 255
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 259
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 260
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 260);
            // line 261
            if (($context["showcolumn"] ?? null)) {
                // line 262
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn2\">
";
                // line 264
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn2", [], "any", false, false, true, 264), 264, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 268
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 272
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 273
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 273);
            // line 274
            if (($context["showcolumn"] ?? null)) {
                // line 275
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn3\">
";
                // line 277
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn3", [], "any", false, false, true, 277), 277, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 281
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 285
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 286
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 286);
            // line 287
            if (($context["showcolumn"] ?? null)) {
                // line 288
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"topcolumn4\">
";
                // line 290
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenttopcolumn4", [], "any", false, false, true, 290), 290, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 294
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 298
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 304
        echo "<div style=\"clear:both;\">
</div>
";
        // line 306
        if (($context["tabs"] ?? null)) {
            // line 307
            echo "<div style=\"clear:both;\" class=\"tabs\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null), 307, $this->source), "html", null, true);
            echo "</div>
";
        }
        // line 309
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 309), 309, $this->source), "html", null, true);
        echo "
";
        // line 310
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "messages", [], "any", false, false, true, 310), 310, $this->source), "html", null, true);
        echo "
";
        // line 311
        if (($context["action_links"] ?? null)) {
            // line 312
            echo "<ul class=\"action-links\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null), 312, $this->source), "html", null, true);
            echo "</ul>";
        }
        // line 313
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
        echo "
";
        // line 315
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 315) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 315)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 315)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 315))) {
            // line 317
            echo "<div class=\"ttr_bottomcolumn_widget_container\">
<div class=\"contentbottomcolumn0 row\">
";
            // line 319
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 319);
            // line 320
            if (($context["showcolumn"] ?? null)) {
                // line 321
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn1\">
";
                // line 323
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn1", [], "any", false, false, true, 323), 323, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 327
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 331
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 332
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 332);
            // line 333
            if (($context["showcolumn"] ?? null)) {
                // line 334
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn2\">
";
                // line 336
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn2", [], "any", false, false, true, 336), 336, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 340
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 344
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 345
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 345);
            // line 346
            if (($context["showcolumn"] ?? null)) {
                // line 347
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn3\">
";
                // line 349
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn3", [], "any", false, false, true, 349), 349, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 353
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 357
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 358
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 358);
            // line 359
            if (($context["showcolumn"] ?? null)) {
                // line 360
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"bottomcolumn4\">
";
                // line 362
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contentbottomcolumn4", [], "any", false, false, true, 362), 362, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 366
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 370
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 376
        echo "<div class=\"margin_collapsetop\"></div>
</div> 
</div> 
<div style=\"clear:both;\">
</div>
</div>
</div>
<div class=\"footer-widget-area\">
<div class=\"footer-widget-area_left_border_image\">
<div class=\"footer-widget-area_right_border_image\">
<div class=\"footer-widget-area_inner\">
";
        // line 388
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 388) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 388)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 388)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 388))) {
            // line 390
            echo "<div class=\"ttr_footer-widget-area_inner_above_widget_container\">
<div class=\"ttr_footer-widget-area_inner_above0 container row\">
";
            // line 392
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 392);
            // line 393
            if (($context["showcolumn"] ?? null)) {
                // line 394
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn1\">
";
                // line 396
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn1", [], "any", false, false, true, 396), 396, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 400
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 404
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 405
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 405);
            // line 406
            if (($context["showcolumn"] ?? null)) {
                // line 407
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn2\">
";
                // line 409
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn2", [], "any", false, false, true, 409), 409, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 413
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 417
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 418
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 418);
            // line 419
            if (($context["showcolumn"] ?? null)) {
                // line 420
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn3\">
";
                // line 422
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn3", [], "any", false, false, true, 422), 422, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 426
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 430
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 431
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 431);
            // line 432
            if (($context["showcolumn"] ?? null)) {
                // line 433
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerabovecolumn4\">
";
                // line 435
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerabovecolumn4", [], "any", false, false, true, 435), 435, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 439
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 443
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 449
        echo "</div>
</div>
</div>
</div>
<div class=\"margin_collapsetop\"></div>
<footer id=\"ttr_footer\">
<div class=\"margin_collapsetop\"></div>
 <div id=\"ttr_footer_inner\">
";
        // line 458
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 458) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 458)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 458)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 458))) {
            // line 460
            echo "<div class=\"ttr_footer-widget-cell_inner_widget_container\">
<div class=\"ttr_footer-widget-cell_inner0 container row\">
";
            // line 462
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 462);
            // line 463
            if (($context["showcolumn"] ?? null)) {
                // line 464
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn1\">
";
                // line 466
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn1", [], "any", false, false, true, 466), 466, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 470
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 474
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 475
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 475);
            // line 476
            if (($context["showcolumn"] ?? null)) {
                // line 477
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn2\">
";
                // line 479
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn2", [], "any", false, false, true, 479), 479, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 483
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 487
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 488
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 488);
            // line 489
            if (($context["showcolumn"] ?? null)) {
                // line 490
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn3\">
";
                // line 492
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn3", [], "any", false, false, true, 492), 492, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 496
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 500
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 501
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 501);
            // line 502
            if (($context["showcolumn"] ?? null)) {
                // line 503
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footercellcolumn4\">
";
                // line 505
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footercellcolumn4", [], "any", false, false, true, 505), 505, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 509
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 513
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 519
        echo "<div id=\"ttr_footer_top_for_widgets\">
<div  class=\"ttr_footer_top_for_widgets_inner\">
";
        // line 521
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 521) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 521)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 521))) {
            // line 522
            echo "<div class=\"footer-widget-area_fixed row\">
<div style=\"margin:0 auto;\"></div>
";
            // line 524
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 524)) {
                // line 525
                echo "<div  id=\"first\" class=\"widget-area col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 526
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "leftfooterarea", [], "any", false, false, true, 526), 526, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 530
                echo "<div  id=\"first\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\"></div>
";
            }
            // line 535
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 535)) {
                // line 536
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 537
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "centerfooterarea", [], "any", false, false, true, 537), 537, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 541
                echo "<div  id=\"second\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-xs d-block\" style=\"clear:both;\"></div>
";
            }
            // line 546
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 546)) {
                // line 547
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
";
                // line 548
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "rightfooterarea", [], "any", false, false, true, 548), 548, $this->source), "html", null, true);
                echo "
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            } else {
                // line 552
                echo "<div  id=\"third\" class=\"widget-area  col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12\">
 
</div>
<div class=\" visible-lg visible-md visible-sm visible-xs d-xl-block d-lg-block d-md-block d-sm-block d-block\" style=\"clear:both;\"></div>
";
            }
            // line 557
            echo "</div>
";
        }
        // line 559
        echo "</div>
</div>
<div class=\"ttr_footer_bottom_footer\">
<div class=\"ttr_footer_bottom_footer_inner\">
<div class=\"ttr_footer_element_alignment container\">
</div>
<div id=\"ttr_footer_designed_by_links\">
<a href=\"http://templatetoaster.com\" target=\"_self\"> Drupal Theme </a>
<span id=\"ttr_footer_designed_by\"> Designed With TemplateToaster </span>
</div>
";
        // line 569
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 569, $this->source), "html", null, true);
        echo "
<a href=\"http://www.facebook.com/TemplateToaster\" class=\"ttr_footer_facebook \" target=\"_self\" >
</a>
<a href=\"http://www.templatetoaster.com\" class=\"ttr_footer_linkedin \" target=\"_self\" >
</a>
<a href=\"http://twitter.com/templatetoaster\" class=\"ttr_footer_twitter \" target=\"_self\" >
</a>
<a href=\"http://www.templatetoaster.com\" class=\"ttr_footer_instagram \" target=\"_self\" >
</a>
<a href=\"https://www.youtube.com/templatetoaster\" class=\"ttr_footer_youtube \" target=\"_self\" >
</a>
</div>
</div>
</div>
</footer>
<div class=\"margin_collapsetop\"></div>
<div class=\"footer-widget-area\">
";
        // line 587
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 587) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 587)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 587)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 587))) {
            // line 589
            echo "<div class=\"ttr_footer-widget-area_inner_below_widget_container\">
<div class=\"ttr_footer-widget-area_inner_below0 container row\">
";
            // line 591
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 591);
            // line 592
            if (($context["showcolumn"] ?? null)) {
                // line 593
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn1\">
";
                // line 595
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn1", [], "any", false, false, true, 595), 595, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 599
                echo "<div class=\"cell1 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 603
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 604
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 604);
            // line 605
            if (($context["showcolumn"] ?? null)) {
                // line 606
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn2\">
";
                // line 608
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn2", [], "any", false, false, true, 608), 608, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 612
                echo "<div class=\"cell2 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 616
            echo "<div class=\" visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 617
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 617);
            // line 618
            if (($context["showcolumn"] ?? null)) {
                // line 619
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn3\">
";
                // line 621
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn3", [], "any", false, false, true, 621), 621, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 625
                echo "<div class=\"cell3 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 629
            echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
";
            // line 630
            $context["showcolumn"] = twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 630);
            // line 631
            if (($context["showcolumn"] ?? null)) {
                // line 632
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\">
<div class=\"footerbelowcolumn4\">
";
                // line 634
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footerbelowcolumn4", [], "any", false, false, true, 634), 634, $this->source), "html", null, true);
                echo "
</div>
</div>
";
            } else {
                // line 638
                echo "<div class=\"cell4 col-xl-3 col-lg-3 col-md-6 col-sm-12  col-xs-12  col-12\"  style=\"background-color:transparent;\">
 
</div>
";
            }
            // line 642
            echo "<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-xl-block d-lg-block visible-md-block d-md-block visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
</div>
</div>
<div style=\"clear: both;\"></div>
";
        }
        // line 648
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100124/templates/page--node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1117 => 648,  1109 => 642,  1103 => 638,  1096 => 634,  1092 => 632,  1090 => 631,  1088 => 630,  1085 => 629,  1079 => 625,  1072 => 621,  1068 => 619,  1066 => 618,  1064 => 617,  1061 => 616,  1055 => 612,  1048 => 608,  1044 => 606,  1042 => 605,  1040 => 604,  1037 => 603,  1031 => 599,  1024 => 595,  1020 => 593,  1018 => 592,  1016 => 591,  1012 => 589,  1010 => 587,  990 => 569,  978 => 559,  974 => 557,  967 => 552,  960 => 548,  957 => 547,  955 => 546,  948 => 541,  941 => 537,  938 => 536,  936 => 535,  929 => 530,  922 => 526,  919 => 525,  917 => 524,  913 => 522,  911 => 521,  907 => 519,  899 => 513,  893 => 509,  886 => 505,  882 => 503,  880 => 502,  878 => 501,  875 => 500,  869 => 496,  862 => 492,  858 => 490,  856 => 489,  854 => 488,  851 => 487,  845 => 483,  838 => 479,  834 => 477,  832 => 476,  830 => 475,  827 => 474,  821 => 470,  814 => 466,  810 => 464,  808 => 463,  806 => 462,  802 => 460,  800 => 458,  790 => 449,  782 => 443,  776 => 439,  769 => 435,  765 => 433,  763 => 432,  761 => 431,  758 => 430,  752 => 426,  745 => 422,  741 => 420,  739 => 419,  737 => 418,  734 => 417,  728 => 413,  721 => 409,  717 => 407,  715 => 406,  713 => 405,  710 => 404,  704 => 400,  697 => 396,  693 => 394,  691 => 393,  689 => 392,  685 => 390,  683 => 388,  670 => 376,  662 => 370,  656 => 366,  649 => 362,  645 => 360,  643 => 359,  641 => 358,  638 => 357,  632 => 353,  625 => 349,  621 => 347,  619 => 346,  617 => 345,  614 => 344,  608 => 340,  601 => 336,  597 => 334,  595 => 333,  593 => 332,  590 => 331,  584 => 327,  577 => 323,  573 => 321,  571 => 320,  569 => 319,  565 => 317,  563 => 315,  559 => 313,  554 => 312,  552 => 311,  548 => 310,  544 => 309,  538 => 307,  536 => 306,  532 => 304,  524 => 298,  518 => 294,  511 => 290,  507 => 288,  505 => 287,  503 => 286,  500 => 285,  494 => 281,  487 => 277,  483 => 275,  481 => 274,  479 => 273,  476 => 272,  470 => 268,  463 => 264,  459 => 262,  457 => 261,  455 => 260,  452 => 259,  446 => 255,  439 => 251,  435 => 249,  433 => 248,  431 => 247,  427 => 245,  425 => 243,  420 => 240,  418 => 239,  415 => 238,  411 => 236,  407 => 234,  405 => 233,  403 => 232,  396 => 227,  388 => 221,  382 => 217,  375 => 213,  371 => 211,  369 => 210,  367 => 209,  364 => 208,  358 => 204,  351 => 200,  347 => 198,  345 => 197,  343 => 196,  340 => 195,  334 => 191,  327 => 187,  323 => 185,  321 => 184,  319 => 183,  316 => 182,  310 => 178,  303 => 174,  299 => 172,  297 => 171,  295 => 170,  291 => 168,  289 => 166,  269 => 148,  241 => 125,  225 => 111,  218 => 107,  215 => 106,  213 => 105,  210 => 104,  202 => 97,  195 => 93,  192 => 92,  190 => 91,  187 => 90,  179 => 83,  172 => 79,  169 => 78,  167 => 77,  164 => 76,  153 => 66,  145 => 60,  139 => 56,  132 => 52,  128 => 50,  126 => 49,  124 => 48,  121 => 47,  115 => 43,  108 => 39,  104 => 37,  102 => 36,  100 => 35,  97 => 34,  91 => 30,  84 => 26,  80 => 24,  78 => 23,  76 => 22,  73 => 21,  67 => 17,  60 => 13,  56 => 11,  54 => 10,  52 => 9,  48 => 7,  46 => 5,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100124/templates/page--node.html.twig", "C:\\xampp\\htdocs\\Project9-Photo\\themes\\theme__100124\\templates\\page--node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 5);
        static $filters = array("escape" => 13, "t" => 125);
        static $functions = array("active_theme_path" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 't'],
                ['active_theme_path']
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
