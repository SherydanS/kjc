<?php

/* themes/yg_restaurant/templates/paragraph/paragraph--catering.html.twig */
class __TwigTemplate_f2434d4658c8c882a98f03f09aaa828dc8207c0cac7353f05fcf097d9028b441 extends Twig_Template
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
        $functions = array("file_url" => 7);

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
        echo "<!-- Catering Section -->
<section id=\"catering\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-7 catering-image-outer wow fadeInRight\" data-wow-delay=\"0.5s\">
        <div class=\"catering-image\">
          <img src=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
        echo "\" alt=\"catering-image\" class=\"img-responsive\">
        </div>
      </div>
      <div class=\"col-md-7 ml-auto catering-caption-outer wow fadeInLeft\" data-wow-delay=\"0.3s\">
        <div class=\"catering-caption\">
        <h2 class=\"text-center\">";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", array()), 0, array()), "html", null, true));
        echo "</h2>
        <p>";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_description", array()), 0, array()), "html", null, true));
        echo "</p>
        <div class=\"catering-btn text-center\">
          <a href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_menu", array()), 0, array()), "#url", array(), "array"), "html", null, true));
        echo "\" class=\"btn btn-info\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_menu", array()), 0, array()), "#title", array(), "array"), "html", null, true));
        echo "</a>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Catering Section -->";
    }

    public function getTemplateName()
    {
        return "themes/yg_restaurant/templates/paragraph/paragraph--catering.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  63 => 13,  59 => 12,  51 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/paragraph/paragraph--catering.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/paragraph/paragraph--catering.html.twig");
    }
}
