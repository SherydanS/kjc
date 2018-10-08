<?php

/* themes/yg_restaurant/templates/user-login-form.html.twig */
class __TwigTemplate_f2ad8328955bbb833d968ce7b625b47cd6600203e5e28d959f3d92099345da6a extends Twig_Template
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
        echo "<section id=\"user-login\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12 yg-business-login\">                                  
            <div class=\"login-text\">                              
                <h2 class=\"title\" style=\"text-align:center;\"><strong>USER LOGIN</strong></h2> 
                <form role=\"form\" id=\"sub-form\">
                    <div class=\"form-group\">
                     ";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "name", array()), "html", null, true));
        echo "
                    </div>
                    <div class=\"form-group\">
                    ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "pass", array()), "html", null, true));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_url"] ?? null), "html", null, true));
        echo "/user/password\" alt=\"Request new password via email\">Forgot password?</a>
                    </div>
                    ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "form_build_id", array()), "html", null, true));
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "form_id", array()), "html", null, true));
        echo "
                    <div class=\"login-button\">
                        ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "actions", array()), "html", null, true));
        echo "
                    </div>
                </form>
            </div>        
        </div>                  
    </div>
  </div>
</section>  ";
    }

    public function getTemplateName()
    {
        return "themes/yg_restaurant/templates/user-login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  74 => 18,  70 => 17,  65 => 15,  59 => 12,  53 => 9,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_restaurant/templates/user-login-form.html.twig", "/Library/WebServer/Documents/kjconstruction/themes/yg_restaurant/templates/user-login-form.html.twig");
    }
}
