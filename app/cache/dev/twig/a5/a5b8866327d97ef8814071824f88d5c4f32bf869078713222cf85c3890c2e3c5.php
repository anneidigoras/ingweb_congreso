<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_68df824ab57a62f8b00e668e56042171705e41fb362801ce706e69fb78fd0fca extends Twig_Template
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
        $__internal_34b0b24479fe3e1272084ffe9061cf8072d8b345668276e04a3a66db8c0f7763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b0b24479fe3e1272084ffe9061cf8072d8b345668276e04a3a66db8c0f7763->enter($__internal_34b0b24479fe3e1272084ffe9061cf8072d8b345668276e04a3a66db8c0f7763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_34b0b24479fe3e1272084ffe9061cf8072d8b345668276e04a3a66db8c0f7763->leave($__internal_34b0b24479fe3e1272084ffe9061cf8072d8b345668276e04a3a66db8c0f7763_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/field_id.html.twig");
    }
}
