<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_984d50fa7e54c7ee4e4bf05e4948da7dcc5a77c5f502914224f01861cff5e94c extends Twig_Template
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
        $__internal_115be5d2fc2de839973efc7fde31ed5657ff9cec6d19afb71a1f9ae9281ea92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115be5d2fc2de839973efc7fde31ed5657ff9cec6d19afb71a1f9ae9281ea92d->enter($__internal_115be5d2fc2de839973efc7fde31ed5657ff9cec6d19afb71a1f9ae9281ea92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_115be5d2fc2de839973efc7fde31ed5657ff9cec6d19afb71a1f9ae9281ea92d->leave($__internal_115be5d2fc2de839973efc7fde31ed5657ff9cec6d19afb71a1f9ae9281ea92d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
