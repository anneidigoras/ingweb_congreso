<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ac85786f44ced760e521cdc12b03431683e4de9e4ddd83a88d3e2f297c75e779 extends Twig_Template
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
        $__internal_3c1c6605f896c5a1580d9c47fcc1ed5f6b393b75c83aacebc7e6c74277224bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1c6605f896c5a1580d9c47fcc1ed5f6b393b75c83aacebc7e6c74277224bb9->enter($__internal_3c1c6605f896c5a1580d9c47fcc1ed5f6b393b75c83aacebc7e6c74277224bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3c1c6605f896c5a1580d9c47fcc1ed5f6b393b75c83aacebc7e6c74277224bb9->leave($__internal_3c1c6605f896c5a1580d9c47fcc1ed5f6b393b75c83aacebc7e6c74277224bb9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\congreso\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
