<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d04edcbb07950ac0cb4bea09bdded90c5d65a63a3e0c5df87d22b56839c447b8 extends Twig_Template
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
        $__internal_5fcbc38579932161f68a1d9cae2fe93b14ffb09b7b71263cecb00a58ab3c8561 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcbc38579932161f68a1d9cae2fe93b14ffb09b7b71263cecb00a58ab3c8561->enter($__internal_5fcbc38579932161f68a1d9cae2fe93b14ffb09b7b71263cecb00a58ab3c8561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5fdc14df5aa74fed7181e98871c147d074f57ed0f64fd40cdb2f681c10c28968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdc14df5aa74fed7181e98871c147d074f57ed0f64fd40cdb2f681c10c28968->enter($__internal_5fdc14df5aa74fed7181e98871c147d074f57ed0f64fd40cdb2f681c10c28968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5fcbc38579932161f68a1d9cae2fe93b14ffb09b7b71263cecb00a58ab3c8561->leave($__internal_5fcbc38579932161f68a1d9cae2fe93b14ffb09b7b71263cecb00a58ab3c8561_prof);

        
        $__internal_5fdc14df5aa74fed7181e98871c147d074f57ed0f64fd40cdb2f681c10c28968->leave($__internal_5fdc14df5aa74fed7181e98871c147d074f57ed0f64fd40cdb2f681c10c28968_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
