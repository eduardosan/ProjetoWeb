<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_55a2148693179018a72d00408568915a95616c14e20dcc32f78fcd861d6a1aa1 extends Twig_Template
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
        $__internal_8a337cb307b23ea7c2e602eae0ae6ecec543ac46bc622767cbc5281acf7285d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a337cb307b23ea7c2e602eae0ae6ecec543ac46bc622767cbc5281acf7285d6->enter($__internal_8a337cb307b23ea7c2e602eae0ae6ecec543ac46bc622767cbc5281acf7285d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_d4593ebfaaa0128f86ddd10c1d47b0db245623e6ff16a7855a956f3659a1372a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4593ebfaaa0128f86ddd10c1d47b0db245623e6ff16a7855a956f3659a1372a->enter($__internal_d4593ebfaaa0128f86ddd10c1d47b0db245623e6ff16a7855a956f3659a1372a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8a337cb307b23ea7c2e602eae0ae6ecec543ac46bc622767cbc5281acf7285d6->leave($__internal_8a337cb307b23ea7c2e602eae0ae6ecec543ac46bc622767cbc5281acf7285d6_prof);

        
        $__internal_d4593ebfaaa0128f86ddd10c1d47b0db245623e6ff16a7855a956f3659a1372a->leave($__internal_d4593ebfaaa0128f86ddd10c1d47b0db245623e6ff16a7855a956f3659a1372a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
