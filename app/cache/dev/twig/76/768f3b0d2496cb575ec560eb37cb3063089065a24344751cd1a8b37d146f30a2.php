<?php

/* base1.html.twig */
class __TwigTemplate_924ec02007a70357c34faf8e74b0503ded3bafc1856475f932eb0c6b77c86f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b5e1f50abf7b445069bc561389a06e5647f2c3eec18ef6ef2037d22275759d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5e1f50abf7b445069bc561389a06e5647f2c3eec18ef6ef2037d22275759d1->enter($__internal_0b5e1f50abf7b445069bc561389a06e5647f2c3eec18ef6ef2037d22275759d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 33
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 36
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 37
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 45
        $this->displayBlock('sidebar', $context, $blocks);
        // line 46
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "            </div>
        </section>

        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>";
        
        $__internal_0b5e1f50abf7b445069bc561389a06e5647f2c3eec18ef6ef2037d22275759d1->leave($__internal_0b5e1f50abf7b445069bc561389a06e5647f2c3eec18ef6ef2037d22275759d1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_df7377b3871ee185653401b03411e81e344302dfe4bdc111c9de9bbea477cf8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7377b3871ee185653401b03411e81e344302dfe4bdc111c9de9bbea477cf8a->enter($__internal_df7377b3871ee185653401b03411e81e344302dfe4bdc111c9de9bbea477cf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_df7377b3871ee185653401b03411e81e344302dfe4bdc111c9de9bbea477cf8a->leave($__internal_df7377b3871ee185653401b03411e81e344302dfe4bdc111c9de9bbea477cf8a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c665dbb5a27d5a58df6c07ce3e7680bd5659536e085f542de9f6077201b1b68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c665dbb5a27d5a58df6c07ce3e7680bd5659536e085f542de9f6077201b1b68f->enter($__internal_c665dbb5a27d5a58df6c07ce3e7680bd5659536e085f542de9f6077201b1b68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_c665dbb5a27d5a58df6c07ce3e7680bd5659536e085f542de9f6077201b1b68f->leave($__internal_c665dbb5a27d5a58df6c07ce3e7680bd5659536e085f542de9f6077201b1b68f_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_59964620b26fd14c7b11bc558dd5135888b6fc9afe0af17ee9056741005a4651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59964620b26fd14c7b11bc558dd5135888b6fc9afe0af17ee9056741005a4651->enter($__internal_59964620b26fd14c7b11bc558dd5135888b6fc9afe0af17ee9056741005a4651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    ";
        
        $__internal_59964620b26fd14c7b11bc558dd5135888b6fc9afe0af17ee9056741005a4651->leave($__internal_59964620b26fd14c7b11bc558dd5135888b6fc9afe0af17ee9056741005a4651_prof);

    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_af8b964c39bff7d13ea81c6b227c783bcfd06037695b72d8827bf664b24e6872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8b964c39bff7d13ea81c6b227c783bcfd06037695b72d8827bf664b24e6872->enter($__internal_af8b964c39bff7d13ea81c6b227c783bcfd06037695b72d8827bf664b24e6872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_af8b964c39bff7d13ea81c6b227c783bcfd06037695b72d8827bf664b24e6872->leave($__internal_af8b964c39bff7d13ea81c6b227c783bcfd06037695b72d8827bf664b24e6872_prof);

    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_1a8cff8fdf498e30d98d00db1a161cbbc0a04fdad238fa74a7a6c20d4367aa0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8cff8fdf498e30d98d00db1a161cbbc0a04fdad238fa74a7a6c20d4367aa0a->enter($__internal_1a8cff8fdf498e30d98d00db1a161cbbc0a04fdad238fa74a7a6c20d4367aa0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_1a8cff8fdf498e30d98d00db1a161cbbc0a04fdad238fa74a7a6c20d4367aa0a->leave($__internal_1a8cff8fdf498e30d98d00db1a161cbbc0a04fdad238fa74a7a6c20d4367aa0a_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f781a2048c466989ab5336080b6f0291d713af85fb4627a416763d1f0c16035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f781a2048c466989ab5336080b6f0291d713af85fb4627a416763d1f0c16035->enter($__internal_3f781a2048c466989ab5336080b6f0291d713af85fb4627a416763d1f0c16035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3f781a2048c466989ab5336080b6f0291d713af85fb4627a416763d1f0c16035->leave($__internal_3f781a2048c466989ab5336080b6f0291d713af85fb4627a416763d1f0c16035_prof);

    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_910afc705e1ac4f95a4f948387c6a0059e27746de15ce9bd3d3cd1988fea1326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910afc705e1ac4f95a4f948387c6a0059e27746de15ce9bd3d3cd1988fea1326->enter($__internal_910afc705e1ac4f95a4f948387c6a0059e27746de15ce9bd3d3cd1988fea1326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_910afc705e1ac4f95a4f948387c6a0059e27746de15ce9bd3d3cd1988fea1326->leave($__internal_910afc705e1ac4f95a4f948387c6a0059e27746de15ce9bd3d3cd1988fea1326_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e2628aa0017b447e8ee77e50652e03552d1c44f6254cb39f8920b5b2a0a9dbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2628aa0017b447e8ee77e50652e03552d1c44f6254cb39f8920b5b2a0a9dbf2->enter($__internal_e2628aa0017b447e8ee77e50652e03552d1c44f6254cb39f8920b5b2a0a9dbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_e2628aa0017b447e8ee77e50652e03552d1c44f6254cb39f8920b5b2a0a9dbf2->leave($__internal_e2628aa0017b447e8ee77e50652e03552d1c44f6254cb39f8920b5b2a0a9dbf2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b94688db2556305055c9bee732a1e0911c8c67a4ffa4f916a14295ef119ce016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94688db2556305055c9bee732a1e0911c8c67a4ffa4f916a14295ef119ce016->enter($__internal_b94688db2556305055c9bee732a1e0911c8c67a4ffa4f916a14295ef119ce016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b94688db2556305055c9bee732a1e0911c8c67a4ffa4f916a14295ef119ce016->leave($__internal_b94688db2556305055c9bee732a1e0911c8c67a4ffa4f916a14295ef119ce016_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 55,  212 => 50,  206 => 49,  195 => 45,  184 => 42,  172 => 37,  160 => 36,  144 => 23,  138 => 22,  129 => 13,  125 => 11,  119 => 10,  107 => 6,  99 => 56,  97 => 55,  92 => 52,  90 => 49,  85 => 46,  83 => 45,  79 => 43,  77 => 42,  69 => 37,  65 => 36,  60 => 33,  58 => 22,  47 => 15,  45 => 10,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        <title>{% block title %}symblog{% endblock %} - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        {% block stylesheets %}
            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    {% block navigation %}
                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"#\">Contacto</a></li>
                                

                            </ul>
                        </nav>
                    {% endblock %}
                </div>

                <hgroup>
                    <h2>{% block blog_title %}<a href=\"#\">symblog</a>{% endblock %}</h2>
                    <h3>{% block blog_tagline %}<a href=\"#\">creando un blog en Symfony2</a>{% endblock %}</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                {% block body %}{% endblock %}
            </section>
            <aside class=\"sidebar\">
                {% block sidebar %}{% endblock %}
            </aside>

            <div id=\"footer\">
                {% block footer %}
                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                {% endblock %}
            </div>
        </section>

        {% block javascripts %}{% endblock %}
    </body>
</html>", "base1.html.twig", "C:\\xampp\\htdocs\\congreso\\app\\Resources\\views\\base1.html.twig");
    }
}
