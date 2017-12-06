<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_260434ddc24732c047643ec9aacf56490af543a8849c5aa9b2680113cd9fe008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f9a1d4cd69414c15106094b8d1d33f7bcbeb3c6c74ff331fa4ce5631f28db24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9a1d4cd69414c15106094b8d1d33f7bcbeb3c6c74ff331fa4ce5631f28db24->enter($__internal_5f9a1d4cd69414c15106094b8d1d33f7bcbeb3c6c74ff331fa4ce5631f28db24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "</html>
";
        
        $__internal_5f9a1d4cd69414c15106094b8d1d33f7bcbeb3c6c74ff331fa4ce5631f28db24->leave($__internal_5f9a1d4cd69414c15106094b8d1d33f7bcbeb3c6c74ff331fa4ce5631f28db24_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_9d338cbfe99bcfa0db206c87ff2934752b6cbd00d3101d568f11c64b40533bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d338cbfe99bcfa0db206c87ff2934752b6cbd00d3101d568f11c64b40533bb3->enter($__internal_9d338cbfe99bcfa0db206c87ff2934752b6cbd00d3101d568f11c64b40533bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_9d338cbfe99bcfa0db206c87ff2934752b6cbd00d3101d568f11c64b40533bb3->leave($__internal_9d338cbfe99bcfa0db206c87ff2934752b6cbd00d3101d568f11c64b40533bb3_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_338a3668f5ad7d21b3909f4c81e6c8601248c3c9516a5d03a9ce79580fc69f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338a3668f5ad7d21b3909f4c81e6c8601248c3c9516a5d03a9ce79580fc69f86->enter($__internal_338a3668f5ad7d21b3909f4c81e6c8601248c3c9516a5d03a9ce79580fc69f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_338a3668f5ad7d21b3909f4c81e6c8601248c3c9516a5d03a9ce79580fc69f86->leave($__internal_338a3668f5ad7d21b3909f4c81e6c8601248c3c9516a5d03a9ce79580fc69f86_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_06855b18a7dd9ffe796656ed8e0d8418ea96083696a3acaa5adbf9ca41ebd3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06855b18a7dd9ffe796656ed8e0d8418ea96083696a3acaa5adbf9ca41ebd3fb->enter($__internal_06855b18a7dd9ffe796656ed8e0d8418ea96083696a3acaa5adbf9ca41ebd3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_06855b18a7dd9ffe796656ed8e0d8418ea96083696a3acaa5adbf9ca41ebd3fb->leave($__internal_06855b18a7dd9ffe796656ed8e0d8418ea96083696a3acaa5adbf9ca41ebd3fb_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_fd945c157675d0065ed5ec83b49b1e2ea88d889a828f28865c599bd67656247a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd945c157675d0065ed5ec83b49b1e2ea88d889a828f28865c599bd67656247a->enter($__internal_fd945c157675d0065ed5ec83b49b1e2ea88d889a828f28865c599bd67656247a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_fd945c157675d0065ed5ec83b49b1e2ea88d889a828f28865c599bd67656247a->leave($__internal_fd945c157675d0065ed5ec83b49b1e2ea88d889a828f28865c599bd67656247a_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_719310eab9de1b864b97410c605442234c3a8250d3c0f466ce21ac5e6c3c6d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719310eab9de1b864b97410c605442234c3a8250d3c0f466ce21ac5e6c3c6d97->enter($__internal_719310eab9de1b864b97410c605442234c3a8250d3c0f466ce21ac5e6c3c6d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_719310eab9de1b864b97410c605442234c3a8250d3c0f466ce21ac5e6c3c6d97->leave($__internal_719310eab9de1b864b97410c605442234c3a8250d3c0f466ce21ac5e6c3c6d97_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_49a70368d618421024ef2d7269c472ec090e00972935027215d3e4cfc9e32e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a70368d618421024ef2d7269c472ec090e00972935027215d3e4cfc9e32e07->enter($__internal_49a70368d618421024ef2d7269c472ec090e00972935027215d3e4cfc9e32e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 153
        echo "        </div>

        ";
        // line 155
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 156
        echo "
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 158
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </body>
    ";
        
        $__internal_49a70368d618421024ef2d7269c472ec090e00972935027215d3e4cfc9e32e07->leave($__internal_49a70368d618421024ef2d7269c472ec090e00972935027215d3e4cfc9e32e07_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_11a2d7ba45ca5a22fd40e98c7d49d0d0834ea283327bfaf32ae4f1d5f00870c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a2d7ba45ca5a22fd40e98c7d49d0d0834ea283327bfaf32ae4f1d5f00870c4->enter($__internal_11a2d7ba45ca5a22fd40e98c7d49d0d0834ea283327bfaf32ae4f1d5f00870c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_11a2d7ba45ca5a22fd40e98c7d49d0d0834ea283327bfaf32ae4f1d5f00870c4->leave($__internal_11a2d7ba45ca5a22fd40e98c7d49d0d0834ea283327bfaf32ae4f1d5f00870c4_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_040e5304aee557b72b7ab0e2547e3e235c3dd57e2de2e2ef951465f4e0adc264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040e5304aee557b72b7ab0e2547e3e235c3dd57e2de2e2ef951465f4e0adc264->enter($__internal_040e5304aee557b72b7ab0e2547e3e235c3dd57e2de2e2ef951465f4e0adc264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_040e5304aee557b72b7ab0e2547e3e235c3dd57e2de2e2ef951465f4e0adc264->leave($__internal_040e5304aee557b72b7ab0e2547e3e235c3dd57e2de2e2ef951465f4e0adc264_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_24f086af01402b2c2bdae706c350262a0e8ccb33e20d9ff8a57e1ec6752217e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f086af01402b2c2bdae706c350262a0e8ccb33e20d9ff8a57e1ec6752217e5->enter($__internal_24f086af01402b2c2bdae706c350262a0e8ccb33e20d9ff8a57e1ec6752217e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 110
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 113
        $this->displayBlock('sidebar', $context, $blocks);
        // line 124
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "            </div>
        ";
        
        $__internal_24f086af01402b2c2bdae706c350262a0e8ccb33e20d9ff8a57e1ec6752217e5->leave($__internal_24f086af01402b2c2bdae706c350262a0e8ccb33e20d9ff8a57e1ec6752217e5_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_7cafa23264b02d522651cdb185f2795d0c4915fe51048048074a841c858deb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cafa23264b02d522651cdb185f2795d0c4915fe51048048074a841c858deb43->enter($__internal_7cafa23264b02d522651cdb185f2795d0c4915fe51048048074a841c858deb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 107
        echo "                    </div>
                </nav>
            ";
        
        $__internal_7cafa23264b02d522651cdb185f2795d0c4915fe51048048074a841c858deb43->leave($__internal_7cafa23264b02d522651cdb185f2795d0c4915fe51048048074a841c858deb43_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_ea75214471b35a061ec83cf1ad19a1353ff035daaf4ad3a613f791ff92e75cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea75214471b35a061ec83cf1ad19a1353ff035daaf4ad3a613f791ff92e75cdb->enter($__internal_ea75214471b35a061ec83cf1ad19a1353ff035daaf4ad3a613f791ff92e75cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_ea75214471b35a061ec83cf1ad19a1353ff035daaf4ad3a613f791ff92e75cdb->leave($__internal_ea75214471b35a061ec83cf1ad19a1353ff035daaf4ad3a613f791ff92e75cdb_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_7a2ff2ff6d5451c15fb845c0fb5f0f82e6b54b27ebd09da5e1156a39a9073f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2ff2ff6d5451c15fb845c0fb5f0f82e6b54b27ebd09da5e1156a39a9073f97->enter($__internal_7a2ff2ff6d5451c15fb845c0fb5f0f82e6b54b27ebd09da5e1156a39a9073f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 104
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_7a2ff2ff6d5451c15fb845c0fb5f0f82e6b54b27ebd09da5e1156a39a9073f97->leave($__internal_7a2ff2ff6d5451c15fb845c0fb5f0f82e6b54b27ebd09da5e1156a39a9073f97_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_c0edb78e4ba93a48a5a1cc8f57cc845389885764be0899c0da0d5d6b1b29d431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0edb78e4ba93a48a5a1cc8f57cc845389885764be0899c0da0d5d6b1b29d431->enter($__internal_c0edb78e4ba93a48a5a1cc8f57cc845389885764be0899c0da0d5d6b1b29d431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 100
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 103
        echo "                                ";
        
        $__internal_c0edb78e4ba93a48a5a1cc8f57cc845389885764be0899c0da0d5d6b1b29d431->leave($__internal_c0edb78e4ba93a48a5a1cc8f57cc845389885764be0899c0da0d5d6b1b29d431_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_3251ee3c7ccffc1ccb94f995b5ca63505ba4548ea83064d0504cdaf5fc95a802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3251ee3c7ccffc1ccb94f995b5ca63505ba4548ea83064d0504cdaf5fc95a802->enter($__internal_3251ee3c7ccffc1ccb94f995b5ca63505ba4548ea83064d0504cdaf5fc95a802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_3251ee3c7ccffc1ccb94f995b5ca63505ba4548ea83064d0504cdaf5fc95a802->leave($__internal_3251ee3c7ccffc1ccb94f995b5ca63505ba4548ea83064d0504cdaf5fc95a802_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_45281f6a2fd71091fe31f56aa61b30506a047047c03c86ae4c9e2c080b53cd5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45281f6a2fd71091fe31f56aa61b30506a047047c03c86ae4c9e2c080b53cd5a->enter($__internal_45281f6a2fd71091fe31f56aa61b30506a047047c03c86ae4c9e2c080b53cd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_45281f6a2fd71091fe31f56aa61b30506a047047c03c86ae4c9e2c080b53cd5a->leave($__internal_45281f6a2fd71091fe31f56aa61b30506a047047c03c86ae4c9e2c080b53cd5a_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_332855b470dd96939c0d22c655bac3cb88c3d7ba935e250eb1a07e849b8ca861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332855b470dd96939c0d22c655bac3cb88c3d7ba935e250eb1a07e849b8ca861->enter($__internal_332855b470dd96939c0d22c655bac3cb88c3d7ba935e250eb1a07e849b8ca861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_332855b470dd96939c0d22c655bac3cb88c3d7ba935e250eb1a07e849b8ca861->leave($__internal_332855b470dd96939c0d22c655bac3cb88c3d7ba935e250eb1a07e849b8ca861_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab0a20a13103923ce15b5e8152797b5c5367841a339eb0715dea1aff285d04b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0a20a13103923ce15b5e8152797b5c5367841a339eb0715dea1aff285d04b4->enter($__internal_ab0a20a13103923ce15b5e8152797b5c5367841a339eb0715dea1aff285d04b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 131
        echo "
                <section class=\"content-header\">
                ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 136
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 145
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 148
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "                </section>
            ";
        
        $__internal_ab0a20a13103923ce15b5e8152797b5c5367841a339eb0715dea1aff285d04b4->leave($__internal_ab0a20a13103923ce15b5e8152797b5c5367841a339eb0715dea1aff285d04b4_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_7f9834b4af9eb5e0118c765ca4516adf65d3f04d7bc519e42345995abcc73476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f9834b4af9eb5e0118c765ca4516adf65d3f04d7bc519e42345995abcc73476->enter($__internal_7f9834b4af9eb5e0118c765ca4516adf65d3f04d7bc519e42345995abcc73476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_7f9834b4af9eb5e0118c765ca4516adf65d3f04d7bc519e42345995abcc73476->leave($__internal_7f9834b4af9eb5e0118c765ca4516adf65d3f04d7bc519e42345995abcc73476_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_1a51e0164572feca21c2dba7246828f7df999de313683ef6da2eef6f8a754ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a51e0164572feca21c2dba7246828f7df999de313683ef6da2eef6f8a754ca3->enter($__internal_1a51e0164572feca21c2dba7246828f7df999de313683ef6da2eef6f8a754ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_1a51e0164572feca21c2dba7246828f7df999de313683ef6da2eef6f8a754ca3->leave($__internal_1a51e0164572feca21c2dba7246828f7df999de313683ef6da2eef6f8a754ca3_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5a0ef14b1ddaab0dd5803162b4df16fb243436b5a9e71ad622c11a38950f2a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0ef14b1ddaab0dd5803162b4df16fb243436b5a9e71ad622c11a38950f2a3d->enter($__internal_5a0ef14b1ddaab0dd5803162b4df16fb243436b5a9e71ad622c11a38950f2a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_5a0ef14b1ddaab0dd5803162b4df16fb243436b5a9e71ad622c11a38950f2a3d->leave($__internal_5a0ef14b1ddaab0dd5803162b4df16fb243436b5a9e71ad622c11a38950f2a3d_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_0478adf26be2048d8b060387bf6cf95164f4db135e73dbaec7dd05e507ea96aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0478adf26be2048d8b060387bf6cf95164f4db135e73dbaec7dd05e507ea96aa->enter($__internal_0478adf26be2048d8b060387bf6cf95164f4db135e73dbaec7dd05e507ea96aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 137
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 138
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 144
        echo "                ";
        
        $__internal_0478adf26be2048d8b060387bf6cf95164f4db135e73dbaec7dd05e507ea96aa->leave($__internal_0478adf26be2048d8b060387bf6cf95164f4db135e73dbaec7dd05e507ea96aa_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_775c2a104852e38ea122dac4019074d7e9f1b6cad9f674c42523b99219b9c94d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775c2a104852e38ea122dac4019074d7e9f1b6cad9f674c42523b99219b9c94d->enter($__internal_775c2a104852e38ea122dac4019074d7e9f1b6cad9f674c42523b99219b9c94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_775c2a104852e38ea122dac4019074d7e9f1b6cad9f674c42523b99219b9c94d->leave($__internal_775c2a104852e38ea122dac4019074d7e9f1b6cad9f674c42523b99219b9c94d_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_3eb0e7cff5f35a9b0dea9ce86900d64b76807e7ed9405d96eacf4c630a7f325c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb0e7cff5f35a9b0dea9ce86900d64b76807e7ed9405d96eacf4c630a7f325c->enter($__internal_3eb0e7cff5f35a9b0dea9ce86900d64b76807e7ed9405d96eacf4c630a7f325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_3eb0e7cff5f35a9b0dea9ce86900d64b76807e7ed9405d96eacf4c630a7f325c->leave($__internal_3eb0e7cff5f35a9b0dea9ce86900d64b76807e7ed9405d96eacf4c630a7f325c_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  637 => 155,  626 => 148,  619 => 144,  612 => 140,  608 => 138,  605 => 137,  599 => 136,  579 => 134,  573 => 133,  563 => 129,  557 => 128,  549 => 149,  547 => 148,  542 => 145,  539 => 136,  537 => 133,  533 => 131,  530 => 128,  524 => 127,  516 => 120,  514 => 117,  512 => 116,  506 => 115,  498 => 122,  496 => 115,  493 => 114,  487 => 113,  475 => 97,  472 => 96,  466 => 95,  459 => 103,  454 => 100,  452 => 95,  443 => 89,  438 => 86,  433 => 84,  430 => 83,  428 => 82,  424 => 81,  421 => 80,  419 => 79,  413 => 77,  407 => 76,  398 => 104,  396 => 76,  392 => 74,  389 => 73,  383 => 72,  373 => 66,  364 => 65,  358 => 64,  349 => 107,  347 => 72,  342 => 69,  340 => 64,  333 => 60,  329 => 58,  323 => 57,  315 => 151,  313 => 127,  308 => 124,  306 => 113,  301 => 110,  299 => 57,  296 => 56,  290 => 55,  269 => 53,  261 => 160,  252 => 158,  248 => 157,  245 => 156,  243 => 155,  239 => 153,  237 => 55,  227 => 53,  221 => 52,  203 => 30,  197 => 29,  188 => 43,  185 => 42,  182 => 29,  176 => 28,  164 => 25,  161 => 24,  155 => 23,  145 => 15,  139 => 13,  133 => 12,  121 => 10,  113 => 162,  111 => 52,  107 => 50,  102 => 48,  97 => 47,  95 => 46,  92 => 45,  90 => 28,  87 => 27,  85 => 23,  82 => 22,  73 => 20,  69 => 19,  66 => 18,  64 => 12,  59 => 10,  48 => 2,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "C:\\xampp\\htdocs\\congreso\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\layout.html.twig");
    }
}
