<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85b2ccb6e82e3a87665006b7528b56159c640c36cd53ed73c26fdcf33a8718d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c969e43ee87fd43fa81342ee3fe10c0087b578d823cffcb3c8265e6373b2532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c969e43ee87fd43fa81342ee3fe10c0087b578d823cffcb3c8265e6373b2532->enter($__internal_6c969e43ee87fd43fa81342ee3fe10c0087b578d823cffcb3c8265e6373b2532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_70f87487489e1348c93166a88281b07cb9ec684ca0920ec5d5d461017175ff20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f87487489e1348c93166a88281b07cb9ec684ca0920ec5d5d461017175ff20->enter($__internal_70f87487489e1348c93166a88281b07cb9ec684ca0920ec5d5d461017175ff20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c969e43ee87fd43fa81342ee3fe10c0087b578d823cffcb3c8265e6373b2532->leave($__internal_6c969e43ee87fd43fa81342ee3fe10c0087b578d823cffcb3c8265e6373b2532_prof);

        
        $__internal_70f87487489e1348c93166a88281b07cb9ec684ca0920ec5d5d461017175ff20->leave($__internal_70f87487489e1348c93166a88281b07cb9ec684ca0920ec5d5d461017175ff20_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17f2e8699d722be08bfce008ab000ccec826a90c82a5b19b3b0a2025e12234cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f2e8699d722be08bfce008ab000ccec826a90c82a5b19b3b0a2025e12234cc->enter($__internal_17f2e8699d722be08bfce008ab000ccec826a90c82a5b19b3b0a2025e12234cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c64a51e2700e4b944f4d42cae4e40e7f1e067f0c1c02e7698ab9bab0100345d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64a51e2700e4b944f4d42cae4e40e7f1e067f0c1c02e7698ab9bab0100345d3->enter($__internal_c64a51e2700e4b944f4d42cae4e40e7f1e067f0c1c02e7698ab9bab0100345d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c64a51e2700e4b944f4d42cae4e40e7f1e067f0c1c02e7698ab9bab0100345d3->leave($__internal_c64a51e2700e4b944f4d42cae4e40e7f1e067f0c1c02e7698ab9bab0100345d3_prof);

        
        $__internal_17f2e8699d722be08bfce008ab000ccec826a90c82a5b19b3b0a2025e12234cc->leave($__internal_17f2e8699d722be08bfce008ab000ccec826a90c82a5b19b3b0a2025e12234cc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_39895f39917a5fa74ee84d40bffc3e3fe2d31af962b04ddadc9685dc613c18a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39895f39917a5fa74ee84d40bffc3e3fe2d31af962b04ddadc9685dc613c18a0->enter($__internal_39895f39917a5fa74ee84d40bffc3e3fe2d31af962b04ddadc9685dc613c18a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0171f1021b6c0cbaf42aa8a8c29f5220e88c8be5bc599427e87b10f10f0c2b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0171f1021b6c0cbaf42aa8a8c29f5220e88c8be5bc599427e87b10f10f0c2b26->enter($__internal_0171f1021b6c0cbaf42aa8a8c29f5220e88c8be5bc599427e87b10f10f0c2b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0171f1021b6c0cbaf42aa8a8c29f5220e88c8be5bc599427e87b10f10f0c2b26->leave($__internal_0171f1021b6c0cbaf42aa8a8c29f5220e88c8be5bc599427e87b10f10f0c2b26_prof);

        
        $__internal_39895f39917a5fa74ee84d40bffc3e3fe2d31af962b04ddadc9685dc613c18a0->leave($__internal_39895f39917a5fa74ee84d40bffc3e3fe2d31af962b04ddadc9685dc613c18a0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd7201d45abd155f70c78fc2726814fa954e609966a11c12074a95c64f6c864e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7201d45abd155f70c78fc2726814fa954e609966a11c12074a95c64f6c864e->enter($__internal_cd7201d45abd155f70c78fc2726814fa954e609966a11c12074a95c64f6c864e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56af5e353fe56fae322128f040b89724dec905bc6496ae25528588d145afda57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56af5e353fe56fae322128f040b89724dec905bc6496ae25528588d145afda57->enter($__internal_56af5e353fe56fae322128f040b89724dec905bc6496ae25528588d145afda57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_56af5e353fe56fae322128f040b89724dec905bc6496ae25528588d145afda57->leave($__internal_56af5e353fe56fae322128f040b89724dec905bc6496ae25528588d145afda57_prof);

        
        $__internal_cd7201d45abd155f70c78fc2726814fa954e609966a11c12074a95c64f6c864e->leave($__internal_cd7201d45abd155f70c78fc2726814fa954e609966a11c12074a95c64f6c864e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/diogo/Diogo/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
