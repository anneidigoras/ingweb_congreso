<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_e2f4622f1d39eb3ffcb2a5acd9e63e5f2d9bd3341bb556d176b121baa83f1e6f extends Twig_Template
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
        $__internal_d9533e983e3009b40348143c7a514585ec0f94d5c7948718eaa3c38eb1ea6d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9533e983e3009b40348143c7a514585ec0f94d5c7948718eaa3c38eb1ea6d2f->enter($__internal_d9533e983e3009b40348143c7a514585ec0f94d5c7948718eaa3c38eb1ea6d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_d9533e983e3009b40348143c7a514585ec0f94d5c7948718eaa3c38eb1ea6d2f->leave($__internal_d9533e983e3009b40348143c7a514585ec0f94d5c7948718eaa3c38eb1ea6d2f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
", "@EasyAdmin/default/field_datetime.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\field_datetime.html.twig");
    }
}