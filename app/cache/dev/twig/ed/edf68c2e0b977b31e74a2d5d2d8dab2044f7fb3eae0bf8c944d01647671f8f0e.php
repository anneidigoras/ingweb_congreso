<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b50a0da66cbf9063a29e31d4762fb06db66c9aff3f117f9c48a0ff7fc3c0fb10 extends Twig_Template
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
        $__internal_c125b6055d5cbd80261e1c50b9023d12dcb8bbeb88d0b1f347b5659f497378ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c125b6055d5cbd80261e1c50b9023d12dcb8bbeb88d0b1f347b5659f497378ab->enter($__internal_c125b6055d5cbd80261e1c50b9023d12dcb8bbeb88d0b1f347b5659f497378ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c125b6055d5cbd80261e1c50b9023d12dcb8bbeb88d0b1f347b5659f497378ab->leave($__internal_c125b6055d5cbd80261e1c50b9023d12dcb8bbeb88d0b1f347b5659f497378ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}