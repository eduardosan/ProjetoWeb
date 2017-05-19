<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8bbc625140afc72c8b19f38f0f24da0557ba3863bbb77bb63a619b97bc881b85 extends Twig_Template
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
        $__internal_2388c67ab947cb690c1e80471d142c22be4fc7c786f6a8af0083e1bf5aaa234f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2388c67ab947cb690c1e80471d142c22be4fc7c786f6a8af0083e1bf5aaa234f->enter($__internal_2388c67ab947cb690c1e80471d142c22be4fc7c786f6a8af0083e1bf5aaa234f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_809551c9c8650a4ae52f851bd95e46d914c362265c826eadcf60c4e11ca67612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_809551c9c8650a4ae52f851bd95e46d914c362265c826eadcf60c4e11ca67612->enter($__internal_809551c9c8650a4ae52f851bd95e46d914c362265c826eadcf60c4e11ca67612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2388c67ab947cb690c1e80471d142c22be4fc7c786f6a8af0083e1bf5aaa234f->leave($__internal_2388c67ab947cb690c1e80471d142c22be4fc7c786f6a8af0083e1bf5aaa234f_prof);

        
        $__internal_809551c9c8650a4ae52f851bd95e46d914c362265c826eadcf60c4e11ca67612->leave($__internal_809551c9c8650a4ae52f851bd95e46d914c362265c826eadcf60c4e11ca67612_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
