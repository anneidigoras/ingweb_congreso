<?php

/* @CongresoCongreso/layout.html.twig */
class __TwigTemplate_4e877c02292a15b22564915b91474889d0b9c6fac0d4cec026d44da17e7891df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@CongresoCongreso/layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24538b4b0cce2894146177c66111c5f6e96ff01d4f8f993f75cd3c30e03a2c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24538b4b0cce2894146177c66111c5f6e96ff01d4f8f993f75cd3c30e03a2c47->enter($__internal_24538b4b0cce2894146177c66111c5f6e96ff01d4f8f993f75cd3c30e03a2c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CongresoCongreso/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24538b4b0cce2894146177c66111c5f6e96ff01d4f8f993f75cd3c30e03a2c47->leave($__internal_24538b4b0cce2894146177c66111c5f6e96ff01d4f8f993f75cd3c30e03a2c47_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_e7e43491423d84422270a0d38c218b87f9ec1d2c14d82812f75219c5c9e33f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e43491423d84422270a0d38c218b87f9ec1d2c14d82812f75219c5c9e33f1e->enter($__internal_e7e43491423d84422270a0d38c218b87f9ec1d2c14d82812f75219c5c9e33f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "   
";
        
        $__internal_e7e43491423d84422270a0d38c218b87f9ec1d2c14d82812f75219c5c9e33f1e->leave($__internal_e7e43491423d84422270a0d38c218b87f9ec1d2c14d82812f75219c5c9e33f1e_prof);

    }

    public function getTemplateName()
    {
        return "@CongresoCongreso/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block sidebar %}
   
{% endblock %}", "@CongresoCongreso/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle\\Resources\\views\\layout.html.twig");
    }
}
