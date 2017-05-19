<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_740a1e675171eae31fdc33a6b2ec07b9a03970286eb59464e27fc1f696422796 extends Twig_Template
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
        $__internal_86ba29c4fe93beaa9e84c1ea8daa5ac15dcb0ebb42504cf5b2bfb385654f6684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ba29c4fe93beaa9e84c1ea8daa5ac15dcb0ebb42504cf5b2bfb385654f6684->enter($__internal_86ba29c4fe93beaa9e84c1ea8daa5ac15dcb0ebb42504cf5b2bfb385654f6684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_fd652f479102767edb8ae22eb2e6570a18a60b3e83e0e6e5414380a287514d4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd652f479102767edb8ae22eb2e6570a18a60b3e83e0e6e5414380a287514d4c->enter($__internal_fd652f479102767edb8ae22eb2e6570a18a60b3e83e0e6e5414380a287514d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_86ba29c4fe93beaa9e84c1ea8daa5ac15dcb0ebb42504cf5b2bfb385654f6684->leave($__internal_86ba29c4fe93beaa9e84c1ea8daa5ac15dcb0ebb42504cf5b2bfb385654f6684_prof);

        
        $__internal_fd652f479102767edb8ae22eb2e6570a18a60b3e83e0e6e5414380a287514d4c->leave($__internal_fd652f479102767edb8ae22eb2e6570a18a60b3e83e0e6e5414380a287514d4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
