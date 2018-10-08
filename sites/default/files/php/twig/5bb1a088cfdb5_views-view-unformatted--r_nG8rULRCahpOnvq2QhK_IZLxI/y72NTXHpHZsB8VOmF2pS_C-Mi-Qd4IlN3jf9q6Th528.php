<?php

/* themes/yg_restaurant/templates/views/views-view-unformatted--restaurant-special--block-1.html.twig */
class __TwigTemplate_e1190796d33993cc2f5090fe6e41333b27c580a651a035ffdde919facc472e77 extends Twig_Template
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
        $tags = array("if" => 38, "for" => 46);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
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

        // line 34
        echo "
<section id=\"special-menu\">
  <div class=\"container\">
        <div class=\"col-md-12 text-center special-menu-title wow fadeInUp\">
        ";
        // line 38
        if (($context["is_front"] ?? null)) {
            // line 39
            echo "            <h2>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["view"] ?? null), "getTitle", array(), "method"), "html", null, true));
            echo "</h2>
        ";
        } else {
            // line 41
            echo "            <p></p>  
        ";
        }
        // line 43
        echo "        </div>
        <div class=\"row\">
             <div class=\"owl-carousel special-menu-carousel\">
                 ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 47
            echo "                    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "              </div>
        </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/yg_restaurant/templates/views/views-view-unformatted--restaurant-special--block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 49,  70 => 47,  66 => 46,  61 => 43,  57 => 41,  51 => 39,  49 => 38,  43 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/views/views-view-unformatted--restaurant-special--block-1.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/views/views-view-unformatted--restaurant-special--block-1.html.twig");
    }
}
