<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_87c54b94642b5acb5f8392769c9f7cda27b8679021e0bbdc2603da56cb6339b7 extends Twig_Template
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
        $__internal_612f474ac84967fdb1ec4c494a3a10553916e4ed66abb7c4823289225311905b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612f474ac84967fdb1ec4c494a3a10553916e4ed66abb7c4823289225311905b->enter($__internal_612f474ac84967fdb1ec4c494a3a10553916e4ed66abb7c4823289225311905b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_71218b881b0a14c169cb740ae6c35405f774af47958fd98b540750f6e6002c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71218b881b0a14c169cb740ae6c35405f774af47958fd98b540750f6e6002c58->enter($__internal_71218b881b0a14c169cb740ae6c35405f774af47958fd98b540750f6e6002c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_612f474ac84967fdb1ec4c494a3a10553916e4ed66abb7c4823289225311905b->leave($__internal_612f474ac84967fdb1ec4c494a3a10553916e4ed66abb7c4823289225311905b_prof);

        
        $__internal_71218b881b0a14c169cb740ae6c35405f774af47958fd98b540750f6e6002c58->leave($__internal_71218b881b0a14c169cb740ae6c35405f774af47958fd98b540750f6e6002c58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
