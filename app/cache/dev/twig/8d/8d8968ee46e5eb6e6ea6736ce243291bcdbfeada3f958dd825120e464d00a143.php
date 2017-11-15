<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_08376dfef13fae8630944fbbe37a6b70aeb78ef495b9098d87f4bd42b6fcba67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bccc4d3efaca8839a13aa3d39f2ea0d800cd30b92523520edebc0735b53248f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccc4d3efaca8839a13aa3d39f2ea0d800cd30b92523520edebc0735b53248f2->enter($__internal_bccc4d3efaca8839a13aa3d39f2ea0d800cd30b92523520edebc0735b53248f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bccc4d3efaca8839a13aa3d39f2ea0d800cd30b92523520edebc0735b53248f2->leave($__internal_bccc4d3efaca8839a13aa3d39f2ea0d800cd30b92523520edebc0735b53248f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47c005f816be284e329890d1c66dbea5229aa4daa6f2df1b56e1de16e44146f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c005f816be284e329890d1c66dbea5229aa4daa6f2df1b56e1de16e44146f1->enter($__internal_47c005f816be284e329890d1c66dbea5229aa4daa6f2df1b56e1de16e44146f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_47c005f816be284e329890d1c66dbea5229aa4daa6f2df1b56e1de16e44146f1->leave($__internal_47c005f816be284e329890d1c66dbea5229aa4daa6f2df1b56e1de16e44146f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_947173f8033f4f524bd52b956069c2dee080a3bd4e206cb07591b391c9154528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947173f8033f4f524bd52b956069c2dee080a3bd4e206cb07591b391c9154528->enter($__internal_947173f8033f4f524bd52b956069c2dee080a3bd4e206cb07591b391c9154528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_947173f8033f4f524bd52b956069c2dee080a3bd4e206cb07591b391c9154528->leave($__internal_947173f8033f4f524bd52b956069c2dee080a3bd4e206cb07591b391c9154528_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}