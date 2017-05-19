<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_78b5e4127f5cb89e629beba0e155d959aa06bcd771ebd70d951e23adc5bdd2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b5e4127f5cb89e629beba0e155d959aa06bcd771ebd70d951e23adc5bdd2c8->enter($__internal_78b5e4127f5cb89e629beba0e155d959aa06bcd771ebd70d951e23adc5bdd2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cf657c73d5ba180d4767b01d34ceffa29d69e65f1ffac3fd839b755979306a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf657c73d5ba180d4767b01d34ceffa29d69e65f1ffac3fd839b755979306a36->enter($__internal_cf657c73d5ba180d4767b01d34ceffa29d69e65f1ffac3fd839b755979306a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78b5e4127f5cb89e629beba0e155d959aa06bcd771ebd70d951e23adc5bdd2c8->leave($__internal_78b5e4127f5cb89e629beba0e155d959aa06bcd771ebd70d951e23adc5bdd2c8_prof);

        
        $__internal_cf657c73d5ba180d4767b01d34ceffa29d69e65f1ffac3fd839b755979306a36->leave($__internal_cf657c73d5ba180d4767b01d34ceffa29d69e65f1ffac3fd839b755979306a36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77bcf2263054ebf40a26b9a9ac7a26b8c3bb5caefd367a3b11acfb0bb684c43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77bcf2263054ebf40a26b9a9ac7a26b8c3bb5caefd367a3b11acfb0bb684c43a->enter($__internal_77bcf2263054ebf40a26b9a9ac7a26b8c3bb5caefd367a3b11acfb0bb684c43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5a447cc7647eaf62e5d3e85743d9cbae08a0245b46dcc24d0dec8d642205fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a447cc7647eaf62e5d3e85743d9cbae08a0245b46dcc24d0dec8d642205fe4->enter($__internal_b5a447cc7647eaf62e5d3e85743d9cbae08a0245b46dcc24d0dec8d642205fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b5a447cc7647eaf62e5d3e85743d9cbae08a0245b46dcc24d0dec8d642205fe4->leave($__internal_b5a447cc7647eaf62e5d3e85743d9cbae08a0245b46dcc24d0dec8d642205fe4_prof);

        
        $__internal_77bcf2263054ebf40a26b9a9ac7a26b8c3bb5caefd367a3b11acfb0bb684c43a->leave($__internal_77bcf2263054ebf40a26b9a9ac7a26b8c3bb5caefd367a3b11acfb0bb684c43a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_906d0ebbdde1c515e3aa787e1d2de45e5c66a2bfecaf13e99ef4fe469a0c8acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_906d0ebbdde1c515e3aa787e1d2de45e5c66a2bfecaf13e99ef4fe469a0c8acf->enter($__internal_906d0ebbdde1c515e3aa787e1d2de45e5c66a2bfecaf13e99ef4fe469a0c8acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ede115e4156d5b20709aa4b81e8d9fbc176d27a5f89087ff2411e551326c225e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede115e4156d5b20709aa4b81e8d9fbc176d27a5f89087ff2411e551326c225e->enter($__internal_ede115e4156d5b20709aa4b81e8d9fbc176d27a5f89087ff2411e551326c225e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ede115e4156d5b20709aa4b81e8d9fbc176d27a5f89087ff2411e551326c225e->leave($__internal_ede115e4156d5b20709aa4b81e8d9fbc176d27a5f89087ff2411e551326c225e_prof);

        
        $__internal_906d0ebbdde1c515e3aa787e1d2de45e5c66a2bfecaf13e99ef4fe469a0c8acf->leave($__internal_906d0ebbdde1c515e3aa787e1d2de45e5c66a2bfecaf13e99ef4fe469a0c8acf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_065c0f02f4a6e2dce0261ff9b130ca2088bb360df336e0632fda83a678cabe4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065c0f02f4a6e2dce0261ff9b130ca2088bb360df336e0632fda83a678cabe4c->enter($__internal_065c0f02f4a6e2dce0261ff9b130ca2088bb360df336e0632fda83a678cabe4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ecb03b4cffad93a20cea4c43080567a28d1a80ea57e079922337784a2587608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ecb03b4cffad93a20cea4c43080567a28d1a80ea57e079922337784a2587608->enter($__internal_8ecb03b4cffad93a20cea4c43080567a28d1a80ea57e079922337784a2587608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8ecb03b4cffad93a20cea4c43080567a28d1a80ea57e079922337784a2587608->leave($__internal_8ecb03b4cffad93a20cea4c43080567a28d1a80ea57e079922337784a2587608_prof);

        
        $__internal_065c0f02f4a6e2dce0261ff9b130ca2088bb360df336e0632fda83a678cabe4c->leave($__internal_065c0f02f4a6e2dce0261ff9b130ca2088bb360df336e0632fda83a678cabe4c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
