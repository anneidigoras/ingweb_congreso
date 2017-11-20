<?php

/* :default:layout.html.twig */
class __TwigTemplate_b68422589f8a02d627620d8c8951c1d77bd376aed4d8872967ef9999e330393a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61c48bccf36f5d031b380a4314166b2eeeeaf3573f0cc2567fe84a5a72cfbb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c48bccf36f5d031b380a4314166b2eeeeaf3573f0cc2567fe84a5a72cfbb3e->enter($__internal_61c48bccf36f5d031b380a4314166b2eeeeaf3573f0cc2567fe84a5a72cfbb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:layout.html.twig"));

        // line 2
        echo "<!doctype html>
<html>
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t</head>
\t<body>
\t\t";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 9
        echo "\t</body>
</html>
";
        
        $__internal_61c48bccf36f5d031b380a4314166b2eeeeaf3573f0cc2567fe84a5a72cfbb3e->leave($__internal_61c48bccf36f5d031b380a4314166b2eeeeaf3573f0cc2567fe84a5a72cfbb3e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d6cb249519bc6e50ae493bc6ab087e9b731abe74bd2b7be135538a73d5232d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6cb249519bc6e50ae493bc6ab087e9b731abe74bd2b7be135538a73d5232d7->enter($__internal_7d6cb249519bc6e50ae493bc6ab087e9b731abe74bd2b7be135538a73d5232d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Default title";
        
        $__internal_7d6cb249519bc6e50ae493bc6ab087e9b731abe74bd2b7be135538a73d5232d7->leave($__internal_7d6cb249519bc6e50ae493bc6ab087e9b731abe74bd2b7be135538a73d5232d7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad41bef6c912e52c3e45ac63c5d69cb7bd4d02f58324b219e729db053b7aa1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad41bef6c912e52c3e45ac63c5d69cb7bd4d02f58324b219e729db053b7aa1f1->enter($__internal_ad41bef6c912e52c3e45ac63c5d69cb7bd4d02f58324b219e729db053b7aa1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad41bef6c912e52c3e45ac63c5d69cb7bd4d02f58324b219e729db053b7aa1f1->leave($__internal_ad41bef6c912e52c3e45ac63c5d69cb7bd4d02f58324b219e729db053b7aa1f1_prof);

    }

    public function getTemplateName()
    {
        return ":default:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  46 => 5,  37 => 9,  35 => 8,  29 => 5,  24 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}
<!doctype html>
<html>
\t<head>
\t\t<title>{% block title %}Default title{% endblock %}</title>
\t</head>
\t<body>
\t\t{% block body %}{% endblock %}
\t</body>
</html>
", ":default:layout.html.twig", "C:\\xampp\\htdocs\\congreso\\app/Resources\\views/default/layout.html.twig");
    }
}
