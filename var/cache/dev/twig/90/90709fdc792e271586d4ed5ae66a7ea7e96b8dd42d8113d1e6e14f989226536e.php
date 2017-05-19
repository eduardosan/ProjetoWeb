<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e297c640960503a899ae115cebef317122a0fecdcd1671665a4e9527d4b3f59c extends Twig_Template
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
        $__internal_d112ff5c01d2618f4c787f5fe4ca08ed09619c77e2ca958e188f177845f25c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d112ff5c01d2618f4c787f5fe4ca08ed09619c77e2ca958e188f177845f25c53->enter($__internal_d112ff5c01d2618f4c787f5fe4ca08ed09619c77e2ca958e188f177845f25c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_0c4c88afa13e4c6f7195df200be30d62f9f108ed0b2723c56aca905c7c74a096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4c88afa13e4c6f7195df200be30d62f9f108ed0b2723c56aca905c7c74a096->enter($__internal_0c4c88afa13e4c6f7195df200be30d62f9f108ed0b2723c56aca905c7c74a096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d112ff5c01d2618f4c787f5fe4ca08ed09619c77e2ca958e188f177845f25c53->leave($__internal_d112ff5c01d2618f4c787f5fe4ca08ed09619c77e2ca958e188f177845f25c53_prof);

        
        $__internal_0c4c88afa13e4c6f7195df200be30d62f9f108ed0b2723c56aca905c7c74a096->leave($__internal_0c4c88afa13e4c6f7195df200be30d62f9f108ed0b2723c56aca905c7c74a096_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
