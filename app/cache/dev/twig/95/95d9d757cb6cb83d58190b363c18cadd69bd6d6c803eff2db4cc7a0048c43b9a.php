<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_296182384c4711d7db7b1fa36dc60b22ad06a28523319029524cf85921651268 extends Twig_Template
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
        $__internal_4b525239413bde684e23d1aff48df473e7e85022144549606941d0eee5b4d398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b525239413bde684e23d1aff48df473e7e85022144549606941d0eee5b4d398->enter($__internal_4b525239413bde684e23d1aff48df473e7e85022144549606941d0eee5b4d398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_4b525239413bde684e23d1aff48df473e7e85022144549606941d0eee5b4d398->leave($__internal_4b525239413bde684e23d1aff48df473e7e85022144549606941d0eee5b4d398_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_bigint.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/field_bigint.html.twig");
    }
}
