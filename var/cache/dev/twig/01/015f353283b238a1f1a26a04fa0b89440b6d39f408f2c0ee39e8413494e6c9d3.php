<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_aaefabb95fdb057edc91b57e65ad07320397beccb8b0c0616689c51bac6073bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0852d4cba75d6ae8085ec1bcb2d3681f09a2e8f601831cfad49af59bfe4e5458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0852d4cba75d6ae8085ec1bcb2d3681f09a2e8f601831cfad49af59bfe4e5458->enter($__internal_0852d4cba75d6ae8085ec1bcb2d3681f09a2e8f601831cfad49af59bfe4e5458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_afa12726e044e02251c6a1b7fe089ad88a5a14006df35dd8f6daf08f2e582111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa12726e044e02251c6a1b7fe089ad88a5a14006df35dd8f6daf08f2e582111->enter($__internal_afa12726e044e02251c6a1b7fe089ad88a5a14006df35dd8f6daf08f2e582111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0852d4cba75d6ae8085ec1bcb2d3681f09a2e8f601831cfad49af59bfe4e5458->leave($__internal_0852d4cba75d6ae8085ec1bcb2d3681f09a2e8f601831cfad49af59bfe4e5458_prof);

        
        $__internal_afa12726e044e02251c6a1b7fe089ad88a5a14006df35dd8f6daf08f2e582111->leave($__internal_afa12726e044e02251c6a1b7fe089ad88a5a14006df35dd8f6daf08f2e582111_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_73a1c6ca16f8d2ef051de1fb7820f7e1e56a1d9860d1b89c48501481f927dcfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a1c6ca16f8d2ef051de1fb7820f7e1e56a1d9860d1b89c48501481f927dcfc->enter($__internal_73a1c6ca16f8d2ef051de1fb7820f7e1e56a1d9860d1b89c48501481f927dcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_297f41b2186ba20f4eaca1256c514a8e1839a62fd730da8b8cce6f86afb79281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297f41b2186ba20f4eaca1256c514a8e1839a62fd730da8b8cce6f86afb79281->enter($__internal_297f41b2186ba20f4eaca1256c514a8e1839a62fd730da8b8cce6f86afb79281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_297f41b2186ba20f4eaca1256c514a8e1839a62fd730da8b8cce6f86afb79281->leave($__internal_297f41b2186ba20f4eaca1256c514a8e1839a62fd730da8b8cce6f86afb79281_prof);

        
        $__internal_73a1c6ca16f8d2ef051de1fb7820f7e1e56a1d9860d1b89c48501481f927dcfc->leave($__internal_73a1c6ca16f8d2ef051de1fb7820f7e1e56a1d9860d1b89c48501481f927dcfc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
