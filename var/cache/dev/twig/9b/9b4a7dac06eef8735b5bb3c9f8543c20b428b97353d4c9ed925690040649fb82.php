<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_3b800c76039893f776d13579b102652f2f9390bd8d7e25474946641ff184e935 extends Twig_Template
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
        $__internal_e2e5144a478b67838063e8e91f801577a41e326f83c513dc883a9697e60a7964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e5144a478b67838063e8e91f801577a41e326f83c513dc883a9697e60a7964->enter($__internal_e2e5144a478b67838063e8e91f801577a41e326f83c513dc883a9697e60a7964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_df095a0ccf1393f502dbd58eecb7038b7f5a9d4b39daa41b5b845bc1d8b19a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df095a0ccf1393f502dbd58eecb7038b7f5a9d4b39daa41b5b845bc1d8b19a82->enter($__internal_df095a0ccf1393f502dbd58eecb7038b7f5a9d4b39daa41b5b845bc1d8b19a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e2e5144a478b67838063e8e91f801577a41e326f83c513dc883a9697e60a7964->leave($__internal_e2e5144a478b67838063e8e91f801577a41e326f83c513dc883a9697e60a7964_prof);

        
        $__internal_df095a0ccf1393f502dbd58eecb7038b7f5a9d4b39daa41b5b845bc1d8b19a82->leave($__internal_df095a0ccf1393f502dbd58eecb7038b7f5a9d4b39daa41b5b845bc1d8b19a82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
