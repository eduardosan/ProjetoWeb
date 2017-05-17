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
        $__internal_b63fd3cf59dd9ce25d81dcd109b53009ad81cbfa9bd4a4284c4518525e11ec1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63fd3cf59dd9ce25d81dcd109b53009ad81cbfa9bd4a4284c4518525e11ec1b->enter($__internal_b63fd3cf59dd9ce25d81dcd109b53009ad81cbfa9bd4a4284c4518525e11ec1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8565ded57b1ad70059a721e9f1b1fe7ebc788cb2efd04722a65e502addbebc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8565ded57b1ad70059a721e9f1b1fe7ebc788cb2efd04722a65e502addbebc35->enter($__internal_8565ded57b1ad70059a721e9f1b1fe7ebc788cb2efd04722a65e502addbebc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b63fd3cf59dd9ce25d81dcd109b53009ad81cbfa9bd4a4284c4518525e11ec1b->leave($__internal_b63fd3cf59dd9ce25d81dcd109b53009ad81cbfa9bd4a4284c4518525e11ec1b_prof);

        
        $__internal_8565ded57b1ad70059a721e9f1b1fe7ebc788cb2efd04722a65e502addbebc35->leave($__internal_8565ded57b1ad70059a721e9f1b1fe7ebc788cb2efd04722a65e502addbebc35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f4ff8b6f3cf9637b1f3166fa4c1b4d8791e6f04d4bdb6b2abb35b4aa6b19c053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ff8b6f3cf9637b1f3166fa4c1b4d8791e6f04d4bdb6b2abb35b4aa6b19c053->enter($__internal_f4ff8b6f3cf9637b1f3166fa4c1b4d8791e6f04d4bdb6b2abb35b4aa6b19c053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f09966b06bb013ce29707ff1a144605af474c945e5dc802b76051ca08d615254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09966b06bb013ce29707ff1a144605af474c945e5dc802b76051ca08d615254->enter($__internal_f09966b06bb013ce29707ff1a144605af474c945e5dc802b76051ca08d615254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f09966b06bb013ce29707ff1a144605af474c945e5dc802b76051ca08d615254->leave($__internal_f09966b06bb013ce29707ff1a144605af474c945e5dc802b76051ca08d615254_prof);

        
        $__internal_f4ff8b6f3cf9637b1f3166fa4c1b4d8791e6f04d4bdb6b2abb35b4aa6b19c053->leave($__internal_f4ff8b6f3cf9637b1f3166fa4c1b4d8791e6f04d4bdb6b2abb35b4aa6b19c053_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6eda64ba721fc4c648de3f1927bd23508fbe34a7ecffda4de274caa89c217287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eda64ba721fc4c648de3f1927bd23508fbe34a7ecffda4de274caa89c217287->enter($__internal_6eda64ba721fc4c648de3f1927bd23508fbe34a7ecffda4de274caa89c217287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_06432f982c71864dd9dcd02eea9af0f2be7efaaf4717fa407c4ac320d8431271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06432f982c71864dd9dcd02eea9af0f2be7efaaf4717fa407c4ac320d8431271->enter($__internal_06432f982c71864dd9dcd02eea9af0f2be7efaaf4717fa407c4ac320d8431271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06432f982c71864dd9dcd02eea9af0f2be7efaaf4717fa407c4ac320d8431271->leave($__internal_06432f982c71864dd9dcd02eea9af0f2be7efaaf4717fa407c4ac320d8431271_prof);

        
        $__internal_6eda64ba721fc4c648de3f1927bd23508fbe34a7ecffda4de274caa89c217287->leave($__internal_6eda64ba721fc4c648de3f1927bd23508fbe34a7ecffda4de274caa89c217287_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fb4e5d5dff216682bf44c9c9b0c6f64f3fe1583b5f6cf89003cdd030d93ee38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb4e5d5dff216682bf44c9c9b0c6f64f3fe1583b5f6cf89003cdd030d93ee38->enter($__internal_9fb4e5d5dff216682bf44c9c9b0c6f64f3fe1583b5f6cf89003cdd030d93ee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5022fe22f732a535c2b3cd97cbf73bcb7a731e560e60b1272657b7869efb4caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5022fe22f732a535c2b3cd97cbf73bcb7a731e560e60b1272657b7869efb4caa->enter($__internal_5022fe22f732a535c2b3cd97cbf73bcb7a731e560e60b1272657b7869efb4caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5022fe22f732a535c2b3cd97cbf73bcb7a731e560e60b1272657b7869efb4caa->leave($__internal_5022fe22f732a535c2b3cd97cbf73bcb7a731e560e60b1272657b7869efb4caa_prof);

        
        $__internal_9fb4e5d5dff216682bf44c9c9b0c6f64f3fe1583b5f6cf89003cdd030d93ee38->leave($__internal_9fb4e5d5dff216682bf44c9c9b0c6f64f3fe1583b5f6cf89003cdd030d93ee38_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/diogo/Diogo/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
