<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b918401ba5047419850820a761e6317ab607b6abb9c74a6dc58abf830a4e6a4c extends Twig_Template
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
        $__internal_ac8f0dfe673493f3e1d5944b2918582db0dc912db85cb393040328499bb9ec0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8f0dfe673493f3e1d5944b2918582db0dc912db85cb393040328499bb9ec0b->enter($__internal_ac8f0dfe673493f3e1d5944b2918582db0dc912db85cb393040328499bb9ec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9d7e908c551b59d35abad904d81ddbebc35e33e377bcfdbf2a641e88f3877a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7e908c551b59d35abad904d81ddbebc35e33e377bcfdbf2a641e88f3877a23->enter($__internal_9d7e908c551b59d35abad904d81ddbebc35e33e377bcfdbf2a641e88f3877a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_ac8f0dfe673493f3e1d5944b2918582db0dc912db85cb393040328499bb9ec0b->leave($__internal_ac8f0dfe673493f3e1d5944b2918582db0dc912db85cb393040328499bb9ec0b_prof);

        
        $__internal_9d7e908c551b59d35abad904d81ddbebc35e33e377bcfdbf2a641e88f3877a23->leave($__internal_9d7e908c551b59d35abad904d81ddbebc35e33e377bcfdbf2a641e88f3877a23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
