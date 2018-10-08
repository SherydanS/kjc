<?php

/* themes/yg_restaurant/templates/page--front.html.twig */
class __TwigTemplate_fb7495ebd89c427efe19f26b1802830fca7fba0aae74448867509e2e8a5317d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 64, "block" => 96, "set" => 110);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block', 'set'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        echo "

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">
<!-- Navigation
    ==========================================-->
";
        // line 64
        if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
            // line 65
            if (($context["header_lite"] ?? null)) {
                // line 66
                echo "<header id=\"header\" class=\"header-lite\" >
";
            } else {
                // line 68
                echo "<header id=\"header\" class=\"header-bg\"   >
";
            }
            // line 70
            echo "    <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
    <div class=\"container\">
      ";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "logo", array()), "html", null, true));
            echo "
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <i class=\"fa fa-bars\"></i> </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
            echo "
      </div>
    </div>
  </nav>
</header>
";
        }
        // line 81
        echo "
";
        // line 82
        if ($this->getAttribute(($context["page"] ?? null), "title", array())) {
            // line 83
            echo "    <div class=\"page-header\">
     <div class=\"container\">
        <div id=\"page-title\">
           ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "title", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
";
        }
        // line 91
        echo "

          ";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
        echo "

";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 165
        echo "

  <footer>
    <!-- FOOTER SECTION-->
<section id=\"footer\">
  <div class=\"container wow fadeInUp\">
    <div class=\"row footer-bottom\">
      <div class=\"col-md-6 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.3s\">
        ";
        // line 173
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_address", array()), "html", null, true));
        echo "
      </div>
      <div class=\"col-md-3 col-sm-12 footer-bottom-col2 wow fadeInUp\" data-wow-delay=\"0.6s\">
        ";
        // line 176
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_col_2", array()), "html", null, true));
        echo "
      </div>
      <div class=\"col-md-3 col-sm-12 footer-bottom-col3 wow fadeInUp\" data-wow-delay=\"0.9s\">
        ";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_col_3", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>
</section>
<div class=\"footer-menu-social\">
  <div class=\"container\">
   <div class=\"row\">
    <div class=\"col-md-8 footer-menu wow fadeInUp\" data-wow-delay=\"0.3s\">
      <ul>
       ";
        // line 189
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
      </ul>
    </div>
    <div class=\"col-md-4 footer-social wow fadeInUp\" data-wow-delay=\"0.6s\">
      <ul>
          ";
        // line 194
        if (($context["facebook"] ?? null)) {
            // line 195
            echo "           <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook"] ?? null), "html", null, true));
            echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
          ";
        }
        // line 197
        echo "          ";
        if (($context["twitter"] ?? null)) {
            // line 198
            echo "           <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter"] ?? null), "html", null, true));
            echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
          ";
        }
        // line 200
        echo "          ";
        if (($context["pinterest"] ?? null)) {
            // line 201
            echo "           <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest"] ?? null), "html", null, true));
            echo "\"><i class=\"fa fa-pinterest\"></i></a>
          ";
        }
        // line 203
        echo "          ";
        if (($context["linkedin"] ?? null)) {
            // line 204
            echo "           <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin"] ?? null), "html", null, true));
            echo "\"><i class=\"fa fa-linkedin\"></i> </a>
          ";
        }
        // line 206
        echo "       </ul>
     </div>
    <div class=\"col-md-6 mx-auto text-center copyright wow fadeInUp\" data-wow-delay=\"0.3s\">
      <p> &copy;2018.<a href=\"#\" class=\"our-info\"> KJ CONSTRUCTION</a>. All Rights Reserved.<br></p>
      <!-- <p class=\"our-info\">Theme By <a href=\"https://www.drupaldevelopersstudio.com/\">Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\">Young Globes</a></p> -->
    </div>
   </div>
  </div>
</div>
  </footer>
</body>
";
    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        // line 97
        echo "  <div role=\"main\" class=\"blog-container js-quickedit-main-content\">

      ";
        // line 100
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 101
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 106
            echo "      ";
        }
        // line 107
        echo "
      ";
        // line 109
        echo "      ";
        // line 110
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 111
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 112
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 113
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 114
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("") : ("")));
        // line 117
        echo "      <section class=\"main-content-region-1\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 120
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 121
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 124
            echo "        ";
        }
        // line 125
        echo "
        ";
        // line 127
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 128
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 131
            echo "        ";
        }
        // line 132
        echo "
        ";
        // line 134
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 135
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 138
            echo "        ";
        }
        // line 139
        echo "
        ";
        // line 141
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 142
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 145
            echo "        ";
        }
        // line 146
        echo "
        ";
        // line 148
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 152
        echo "      </section>

      ";
        // line 155
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 156
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 161
            echo "      ";
        }
        // line 162
        echo "
   </div>
";
    }

    // line 101
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 102
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 103
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 121
    public function block_highlighted($context, array $blocks = array())
    {
        // line 122
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 128
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 129
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "
          ";
    }

    // line 135
    public function block_action_links($context, array $blocks = array())
    {
        // line 136
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 142
    public function block_help($context, array $blocks = array())
    {
        // line 143
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 148
    public function block_content($context, array $blocks = array())
    {
        // line 149
        echo "          <a id=\"main-content\"></a>
          ";
        // line 150
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 156
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 157
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 158
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/yg_restaurant/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 158,  382 => 157,  379 => 156,  373 => 150,  370 => 149,  367 => 148,  360 => 143,  357 => 142,  350 => 136,  347 => 135,  340 => 129,  337 => 128,  330 => 122,  327 => 121,  320 => 103,  317 => 102,  314 => 101,  308 => 162,  305 => 161,  302 => 156,  299 => 155,  295 => 152,  292 => 148,  289 => 146,  286 => 145,  283 => 142,  280 => 141,  277 => 139,  274 => 138,  271 => 135,  268 => 134,  265 => 132,  262 => 131,  259 => 128,  256 => 127,  253 => 125,  250 => 124,  247 => 121,  244 => 120,  238 => 117,  236 => 114,  235 => 113,  234 => 112,  233 => 111,  232 => 110,  230 => 109,  227 => 107,  224 => 106,  221 => 101,  218 => 100,  214 => 97,  211 => 96,  196 => 206,  190 => 204,  187 => 203,  181 => 201,  178 => 200,  172 => 198,  169 => 197,  163 => 195,  161 => 194,  153 => 189,  140 => 179,  134 => 176,  128 => 173,  118 => 165,  116 => 96,  111 => 93,  107 => 91,  99 => 86,  94 => 83,  92 => 82,  89 => 81,  80 => 75,  74 => 72,  70 => 70,  66 => 68,  62 => 66,  60 => 65,  58 => 64,  51 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/page--front.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/page--front.html.twig");
    }
}
