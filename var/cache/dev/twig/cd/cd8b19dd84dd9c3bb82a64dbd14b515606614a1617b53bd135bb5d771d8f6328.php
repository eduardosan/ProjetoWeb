<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
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
        $__internal_7901d29e2ad7195b336178b2848e383663bc44f397cf2aca0e4fbf9121f01d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7901d29e2ad7195b336178b2848e383663bc44f397cf2aca0e4fbf9121f01d06->enter($__internal_7901d29e2ad7195b336178b2848e383663bc44f397cf2aca0e4fbf9121f01d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f5a352b3ca7caf43ed736184b31be455d8d09332bee0bad0ed27c3867ede9c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a352b3ca7caf43ed736184b31be455d8d09332bee0bad0ed27c3867ede9c62->enter($__internal_f5a352b3ca7caf43ed736184b31be455d8d09332bee0bad0ed27c3867ede9c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7901d29e2ad7195b336178b2848e383663bc44f397cf2aca0e4fbf9121f01d06->leave($__internal_7901d29e2ad7195b336178b2848e383663bc44f397cf2aca0e4fbf9121f01d06_prof);

        
        $__internal_f5a352b3ca7caf43ed736184b31be455d8d09332bee0bad0ed27c3867ede9c62->leave($__internal_f5a352b3ca7caf43ed736184b31be455d8d09332bee0bad0ed27c3867ede9c62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_865851b218a5dc731a561a03a5ba11feaf656d7ade248b7ed0d09fa66024a34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865851b218a5dc731a561a03a5ba11feaf656d7ade248b7ed0d09fa66024a34c->enter($__internal_865851b218a5dc731a561a03a5ba11feaf656d7ade248b7ed0d09fa66024a34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4ffc485fb379fa2bf560e60dc16120bfaed1de7d168ff1b4c6b9309e80ed8603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ffc485fb379fa2bf560e60dc16120bfaed1de7d168ff1b4c6b9309e80ed8603->enter($__internal_4ffc485fb379fa2bf560e60dc16120bfaed1de7d168ff1b4c6b9309e80ed8603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ffc485fb379fa2bf560e60dc16120bfaed1de7d168ff1b4c6b9309e80ed8603->leave($__internal_4ffc485fb379fa2bf560e60dc16120bfaed1de7d168ff1b4c6b9309e80ed8603_prof);

        
        $__internal_865851b218a5dc731a561a03a5ba11feaf656d7ade248b7ed0d09fa66024a34c->leave($__internal_865851b218a5dc731a561a03a5ba11feaf656d7ade248b7ed0d09fa66024a34c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3937b31a07b921fde709fba9e1f3cb854f957df6f3b885c7429f3922fc0f0c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3937b31a07b921fde709fba9e1f3cb854f957df6f3b885c7429f3922fc0f0c8d->enter($__internal_3937b31a07b921fde709fba9e1f3cb854f957df6f3b885c7429f3922fc0f0c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9bb898e525866b4e6ae785f6b44f51f570c321664423119b09efd9e3f3be9cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb898e525866b4e6ae785f6b44f51f570c321664423119b09efd9e3f3be9cf5->enter($__internal_9bb898e525866b4e6ae785f6b44f51f570c321664423119b09efd9e3f3be9cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9bb898e525866b4e6ae785f6b44f51f570c321664423119b09efd9e3f3be9cf5->leave($__internal_9bb898e525866b4e6ae785f6b44f51f570c321664423119b09efd9e3f3be9cf5_prof);

        
        $__internal_3937b31a07b921fde709fba9e1f3cb854f957df6f3b885c7429f3922fc0f0c8d->leave($__internal_3937b31a07b921fde709fba9e1f3cb854f957df6f3b885c7429f3922fc0f0c8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52bddead70d9a22c6c557950ccbfdbb2fe63e9584f7b33156aaf25b0d5982600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52bddead70d9a22c6c557950ccbfdbb2fe63e9584f7b33156aaf25b0d5982600->enter($__internal_52bddead70d9a22c6c557950ccbfdbb2fe63e9584f7b33156aaf25b0d5982600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_462451fb0afd8e49d0224ce0abab70fe98e582da2668f450c69cbe27d889705c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462451fb0afd8e49d0224ce0abab70fe98e582da2668f450c69cbe27d889705c->enter($__internal_462451fb0afd8e49d0224ce0abab70fe98e582da2668f450c69cbe27d889705c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_462451fb0afd8e49d0224ce0abab70fe98e582da2668f450c69cbe27d889705c->leave($__internal_462451fb0afd8e49d0224ce0abab70fe98e582da2668f450c69cbe27d889705c_prof);

        
        $__internal_52bddead70d9a22c6c557950ccbfdbb2fe63e9584f7b33156aaf25b0d5982600->leave($__internal_52bddead70d9a22c6c557950ccbfdbb2fe63e9584f7b33156aaf25b0d5982600_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
