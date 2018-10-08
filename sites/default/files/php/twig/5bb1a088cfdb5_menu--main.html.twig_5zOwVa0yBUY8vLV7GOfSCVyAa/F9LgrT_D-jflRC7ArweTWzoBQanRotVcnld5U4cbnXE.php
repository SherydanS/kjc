<?php

/* themes/yg_restaurant/templates/menu--main.html.twig */
class __TwigTemplate_c40baed916f7ff9fc67353bda78ab92132bad5b208a005f7691a61e970f73068 extends Twig_Template
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
        $tags = array("for" => 14, "set" => 16, "if" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if'),
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
        echo " ";
        // line 10
        echo "
";
        // line 12
        echo "
 <ul class=\"navbar-nav ml-auto sf-js-enabled sf-arrows\"> 
   ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "        ";
            // line 16
            $context["classes"] = array(0 => "nav-link", 1 => (($this->getAttribute(            // line 18
$context["item"], "is_expanded", array())) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(            // line 19
$context["item"], "is_expanded", array())) ? ("dropdown") : ("")), 3 => (($this->getAttribute(            // line 20
$context["item"], "is_collapsed", array())) ? ("menu-item--collapsed") : ("")), 4 => (($this->getAttribute(            // line 21
$context["item"], "in_active_trail", array())) ? ("menu-item--active-trail") : ("")), 5 => (($this->getAttribute(            // line 22
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
            // line 25
            echo "        ";
            if ($this->getAttribute($context["item"], "below", array())) {
                // line 26
                echo "          <li class=\"nav-item dropdown\">
            <a ";
                // line 27
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["classes"] ?? null), 1 => "item"), "method"), "html", null, true));
                echo " href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              ";
                // line 28
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                echo " <i class=\"fa fa-chevron-down\"></i></a>
            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "below", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 31
                    echo "              <a class=\"dropdown-item\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                    echo "\"> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                    echo "</a>              
           ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "            </div>
          </li>
          ";
            } else {
                // line 36
                echo "          <li class=\"nav-item\"> <a ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["classes"] ?? null), 1 => "item"), "method"), "html", null, true));
                echo " href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                echo "\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                echo "</a> </li>
       ";
            }
            // line 38
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</ul>



";
    }

    public function getTemplateName()
    {
        return "themes/yg_restaurant/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  112 => 38,  102 => 36,  97 => 33,  86 => 31,  82 => 30,  77 => 28,  71 => 27,  68 => 26,  65 => 25,  63 => 22,  62 => 21,  61 => 20,  60 => 19,  59 => 18,  58 => 16,  56 => 15,  52 => 14,  48 => 12,  45 => 10,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/menu--main.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/menu--main.html.twig");
    }
}
