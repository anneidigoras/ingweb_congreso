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
        $__internal_f666ae30c555e4b6d8bccbeee576ac9d8e42e0146a7b07a539d00f8c02d13f95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f666ae30c555e4b6d8bccbeee576ac9d8e42e0146a7b07a539d00f8c02d13f95->enter($__internal_f666ae30c555e4b6d8bccbeee576ac9d8e42e0146a7b07a539d00f8c02d13f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f666ae30c555e4b6d8bccbeee576ac9d8e42e0146a7b07a539d00f8c02d13f95->leave($__internal_f666ae30c555e4b6d8bccbeee576ac9d8e42e0146a7b07a539d00f8c02d13f95_prof);

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
