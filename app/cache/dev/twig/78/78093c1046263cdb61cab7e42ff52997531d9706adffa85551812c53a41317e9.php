<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_bb4ce0647bb5359d919a6184de903e934946f08d91f3cffa9d7eb23413d62739 extends Twig_Template
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
        $__internal_31ba3d514a3cfb31e3cf40b799a5877c0a7b8325b333596375fcf13e2771cc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ba3d514a3cfb31e3cf40b799a5877c0a7b8325b333596375fcf13e2771cc02->enter($__internal_31ba3d514a3cfb31e3cf40b799a5877c0a7b8325b333596375fcf13e2771cc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_31ba3d514a3cfb31e3cf40b799a5877c0a7b8325b333596375fcf13e2771cc02->leave($__internal_31ba3d514a3cfb31e3cf40b799a5877c0a7b8325b333596375fcf13e2771cc02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
