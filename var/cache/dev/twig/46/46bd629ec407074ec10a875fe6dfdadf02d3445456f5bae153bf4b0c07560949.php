<?php

/* ::base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b64d6497613a593b285bb75ca1f512818c7076b73dfbd7c37da8f050cfd69a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64d6497613a593b285bb75ca1f512818c7076b73dfbd7c37da8f050cfd69a5f->enter($__internal_b64d6497613a593b285bb75ca1f512818c7076b73dfbd7c37da8f050cfd69a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_52c9b466f88d4f5e65449f58fbf65f028aa48a42e5a26af21b7be130348a2059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c9b466f88d4f5e65449f58fbf65f028aa48a42e5a26af21b7be130348a2059->enter($__internal_52c9b466f88d4f5e65449f58fbf65f028aa48a42e5a26af21b7be130348a2059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b64d6497613a593b285bb75ca1f512818c7076b73dfbd7c37da8f050cfd69a5f->leave($__internal_b64d6497613a593b285bb75ca1f512818c7076b73dfbd7c37da8f050cfd69a5f_prof);

        
        $__internal_52c9b466f88d4f5e65449f58fbf65f028aa48a42e5a26af21b7be130348a2059->leave($__internal_52c9b466f88d4f5e65449f58fbf65f028aa48a42e5a26af21b7be130348a2059_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_987f1d8ca045e36eb91a6420f5465a3d4bca4ebb421d13a0fd4e4a7318a6c58e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987f1d8ca045e36eb91a6420f5465a3d4bca4ebb421d13a0fd4e4a7318a6c58e->enter($__internal_987f1d8ca045e36eb91a6420f5465a3d4bca4ebb421d13a0fd4e4a7318a6c58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f033e19f2fae9e925e18829351b8fb3fd34904f1544c62368ce301ce091f37f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f033e19f2fae9e925e18829351b8fb3fd34904f1544c62368ce301ce091f37f4->enter($__internal_f033e19f2fae9e925e18829351b8fb3fd34904f1544c62368ce301ce091f37f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f033e19f2fae9e925e18829351b8fb3fd34904f1544c62368ce301ce091f37f4->leave($__internal_f033e19f2fae9e925e18829351b8fb3fd34904f1544c62368ce301ce091f37f4_prof);

        
        $__internal_987f1d8ca045e36eb91a6420f5465a3d4bca4ebb421d13a0fd4e4a7318a6c58e->leave($__internal_987f1d8ca045e36eb91a6420f5465a3d4bca4ebb421d13a0fd4e4a7318a6c58e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2486082f82a7c270f3977b9270652cad2828882f912c9d04abf251e7905e462a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2486082f82a7c270f3977b9270652cad2828882f912c9d04abf251e7905e462a->enter($__internal_2486082f82a7c270f3977b9270652cad2828882f912c9d04abf251e7905e462a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_92c335faa9b127229cca634e46c285b1376b0b1bcb3efc9d3db623a788bdd6e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c335faa9b127229cca634e46c285b1376b0b1bcb3efc9d3db623a788bdd6e3->enter($__internal_92c335faa9b127229cca634e46c285b1376b0b1bcb3efc9d3db623a788bdd6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_92c335faa9b127229cca634e46c285b1376b0b1bcb3efc9d3db623a788bdd6e3->leave($__internal_92c335faa9b127229cca634e46c285b1376b0b1bcb3efc9d3db623a788bdd6e3_prof);

        
        $__internal_2486082f82a7c270f3977b9270652cad2828882f912c9d04abf251e7905e462a->leave($__internal_2486082f82a7c270f3977b9270652cad2828882f912c9d04abf251e7905e462a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7be83e4abececb526e780209c64f0be673ba392b8b4fbae08bc203eb4f5f0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7be83e4abececb526e780209c64f0be673ba392b8b4fbae08bc203eb4f5f0e7->enter($__internal_f7be83e4abececb526e780209c64f0be673ba392b8b4fbae08bc203eb4f5f0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1b84ae22af502616ffcac57ea9dc0d10646bbb3d2b68e999634245d685aa87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b84ae22af502616ffcac57ea9dc0d10646bbb3d2b68e999634245d685aa87b->enter($__internal_a1b84ae22af502616ffcac57ea9dc0d10646bbb3d2b68e999634245d685aa87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a1b84ae22af502616ffcac57ea9dc0d10646bbb3d2b68e999634245d685aa87b->leave($__internal_a1b84ae22af502616ffcac57ea9dc0d10646bbb3d2b68e999634245d685aa87b_prof);

        
        $__internal_f7be83e4abececb526e780209c64f0be673ba392b8b4fbae08bc203eb4f5f0e7->leave($__internal_f7be83e4abececb526e780209c64f0be673ba392b8b4fbae08bc203eb4f5f0e7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_375583dd37ea569e3a452262046c276d4fe938f0e9672502ee3fc96d5cda45ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375583dd37ea569e3a452262046c276d4fe938f0e9672502ee3fc96d5cda45ac->enter($__internal_375583dd37ea569e3a452262046c276d4fe938f0e9672502ee3fc96d5cda45ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9002d55172f9dd03c044572191b1cc414dbbf80ebab93ab1d1502c50107b77f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9002d55172f9dd03c044572191b1cc414dbbf80ebab93ab1d1502c50107b77f6->enter($__internal_9002d55172f9dd03c044572191b1cc414dbbf80ebab93ab1d1502c50107b77f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9002d55172f9dd03c044572191b1cc414dbbf80ebab93ab1d1502c50107b77f6->leave($__internal_9002d55172f9dd03c044572191b1cc414dbbf80ebab93ab1d1502c50107b77f6_prof);

        
        $__internal_375583dd37ea569e3a452262046c276d4fe938f0e9672502ee3fc96d5cda45ac->leave($__internal_375583dd37ea569e3a452262046c276d4fe938f0e9672502ee3fc96d5cda45ac_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/diogo/ProjetoWeb/app/Resources/views/base.html.twig");
    }
}
