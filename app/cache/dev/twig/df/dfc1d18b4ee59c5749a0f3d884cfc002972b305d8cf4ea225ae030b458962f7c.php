<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_7f46a89c9e80a2dea438a5af49b703d8b62e8687933a737e6db175dd9a0c41ea extends Twig_Template
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
        $__internal_38ff0959b23745c7228e931c6ee866c3adbf25ed9020b83eaa6f61603efaa667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ff0959b23745c7228e931c6ee866c3adbf25ed9020b83eaa6f61603efaa667->enter($__internal_38ff0959b23745c7228e931c6ee866c3adbf25ed9020b83eaa6f61603efaa667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_38ff0959b23745c7228e931c6ee866c3adbf25ed9020b83eaa6f61603efaa667->leave($__internal_38ff0959b23745c7228e931c6ee866c3adbf25ed9020b83eaa6f61603efaa667_prof);

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
