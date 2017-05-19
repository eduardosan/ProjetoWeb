<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ed598f64c3eaa249ab8e1cd012263774744fd2aae7a0bb9f4357007b645c5fd8 extends Twig_Template
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
        $__internal_f2f0df9dc04ad1e08897744d0d21aaf04f7cceed5dbb2c0d17692b7fe4361e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f0df9dc04ad1e08897744d0d21aaf04f7cceed5dbb2c0d17692b7fe4361e7f->enter($__internal_f2f0df9dc04ad1e08897744d0d21aaf04f7cceed5dbb2c0d17692b7fe4361e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_6edae4ba217c493ccaf6cd67b09ee2e8b917f46444d7af5166dc15c5da5eb001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6edae4ba217c493ccaf6cd67b09ee2e8b917f46444d7af5166dc15c5da5eb001->enter($__internal_6edae4ba217c493ccaf6cd67b09ee2e8b917f46444d7af5166dc15c5da5eb001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f2f0df9dc04ad1e08897744d0d21aaf04f7cceed5dbb2c0d17692b7fe4361e7f->leave($__internal_f2f0df9dc04ad1e08897744d0d21aaf04f7cceed5dbb2c0d17692b7fe4361e7f_prof);

        
        $__internal_6edae4ba217c493ccaf6cd67b09ee2e8b917f46444d7af5166dc15c5da5eb001->leave($__internal_6edae4ba217c493ccaf6cd67b09ee2e8b917f46444d7af5166dc15c5da5eb001_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
