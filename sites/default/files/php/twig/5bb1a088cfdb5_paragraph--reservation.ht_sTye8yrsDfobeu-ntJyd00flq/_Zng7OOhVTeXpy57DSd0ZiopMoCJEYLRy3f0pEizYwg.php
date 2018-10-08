<?php

/* themes/yg_restaurant/templates/paragraph/paragraph--reservation.html.twig */
class __TwigTemplate_acd5ad8b2f3b95209a81878dd374f4cc4e53e1e59fca2019e7bc9ec010dc6eb0 extends Twig_Template
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
        $functions = array("file_url" => 2);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('file_url')
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
        echo "
<section id=\"reservation\" style=\"background-image: url('";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_background_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "'); width:100%; background-repeat: no-repeat; background-size: cover; background-position: left;\">
  <div class=\"reservation-overlay\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-6 mr-auto restaurant-info wow fadeInRight\" data-wow-delay=\"0.3s\">
          <p>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", array()), 0, array()), "html", null, true));
        echo "</p>
          <h6>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_subtitle", array()), 0, array()), "html", null, true));
        echo " <span>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_subtitle2", array()), 0, array()), "html", null, true));
        echo "</span></h6>
          <h6>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_no", array()), 0, array()), "html", null, true));
        echo "0</h6>
          ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_details", array()), "html", null, true));
        echo "<br>
          
        </div>
        <div class=\"col-md-5 reservation-form wow fadeInLeft\" data-wow-delay=\"0.3s\"> 
          <div class=\"reservation-form-inner\"> 
           <h3>";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_form_title", array()), 0, array()), "html", null, true));
        echo "</h3>
           ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_reservation", array()), "html", null, true));
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
        return "themes/yg_restaurant/templates/paragraph/paragraph--reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  76 => 15,  68 => 10,  64 => 9,  58 => 8,  54 => 7,  46 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/paragraph/paragraph--reservation.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/paragraph/paragraph--reservation.html.twig");
    }
}
