<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_8de038b88c147e207e8a73f264e40ff20b7723494b438e2d7e77f0eee2af4026 extends Twig_Template
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
        $__internal_000e34f2d608fab65a3750f0c5759810a98db6774a050f410baca6c02e6f9a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000e34f2d608fab65a3750f0c5759810a98db6774a050f410baca6c02e6f9a5f->enter($__internal_000e34f2d608fab65a3750f0c5759810a98db6774a050f410baca6c02e6f9a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_000e34f2d608fab65a3750f0c5759810a98db6774a050f410baca6c02e6f9a5f->leave($__internal_000e34f2d608fab65a3750f0c5759810a98db6774a050f410baca6c02e6f9a5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}