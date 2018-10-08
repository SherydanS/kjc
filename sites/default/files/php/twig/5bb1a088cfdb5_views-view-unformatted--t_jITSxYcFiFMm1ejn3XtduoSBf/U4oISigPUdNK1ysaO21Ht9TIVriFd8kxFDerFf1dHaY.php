<?php

/* themes/yg_restaurant/templates/views/views-view-unformatted--testimonial_slider--block.html.twig */
class __TwigTemplate_171c412ba1268e465fb44ee18e444c6e985db3fa6c4b04c23a984ce6a238ed78 extends Twig_Template
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
        $tags = array("for" => 10);
        $filters = array();
        $functions = array("file_url" => 14);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for'),
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
        echo "<section id=\"our-clients\">
  <div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-3 mx-auto text-center wow fadeInUp\" data-wow-delay=\"0.3s\">
      <h2>";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["view"] ?? null), "getTitle", array(), "method"), "html", null, true));
        echo "</span></h2>
    </div>
    <div class=\"col-md-12 wow fadeInUp\" data-wow-delay=\"0.8s\">
      <div class=\"clients-bg\">
        <div class=\"loop owl-carousel owl-theme\">
          ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["view"] ?? null), "result", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 11
            echo "              <div class=\"item\">
                <div class=\"row\">
                  <div class=\"col-md-4 client-image\">
                    <img src=\"";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", array()), "uri", array()), "value", array(0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")), "method"))), "html", null, true));
            echo "\" alt=\"client image\" class=\"img-responsive\">
                  </div>
                  <div class=\"col-md-8\">
                    <p><i>";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", array()), "field_testimonial_description", array()), "value", array(0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")), "method"), "html", null, true));
            echo "</i></p>
                  </div>
                </div>  
              </div>            
           ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </div>
      </div>
    </div>
  </div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/yg_restaurant/templates/views/views-view-unformatted--testimonial_slider--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  85 => 17,  79 => 14,  74 => 11,  57 => 10,  49 => 5,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/views/views-view-unformatted--testimonial_slider--block.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/views/views-view-unformatted--testimonial_slider--block.html.twig");
    }
}
