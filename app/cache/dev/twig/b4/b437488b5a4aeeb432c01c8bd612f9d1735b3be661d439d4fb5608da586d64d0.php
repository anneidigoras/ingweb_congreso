<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f805f88623ddc47b1f776922ba181c8e91c69188623100421d5897532e3b834c extends Twig_Template
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
        $__internal_7ae47d4c22b32be96b5fecbe2e32ff6a8c7e3f191e8f10e0aaf1247fbf95b49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae47d4c22b32be96b5fecbe2e32ff6a8c7e3f191e8f10e0aaf1247fbf95b49d->enter($__internal_7ae47d4c22b32be96b5fecbe2e32ff6a8c7e3f191e8f10e0aaf1247fbf95b49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7ae47d4c22b32be96b5fecbe2e32ff6a8c7e3f191e8f10e0aaf1247fbf95b49d->leave($__internal_7ae47d4c22b32be96b5fecbe2e32ff6a8c7e3f191e8f10e0aaf1247fbf95b49d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}