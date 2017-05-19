<?php

/* @GrupoProjeto/Default/README.md */
class __TwigTemplate_8f249fd801fd9d939330a3ae34207bc553a129e7dc0bf7f4c590db892c36094e extends Twig_Template
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
        $__internal_16c9f85cb3bcc46b095309086531ffba6944859aa1de6eea8179224a91875636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c9f85cb3bcc46b095309086531ffba6944859aa1de6eea8179224a91875636->enter($__internal_16c9f85cb3bcc46b095309086531ffba6944859aa1de6eea8179224a91875636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GrupoProjeto/Default/README.md"));

        $__internal_636691aacf05c8d55db4ef39e393f822c7723b22724ca8995448374c1108bf21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636691aacf05c8d55db4ef39e393f822c7723b22724ca8995448374c1108bf21->enter($__internal_636691aacf05c8d55db4ef39e393f822c7723b22724ca8995448374c1108bf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GrupoProjeto/Default/README.md"));

        // line 1
        echo "# ProjetoWeb";
        
        $__internal_16c9f85cb3bcc46b095309086531ffba6944859aa1de6eea8179224a91875636->leave($__internal_16c9f85cb3bcc46b095309086531ffba6944859aa1de6eea8179224a91875636_prof);

        
        $__internal_636691aacf05c8d55db4ef39e393f822c7723b22724ca8995448374c1108bf21->leave($__internal_636691aacf05c8d55db4ef39e393f822c7723b22724ca8995448374c1108bf21_prof);

    }

    public function getTemplateName()
    {
        return "@GrupoProjeto/Default/README.md";
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
        return new Twig_Source("# ProjetoWeb", "@GrupoProjeto/Default/README.md", "/home/diogo/ProjetoWeb/src/Grupo/ProjetoBundle/Resources/views/Default/README.md");
    }
}
