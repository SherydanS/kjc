<?php

/* themes/yg_restaurant/templates/views/views-view-fields--reservation_block.html.twig */
class __TwigTemplate_68a2e9ece1d33541368242c386ae4f95888538144e2af8d49cc39405076db0cf extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<section id=\"reservation\" style=\"background-image: url('";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_image", array()), "content", array()), "html", null, true));
        echo "'); width:100%; background-repeat: no-repeat; background-size: cover; background-position: left;\">
  <div class=\"reservation-overlay\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 mr-auto restaurant-info wow fadeInRight\" data-wow-delay=\"0.3s\">
          <p>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", array()), "content", array()), "html", null, true));
        echo "</p>
          <h6>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_subtitle", array()), "content", array()), "html", null, true));
        echo " <span>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_subtitle2", array()), "content", array()), "html", null, true));
        echo "</span></h6>
          <h6>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_contact_no", array()), "content", array()), "html", null, true));
        echo "</h6>
          ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_information", array()), "content", array()), "html", null, true));
        echo "<br>
          
        </div>
        <div class=\"col-md-5 reservation-form wow fadeInLeft\" data-wow-delay=\"0.3s\"> 
          <div class=\"reservation-form-inner\"> 
           <h3>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_form_title", array()), "content", array()), "html", null, true));
        echo "</h3>
           ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_reservation_form", array()), "content", array()), "html", null, true));
        echo "
          </div>
        </div>
      </div>
   </div>
  </div>  
</section>";
    }

    public function getTemplateName()
    {
        return "themes/yg_restaurant/templates/views/views-view-fields--reservation_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 15,  74 => 14,  66 => 9,  62 => 8,  56 => 7,  52 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/views/views-view-fields--reservation_block.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/views/views-view-fields--reservation_block.html.twig");
    }
}
