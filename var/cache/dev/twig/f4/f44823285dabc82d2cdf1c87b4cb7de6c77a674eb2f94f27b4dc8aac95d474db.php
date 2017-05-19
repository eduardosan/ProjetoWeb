<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fdef7b3cbc51627ddf34b13ab6fe79909f3fb2aa9aacdf2b43b9e2fe712f399f extends Twig_Template
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
        $__internal_b1c045c7162ea0d1a462ccb3e2a799c38487f74de56e2a94d2cf47b15ed1a22d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c045c7162ea0d1a462ccb3e2a799c38487f74de56e2a94d2cf47b15ed1a22d->enter($__internal_b1c045c7162ea0d1a462ccb3e2a799c38487f74de56e2a94d2cf47b15ed1a22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_47c9558bf283d6cb8e4d993238cc1b13b3b3842452605a5ee902a42748f50789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c9558bf283d6cb8e4d993238cc1b13b3b3842452605a5ee902a42748f50789->enter($__internal_47c9558bf283d6cb8e4d993238cc1b13b3b3842452605a5ee902a42748f50789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b1c045c7162ea0d1a462ccb3e2a799c38487f74de56e2a94d2cf47b15ed1a22d->leave($__internal_b1c045c7162ea0d1a462ccb3e2a799c38487f74de56e2a94d2cf47b15ed1a22d_prof);

        
        $__internal_47c9558bf283d6cb8e4d993238cc1b13b3b3842452605a5ee902a42748f50789->leave($__internal_47c9558bf283d6cb8e4d993238cc1b13b3b3842452605a5ee902a42748f50789_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/diogo/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
