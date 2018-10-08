<?php

/* themes/yg_restaurant/templates/page--404.html.twig */
class __TwigTemplate_afc51bf364b047982c7d7df371c9f46b216c9d3c4811e883aa0f132d21e36e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 62);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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
        echo "<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\">
<!-- Navigation
    ==========================================-->
";
        // line 62
        if ($this->getAttribute(($context["page"] ?? null), "navigation", array())) {
            // line 63
            if (($context["header_lite"] ?? null)) {
                // line 64
                echo "<header id=\"header\" class=\"header-lite\" >
";
            } else {
                // line 66
                echo "<header id=\"header\" class=\"header-bg\"   >
";
            }
            // line 68
            echo "    <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
    <div class=\"container\"> 
      ";
            // line 70
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "logo", array()), "html", null, true));
            echo "
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <i class=\"fa fa-bars\"></i> </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
      ";
            // line 73
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
            echo "
      </div>
    </div>
  </nav>
</header>
";
        }
        // line 79
        echo "  
";
        // line 81
        echo "<div id=\"page-not-found\">
  <div class=\"container\">  
    <div class=\"row\"> 
      <div class=\"col-xs-12 col-md-12 text-center\">
        <div class=\"section-title\">
          <h1>404</h1>
          <h2>Page Not Found</h2>
        </div>        
        <div class=\"page-not-found-text\">
          <p>Sorry! The page you are trying to reach does not exist, or has been moved.</p>
          <a href=\"";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
        echo "\" class=\"btn btn-custom btn-lg page-scroll\">Back To Home</a>
        </div>
      </div>      
    </div>
  </div>
</div>

 
 <footer>
<!-- FOOTER SECTION-->
<section id=\"footer\">
  <div class=\"container wow fadeInUp\">
    <div class=\"row footer-bottom\">
      <div class=\"col-md-6 col-sm-12 footer-columns wow fadeInUp\" data-wow-delay=\"0.3s\">
        ";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_address", array()), "html", null, true));
        echo "
      </div>
      <div class=\"col-md-3 col-sm-12 footer-bottom-col2 wow fadeInUp\" data-wow-delay=\"0.6s\">
        ";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_col_2", array()), "html", null, true));
        echo "
      </div>
      <div class=\"col-md-3 col-sm-12 footer-bottom-col3 wow fadeInUp\" data-wow-delay=\"0.9s\">
        ";
        // line 111
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
        // line 121
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
      </ul>
    </div>
    <div class=\"col-md-4 footer-social wow fadeInUp\" data-wow-delay=\"0.6s\">
      <ul>
          ";
        // line 126
        if (($context["facebook"] ?? null)) {
            // line 127
            echo "           <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook"] ?? null), "html", null, true));
            echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
          ";
        }
        // line 129
        echo "          ";
        if (($context["twitter"] ?? null)) {
            // line 130
            echo "           <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter"] ?? null), "html", null, true));
            echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
          ";
        }
        // line 131
        echo "              
          ";
        // line 132
        if (($context["pinterest"] ?? null)) {
            // line 133
            echo "           <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest"] ?? null), "html", null, true));
            echo "\"><i class=\"fa fa-pinterest\"></i></a>
          ";
        }
        // line 134
        echo "  
          ";
        // line 135
        if (($context["linkedin"] ?? null)) {
            // line 136
            echo "           <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin"] ?? null), "html", null, true));
            echo "\"><i class=\"fa fa-linkedin\"></i> </a>
          ";
        }
        // line 137
        echo " 
       </ul>  
     </div>
    <div class=\"col-md-6 mx-auto text-center copyright wow fadeInUp\" data-wow-delay=\"0.3s\"> 
      <p> &copy;2018.<a href=\"#\" class=\"our-info\">YG Restaurant</a>. All Rights Reserved.<br></p>
      <p class=\"our-info\">Theme By <a href=\"https://www.drupaldevelopersstudio.com/\">Drupal Developers Studio</a>, A Division of <a href=\"https://www.youngglobes.com/\">Young Globes</a></p>  
    </div>
   </div>
  </div>
</div>
  </footer>
</body>";
    }

    public function getTemplateName()
    {
        return "themes/yg_restaurant/templates/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 137,  177 => 136,  175 => 135,  172 => 134,  166 => 133,  164 => 132,  161 => 131,  155 => 130,  152 => 129,  146 => 127,  144 => 126,  136 => 121,  123 => 111,  117 => 108,  111 => 105,  94 => 91,  82 => 81,  79 => 79,  70 => 73,  64 => 70,  60 => 68,  56 => 66,  52 => 64,  50 => 63,  48 => 62,  43 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/page--404.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/page--404.html.twig");
    }
}
