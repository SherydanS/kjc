<?php

/* themes/yg_restaurant/templates/views/views-view--home_slider--block.html.twig */
class __TwigTemplate_befeb374ee4e05a817827824c02613b1e8e01f0c7ea80d25a380c0dc96cf9ff6 extends Twig_Template
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
        $tags = array("for" => 4, "if" => 5);
        $filters = array("image_style" => 10);
        $functions = array("file_url" => 10);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'if'),
                array('image_style'),
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
        echo "<section id=\"yg-slider\">
  <div id=\"carouselYGHotel\" class=\"carousel slide\" data-ride=\"carousel\">
     <ol class=\"carousel-indicators\">
      ";
        // line 4
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
            // line 5
            echo "        <li data-target=\"#carouselYGHotel\" data-slide-to=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true));
            echo "\" class=\"";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo "active";
            }
            echo "\"></li>
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
        // line 7
        echo "     </ol>
     <div class=\"carousel-inner\" role=\"listbox\">
     ";
        // line 9
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
            // line 10
            echo "       <div class=\"carousel-item ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                echo "active";
            }
            echo "\" style=\"background-image: url('";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", array()), "uri", array()), "value", array(0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")), "method"), "slider"))), "html", null, true));
            echo "')\">
        <div class=\"carousel-caption wow fadeInUp\">
        <span>";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", array()), "field_subtitle", array()), "value", array(0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")), "method"), "html", null, true));
            echo "</span>
        <h2>";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", array()), "title", array()), "value", array(0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")), "method"), "html", null, true));
            echo "</h2>
        <p>";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", array()), "field_description", array()), "value", array(0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")), "method"), "html", null, true));
            echo "</p>

        <a href=\"";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", array()), "field_view_menu_value", array()), "value", array(0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")), "method"), "html", null, true));
            echo "\" class=\"btn btn-info view-btn\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", array()), "field_view_menu_btn", array()), "value", array(0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")), "method"), "html", null, true));
            echo "</a>
        <a href=\"";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", array()), "field_book_table_link", array()), "value", array(0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")), "method"), "html", null, true));
            echo "\" class=\"btn btn-info\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", array()), "field_book_table_btn", array()), "value", array(0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", array()), ($this->getAttribute($context["loop"], "index", array()) - 1), array(), "array")), "method"), "html", null, true));
            echo "</a>
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
        // line 21
        echo "     </div>
   </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/yg_restaurant/templates/views/views-view--home_slider--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 21,  136 => 17,  130 => 16,  125 => 14,  121 => 13,  117 => 12,  107 => 10,  90 => 9,  86 => 7,  65 => 5,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/views/views-view--home_slider--block.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/views/views-view--home_slider--block.html.twig");
    }
}
