<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_73735ef2de69645ebcdeac65c950fbb0f088f50adae5df3c40ef4d9100a786c6 extends Twig_Template
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
        $__internal_f37dabd9350cecffa94e924f3172f54193ccef5254dbc832ee5d149cc3dc2c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37dabd9350cecffa94e924f3172f54193ccef5254dbc832ee5d149cc3dc2c01->enter($__internal_f37dabd9350cecffa94e924f3172f54193ccef5254dbc832ee5d149cc3dc2c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_4adde12087aba55f21f1f681d6a449885a05ffb1e2c3082b5246a4c8e96b6301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adde12087aba55f21f1f681d6a449885a05ffb1e2c3082b5246a4c8e96b6301->enter($__internal_4adde12087aba55f21f1f681d6a449885a05ffb1e2c3082b5246a4c8e96b6301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f37dabd9350cecffa94e924f3172f54193ccef5254dbc832ee5d149cc3dc2c01->leave($__internal_f37dabd9350cecffa94e924f3172f54193ccef5254dbc832ee5d149cc3dc2c01_prof);

        
        $__internal_4adde12087aba55f21f1f681d6a449885a05ffb1e2c3082b5246a4c8e96b6301->leave($__internal_4adde12087aba55f21f1f681d6a449885a05ffb1e2c3082b5246a4c8e96b6301_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
