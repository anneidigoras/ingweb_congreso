<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_436fcbcfe2e948d81c5e6daf702cf54400be32d357602c684b67bd0e40856b74 extends Twig_Template
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
        $__internal_cfc46d56c0a31efe37053541d9763d4038579adc164c3c9af4e1c4bbfa7a4e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc46d56c0a31efe37053541d9763d4038579adc164c3c9af4e1c4bbfa7a4e11->enter($__internal_cfc46d56c0a31efe37053541d9763d4038579adc164c3c9af4e1c4bbfa7a4e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_cfc46d56c0a31efe37053541d9763d4038579adc164c3c9af4e1c4bbfa7a4e11->leave($__internal_cfc46d56c0a31efe37053541d9763d4038579adc164c3c9af4e1c4bbfa7a4e11_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_time.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/field_time.html.twig");
    }
}
