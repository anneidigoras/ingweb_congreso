<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_59e8a9d7e7140c31cb1e3beaf05f81e3032fbc3206a7b992f0fdad3d1f44fb37 extends Twig_Template
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
        $__internal_9c8d25e039760ae91befc2c0d7ad31dcf162d315c1c631e6b316d2c5beb09e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8d25e039760ae91befc2c0d7ad31dcf162d315c1c631e6b316d2c5beb09e2b->enter($__internal_9c8d25e039760ae91befc2c0d7ad31dcf162d315c1c631e6b316d2c5beb09e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9c8d25e039760ae91befc2c0d7ad31dcf162d315c1c631e6b316d2c5beb09e2b->leave($__internal_9c8d25e039760ae91befc2c0d7ad31dcf162d315c1c631e6b316d2c5beb09e2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
