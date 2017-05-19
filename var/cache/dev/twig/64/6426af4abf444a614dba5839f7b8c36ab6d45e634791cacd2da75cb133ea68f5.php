<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d53658b15e56fd14b303884d834c3407f4d01ff2e637535840b08a37fb3d1798 extends Twig_Template
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
        $__internal_31e645b9a018ac8ce18ef8d2e674ee0baa2687ecc2584a890976ddfd70f39fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e645b9a018ac8ce18ef8d2e674ee0baa2687ecc2584a890976ddfd70f39fb2->enter($__internal_31e645b9a018ac8ce18ef8d2e674ee0baa2687ecc2584a890976ddfd70f39fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_4298181b8d0ad454a4b0069de3930948b29f95af05a6cd2b6a8cd8834df83b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4298181b8d0ad454a4b0069de3930948b29f95af05a6cd2b6a8cd8834df83b93->enter($__internal_4298181b8d0ad454a4b0069de3930948b29f95af05a6cd2b6a8cd8834df83b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_31e645b9a018ac8ce18ef8d2e674ee0baa2687ecc2584a890976ddfd70f39fb2->leave($__internal_31e645b9a018ac8ce18ef8d2e674ee0baa2687ecc2584a890976ddfd70f39fb2_prof);

        
        $__internal_4298181b8d0ad454a4b0069de3930948b29f95af05a6cd2b6a8cd8834df83b93->leave($__internal_4298181b8d0ad454a4b0069de3930948b29f95af05a6cd2b6a8cd8834df83b93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
