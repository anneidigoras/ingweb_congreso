<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_b360d0427b72d84dcca8ed0201669ea75278df2d87612d3f7fa0e09a1d6debca extends Twig_Template
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
        $__internal_bf588d93c43f36171b0be6c2b96bc528e77b69bb2ded4710286bd6111a5285ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf588d93c43f36171b0be6c2b96bc528e77b69bb2ded4710286bd6111a5285ae->enter($__internal_bf588d93c43f36171b0be6c2b96bc528e77b69bb2ded4710286bd6111a5285ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_bf588d93c43f36171b0be6c2b96bc528e77b69bb2ded4710286bd6111a5285ae->leave($__internal_bf588d93c43f36171b0be6c2b96bc528e77b69bb2ded4710286bd6111a5285ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
