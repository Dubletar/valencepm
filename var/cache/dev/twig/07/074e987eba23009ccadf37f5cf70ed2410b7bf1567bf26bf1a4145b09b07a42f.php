<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60e7577d394bd5b139abb3cee1e252668c4646acf8a4c158243e8ae0f3472b27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a83a161e73ccea712e1efc5f5778b36f134f6bb5eb16608ae6e84efe297a46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a83a161e73ccea712e1efc5f5778b36f134f6bb5eb16608ae6e84efe297a46f->enter($__internal_7a83a161e73ccea712e1efc5f5778b36f134f6bb5eb16608ae6e84efe297a46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a83a161e73ccea712e1efc5f5778b36f134f6bb5eb16608ae6e84efe297a46f->leave($__internal_7a83a161e73ccea712e1efc5f5778b36f134f6bb5eb16608ae6e84efe297a46f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a0d3ffcd2c3fb6ec6269bdb892ab154ac7d54381725f31cb57a967e97821591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0d3ffcd2c3fb6ec6269bdb892ab154ac7d54381725f31cb57a967e97821591->enter($__internal_9a0d3ffcd2c3fb6ec6269bdb892ab154ac7d54381725f31cb57a967e97821591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a0d3ffcd2c3fb6ec6269bdb892ab154ac7d54381725f31cb57a967e97821591->leave($__internal_9a0d3ffcd2c3fb6ec6269bdb892ab154ac7d54381725f31cb57a967e97821591_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e2bff949869bd6eaa7fbe760f69dda752b62253c25d2465fd3f203b1ce5bf41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2bff949869bd6eaa7fbe760f69dda752b62253c25d2465fd3f203b1ce5bf41->enter($__internal_3e2bff949869bd6eaa7fbe760f69dda752b62253c25d2465fd3f203b1ce5bf41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e2bff949869bd6eaa7fbe760f69dda752b62253c25d2465fd3f203b1ce5bf41->leave($__internal_3e2bff949869bd6eaa7fbe760f69dda752b62253c25d2465fd3f203b1ce5bf41_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d461a6fdf7303208ed5233ef8534c86bcf939f263d11978389b732faeec1837c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d461a6fdf7303208ed5233ef8534c86bcf939f263d11978389b732faeec1837c->enter($__internal_d461a6fdf7303208ed5233ef8534c86bcf939f263d11978389b732faeec1837c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d461a6fdf7303208ed5233ef8534c86bcf939f263d11978389b732faeec1837c->leave($__internal_d461a6fdf7303208ed5233ef8534c86bcf939f263d11978389b732faeec1837c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
