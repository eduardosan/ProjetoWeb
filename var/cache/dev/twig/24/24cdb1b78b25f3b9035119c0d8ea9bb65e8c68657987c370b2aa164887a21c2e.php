<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ee860a2cff957446f4e9e2481079c3f6a949a8e6a353099fa77fd7770c2b433 extends Twig_Template
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
        $__internal_7f2a1f0900b9528052ab846fca326458ba828e021539aa6398f8b8914e0f51d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2a1f0900b9528052ab846fca326458ba828e021539aa6398f8b8914e0f51d1->enter($__internal_7f2a1f0900b9528052ab846fca326458ba828e021539aa6398f8b8914e0f51d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5680895affec2b2c520e4b8e6898cb4fc6a4fdd31d11a1b145d27261efc45483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5680895affec2b2c520e4b8e6898cb4fc6a4fdd31d11a1b145d27261efc45483->enter($__internal_5680895affec2b2c520e4b8e6898cb4fc6a4fdd31d11a1b145d27261efc45483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7f2a1f0900b9528052ab846fca326458ba828e021539aa6398f8b8914e0f51d1->leave($__internal_7f2a1f0900b9528052ab846fca326458ba828e021539aa6398f8b8914e0f51d1_prof);

        
        $__internal_5680895affec2b2c520e4b8e6898cb4fc6a4fdd31d11a1b145d27261efc45483->leave($__internal_5680895affec2b2c520e4b8e6898cb4fc6a4fdd31d11a1b145d27261efc45483_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
