<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2b010cb35fb9a71259ebd5f4d9945690d6bc2df7d5bb357e7184efe2193ab1b2 extends Twig_Template
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
        $__internal_97485904d8227e18599bfc1a1ff233bd464b97f97b91eca8d35dcd7e3d406821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97485904d8227e18599bfc1a1ff233bd464b97f97b91eca8d35dcd7e3d406821->enter($__internal_97485904d8227e18599bfc1a1ff233bd464b97f97b91eca8d35dcd7e3d406821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_43aab30ebed4286ba47e6c095ff2b123a4e8f1455ccf78811c1f905b012724bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43aab30ebed4286ba47e6c095ff2b123a4e8f1455ccf78811c1f905b012724bf->enter($__internal_43aab30ebed4286ba47e6c095ff2b123a4e8f1455ccf78811c1f905b012724bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_97485904d8227e18599bfc1a1ff233bd464b97f97b91eca8d35dcd7e3d406821->leave($__internal_97485904d8227e18599bfc1a1ff233bd464b97f97b91eca8d35dcd7e3d406821_prof);

        
        $__internal_43aab30ebed4286ba47e6c095ff2b123a4e8f1455ccf78811c1f905b012724bf->leave($__internal_43aab30ebed4286ba47e6c095ff2b123a4e8f1455ccf78811c1f905b012724bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
