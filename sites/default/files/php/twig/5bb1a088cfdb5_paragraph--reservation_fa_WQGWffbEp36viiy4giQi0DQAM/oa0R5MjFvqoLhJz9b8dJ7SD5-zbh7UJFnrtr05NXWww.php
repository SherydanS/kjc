<?php

/* themes/yg_restaurant/templates/paragraph/paragraph--reservation_facilities_right.html.twig */
class __TwigTemplate_217e37cf97a15aef2aa43fa401d202fbc2b2e2f015cf8670734157d4de2e2f93 extends Twig_Template
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
        $functions = array("file_url" => 16);

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
        echo "<section id=\"facilities\">
  <div class=\"container\">
    <div class=\"row hall-reservation right\">
        <div class=\"col-md-6 reservation-time wow fadeInUp\" data-wow-delay=\"0.6s\">
          <div class=\"col-md-4 mx-auto text-center\">
          <h2>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", array()), 0, array()), "html", null, true));
        echo " <span>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_subtitle", array()), 0, array()), "html", null, true));
        echo "</span></h2>
          </div>
          <p>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_description", array()), 0, array()), "html", null, true));
        echo "</p>
          <p><strong></strong> ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_private_room_size", array()), "html", null, true));
        echo "</p>
          <p><strong></strong> ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_capacity", array()), "html", null, true));
        echo "</p>
          <div class=\"reservation-btn text-center\">
            <a href=\"";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_book_now", array()), 0, array()), "#url", array(), "array"), "html", null, true));
        echo "\" class=\"btn btn-info page-scroll\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_book_now", array()), 0, array()), "#title", array(), "array"), "html", null, true));
        echo "</a>
          </div> 
        </div>
        <div class=\"col-md-6 reservation-image wow fadeInUp\" data-wow-delay=\"0.3s\">
          <img src=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "\" alt=\"team-image\" class=\"img-responsive\">
        </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/yg_restaurant/templates/paragraph/paragraph--reservation_facilities_right.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  70 => 12,  65 => 10,  61 => 9,  57 => 8,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/paragraph/paragraph--reservation_facilities_right.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/paragraph/paragraph--reservation_facilities_right.html.twig");
    }
}
