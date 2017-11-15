<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_6eb0441d2f8f3a515c5fb04276bb1016e18c84f2d1b3a5c6657f707419a34563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eef5791078797da9e57df991828850d0bc16e0d1a0c95dadcdf81b4d2522420c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef5791078797da9e57df991828850d0bc16e0d1a0c95dadcdf81b4d2522420c->enter($__internal_eef5791078797da9e57df991828850d0bc16e0d1a0c95dadcdf81b4d2522420c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eef5791078797da9e57df991828850d0bc16e0d1a0c95dadcdf81b4d2522420c->leave($__internal_eef5791078797da9e57df991828850d0bc16e0d1a0c95dadcdf81b4d2522420c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6546c4bf5792aa7b6e4dce66175ac69c979863fcabfe2d6f7822bf05d2a8329a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6546c4bf5792aa7b6e4dce66175ac69c979863fcabfe2d6f7822bf05d2a8329a->enter($__internal_6546c4bf5792aa7b6e4dce66175ac69c979863fcabfe2d6f7822bf05d2a8329a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6546c4bf5792aa7b6e4dce66175ac69c979863fcabfe2d6f7822bf05d2a8329a->leave($__internal_6546c4bf5792aa7b6e4dce66175ac69c979863fcabfe2d6f7822bf05d2a8329a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_08ceacdf65ce652c7f5a7f64c735e9f86d8788b8a42a6e1cd9e4b8c21dd24e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ceacdf65ce652c7f5a7f64c735e9f86d8788b8a42a6e1cd9e4b8c21dd24e69->enter($__internal_08ceacdf65ce652c7f5a7f64c735e9f86d8788b8a42a6e1cd9e4b8c21dd24e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_08ceacdf65ce652c7f5a7f64c735e9f86d8788b8a42a6e1cd9e4b8c21dd24e69->leave($__internal_08ceacdf65ce652c7f5a7f64c735e9f86d8788b8a42a6e1cd9e4b8c21dd24e69_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1653b1173d861528f7067f065bde92b6e6203ec592469ab9aa20f5b79076651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1653b1173d861528f7067f065bde92b6e6203ec592469ab9aa20f5b79076651->enter($__internal_d1653b1173d861528f7067f065bde92b6e6203ec592469ab9aa20f5b79076651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_d1653b1173d861528f7067f065bde92b6e6203ec592469ab9aa20f5b79076651->leave($__internal_d1653b1173d861528f7067f065bde92b6e6203ec592469ab9aa20f5b79076651_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f2a884e9b54fef410fc22678b73fcecd4776a55a9d4de1586c68dbdf9ddc2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2a884e9b54fef410fc22678b73fcecd4776a55a9d4de1586c68dbdf9ddc2b1->enter($__internal_9f2a884e9b54fef410fc22678b73fcecd4776a55a9d4de1586c68dbdf9ddc2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9f2a884e9b54fef410fc22678b73fcecd4776a55a9d4de1586c68dbdf9ddc2b1->leave($__internal_9f2a884e9b54fef410fc22678b73fcecd4776a55a9d4de1586c68dbdf9ddc2b1_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }
}
