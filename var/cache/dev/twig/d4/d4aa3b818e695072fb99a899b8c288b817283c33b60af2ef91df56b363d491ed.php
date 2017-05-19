<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b637723b582a7979b4b36d8b8f86a06c12f6affa9919a773d7bb7ead0fa50a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df2b4c8ea93030a223da3499b1c7d0ea9731acf6e9ffebdab5a4f556cbfc3129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2b4c8ea93030a223da3499b1c7d0ea9731acf6e9ffebdab5a4f556cbfc3129->enter($__internal_df2b4c8ea93030a223da3499b1c7d0ea9731acf6e9ffebdab5a4f556cbfc3129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_b537c41b81cc4d286d63bb865c84aef9b3a18f33f167b7132582c17fcb71c2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b537c41b81cc4d286d63bb865c84aef9b3a18f33f167b7132582c17fcb71c2cd->enter($__internal_b537c41b81cc4d286d63bb865c84aef9b3a18f33f167b7132582c17fcb71c2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2b4c8ea93030a223da3499b1c7d0ea9731acf6e9ffebdab5a4f556cbfc3129->leave($__internal_df2b4c8ea93030a223da3499b1c7d0ea9731acf6e9ffebdab5a4f556cbfc3129_prof);

        
        $__internal_b537c41b81cc4d286d63bb865c84aef9b3a18f33f167b7132582c17fcb71c2cd->leave($__internal_b537c41b81cc4d286d63bb865c84aef9b3a18f33f167b7132582c17fcb71c2cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_86802f1fa30c85fd1eacfc71b4e8c9dd9e359851802aa514e1a79ed36fe80cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86802f1fa30c85fd1eacfc71b4e8c9dd9e359851802aa514e1a79ed36fe80cdd->enter($__internal_86802f1fa30c85fd1eacfc71b4e8c9dd9e359851802aa514e1a79ed36fe80cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bcc960a8b12fd35ae8dfe823f176a11432980e4204fbb0e97698fe439d4f2abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc960a8b12fd35ae8dfe823f176a11432980e4204fbb0e97698fe439d4f2abd->enter($__internal_bcc960a8b12fd35ae8dfe823f176a11432980e4204fbb0e97698fe439d4f2abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bcc960a8b12fd35ae8dfe823f176a11432980e4204fbb0e97698fe439d4f2abd->leave($__internal_bcc960a8b12fd35ae8dfe823f176a11432980e4204fbb0e97698fe439d4f2abd_prof);

        
        $__internal_86802f1fa30c85fd1eacfc71b4e8c9dd9e359851802aa514e1a79ed36fe80cdd->leave($__internal_86802f1fa30c85fd1eacfc71b4e8c9dd9e359851802aa514e1a79ed36fe80cdd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f02c4c4cf31dada7efd9435d9c96e0f26ea05566ac8e40b11c50ec8b331f6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f02c4c4cf31dada7efd9435d9c96e0f26ea05566ac8e40b11c50ec8b331f6ee->enter($__internal_4f02c4c4cf31dada7efd9435d9c96e0f26ea05566ac8e40b11c50ec8b331f6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36ef896c414b194d370ba2f669871d1fe16218e3413486df465bfeed1035ee03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ef896c414b194d370ba2f669871d1fe16218e3413486df465bfeed1035ee03->enter($__internal_36ef896c414b194d370ba2f669871d1fe16218e3413486df465bfeed1035ee03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_36ef896c414b194d370ba2f669871d1fe16218e3413486df465bfeed1035ee03->leave($__internal_36ef896c414b194d370ba2f669871d1fe16218e3413486df465bfeed1035ee03_prof);

        
        $__internal_4f02c4c4cf31dada7efd9435d9c96e0f26ea05566ac8e40b11c50ec8b331f6ee->leave($__internal_4f02c4c4cf31dada7efd9435d9c96e0f26ea05566ac8e40b11c50ec8b331f6ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
