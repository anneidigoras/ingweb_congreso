<?php

/* CongresoCongresoBundle:Comment:create.html.twig */
class __TwigTemplate_0f1542c30636ac50118252ee835129763769a9284a217b255fd46ac5103c59c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CongresoCongresoBundle::layout.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CongresoCongresoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70fcdfc145a79eb5787c10cad3be32a53f42aa783f97194475d3baac97a1f0f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fcdfc145a79eb5787c10cad3be32a53f42aa783f97194475d3baac97a1f0f8->enter($__internal_70fcdfc145a79eb5787c10cad3be32a53f42aa783f97194475d3baac97a1f0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CongresoCongresoBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70fcdfc145a79eb5787c10cad3be32a53f42aa783f97194475d3baac97a1f0f8->leave($__internal_70fcdfc145a79eb5787c10cad3be32a53f42aa783f97194475d3baac97a1f0f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f14afad0211b56c5d9ca661314dc8b396afa0262931838c1f8eeb9cc79b46564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14afad0211b56c5d9ca661314dc8b396afa0262931838c1f8eeb9cc79b46564->enter($__internal_f14afad0211b56c5d9ca661314dc8b396afa0262931838c1f8eeb9cc79b46564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_f14afad0211b56c5d9ca661314dc8b396afa0262931838c1f8eeb9cc79b46564->leave($__internal_f14afad0211b56c5d9ca661314dc8b396afa0262931838c1f8eeb9cc79b46564_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_99096ea17e6829ad54f9e6d5a97a5be01abc9873428c6e0b0b4f69447ea8e3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99096ea17e6829ad54f9e6d5a97a5be01abc9873428c6e0b0b4f69447ea8e3c9->enter($__internal_99096ea17e6829ad54f9e6d5a97a5be01abc9873428c6e0b0b4f69447ea8e3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario al articulo \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "articulo", array()), "titulo", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CongresoCongresoBundle:Comment:form.html.twig", "CongresoCongresoBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_99096ea17e6829ad54f9e6d5a97a5be01abc9873428c6e0b0b4f69447ea8e3c9->leave($__internal_99096ea17e6829ad54f9e6d5a97a5be01abc9873428c6e0b0b4f69447ea8e3c9_prof);

    }

    public function getTemplateName()
    {
        return "CongresoCongresoBundle:Comment:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 8,  47 => 7,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Congreso/CongresoBundle/Resources/views/Comment/create.html.twig #}

{% extends 'CongresoCongresoBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario al articulo \"{{ comment.articulo.titulo }}\"</h1>
    {% include 'CongresoCongresoBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "CongresoCongresoBundle:Comment:create.html.twig", "C:\\xampp\\htdocs\\congreso\\src\\Congreso\\CongresoBundle/Resources/views/Comment/create.html.twig");
    }
}
