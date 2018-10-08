<?php

/* {# inline_template_start #}<div class="item">
          <div class="col-md-12 col-sm-12 special-menu-items">
            <div class="hovereffect">
              <a href="#">{{ field_image }}</a>
              <div class="overlay">             
               <h4>{{ title }}</h4>
               <p>{{ field_category }}</p>
               <h5>{{ field_price }}</h5>
               <div class="btn btn-info">{{ view_node }} </div>
              </div>
            </div>
</div>   */
class __TwigTemplate_c305e234ca6791bb3bdfcbd45955899f37124e63d9bdcebe6a8ba668029ead3f extends Twig_Template
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
        echo "<div class=\"item\">
          <div class=\"col-md-12 col-sm-12 special-menu-items\">
            <div class=\"hovereffect\">
              <a href=\"#\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "</a>
              <div class=\"overlay\">             
               <h4>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h4>
               <p>";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_category"] ?? null), "html", null, true));
        echo "</p>
               <h5>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_price"] ?? null), "html", null, true));
        echo "</h5>
               <div class=\"btn btn-info\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo " </div>
              </div>
            </div>
</div>  ";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"item\">
          <div class=\"col-md-12 col-sm-12 special-menu-items\">
            <div class=\"hovereffect\">
              <a href=\"#\">{{ field_image }}</a>
              <div class=\"overlay\">             
               <h4>{{ title }}</h4>
               <p>{{ field_category }}</p>
               <h5>{{ field_price }}</h5>
               <div class=\"btn btn-info\">{{ view_node }} </div>
              </div>
            </div>
</div>  ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 9,  72 => 8,  68 => 7,  64 => 6,  59 => 4,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"item\">
          <div class=\"col-md-12 col-sm-12 special-menu-items\">
            <div class=\"hovereffect\">
              <a href=\"#\">{{ field_image }}</a>
              <div class=\"overlay\">             
               <h4>{{ title }}</h4>
               <p>{{ field_category }}</p>
               <h5>{{ field_price }}</h5>
               <div class=\"btn btn-info\">{{ view_node }} </div>
              </div>
            </div>
</div>  ", "");
    }
}
