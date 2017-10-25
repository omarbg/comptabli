<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ecf4c743587d97f2141c02702ca6c05df090c00ecbc312da445c838920239a47 extends Twig_Template
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
        $__internal_0ef8123557f3f03b5d7250f07fbed97baaa679fcd0b1276fa7cee2a0c966b733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef8123557f3f03b5d7250f07fbed97baaa679fcd0b1276fa7cee2a0c966b733->enter($__internal_0ef8123557f3f03b5d7250f07fbed97baaa679fcd0b1276fa7cee2a0c966b733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5fedb6526ba3c6960288cef8392985ec113b24efd4c2ca5948395e1cd114001b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fedb6526ba3c6960288cef8392985ec113b24efd4c2ca5948395e1cd114001b->enter($__internal_5fedb6526ba3c6960288cef8392985ec113b24efd4c2ca5948395e1cd114001b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ef8123557f3f03b5d7250f07fbed97baaa679fcd0b1276fa7cee2a0c966b733->leave($__internal_0ef8123557f3f03b5d7250f07fbed97baaa679fcd0b1276fa7cee2a0c966b733_prof);

        
        $__internal_5fedb6526ba3c6960288cef8392985ec113b24efd4c2ca5948395e1cd114001b->leave($__internal_5fedb6526ba3c6960288cef8392985ec113b24efd4c2ca5948395e1cd114001b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1317a963c375a9dc28c5ac48bd77d4839d36d2be9ca4bfd35927d85cb9b67e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1317a963c375a9dc28c5ac48bd77d4839d36d2be9ca4bfd35927d85cb9b67e9->enter($__internal_f1317a963c375a9dc28c5ac48bd77d4839d36d2be9ca4bfd35927d85cb9b67e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ca292a7d79aa9425c6d7f8fd6afd80132a6c803bdc24a941a9004d4b75d0e25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca292a7d79aa9425c6d7f8fd6afd80132a6c803bdc24a941a9004d4b75d0e25e->enter($__internal_ca292a7d79aa9425c6d7f8fd6afd80132a6c803bdc24a941a9004d4b75d0e25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ca292a7d79aa9425c6d7f8fd6afd80132a6c803bdc24a941a9004d4b75d0e25e->leave($__internal_ca292a7d79aa9425c6d7f8fd6afd80132a6c803bdc24a941a9004d4b75d0e25e_prof);

        
        $__internal_f1317a963c375a9dc28c5ac48bd77d4839d36d2be9ca4bfd35927d85cb9b67e9->leave($__internal_f1317a963c375a9dc28c5ac48bd77d4839d36d2be9ca4bfd35927d85cb9b67e9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_64c2399c4b237cf502da65fabc243071e2c2eaebfc73175e96bb9a3ed14e2c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c2399c4b237cf502da65fabc243071e2c2eaebfc73175e96bb9a3ed14e2c6c->enter($__internal_64c2399c4b237cf502da65fabc243071e2c2eaebfc73175e96bb9a3ed14e2c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ef49b9dccbc8da86fe945508ddcde7fdbd11cad6117e2bc82832d4f9083f362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef49b9dccbc8da86fe945508ddcde7fdbd11cad6117e2bc82832d4f9083f362->enter($__internal_4ef49b9dccbc8da86fe945508ddcde7fdbd11cad6117e2bc82832d4f9083f362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4ef49b9dccbc8da86fe945508ddcde7fdbd11cad6117e2bc82832d4f9083f362->leave($__internal_4ef49b9dccbc8da86fe945508ddcde7fdbd11cad6117e2bc82832d4f9083f362_prof);

        
        $__internal_64c2399c4b237cf502da65fabc243071e2c2eaebfc73175e96bb9a3ed14e2c6c->leave($__internal_64c2399c4b237cf502da65fabc243071e2c2eaebfc73175e96bb9a3ed14e2c6c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4054a9479073582e72f0c54110fddd5f27c6372bcb2083f078b4a8427b5fa92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4054a9479073582e72f0c54110fddd5f27c6372bcb2083f078b4a8427b5fa92->enter($__internal_d4054a9479073582e72f0c54110fddd5f27c6372bcb2083f078b4a8427b5fa92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_827cf71ce25b61c1c11a146ac77547141bbaf59b179bebe4103eb924b3cab99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827cf71ce25b61c1c11a146ac77547141bbaf59b179bebe4103eb924b3cab99d->enter($__internal_827cf71ce25b61c1c11a146ac77547141bbaf59b179bebe4103eb924b3cab99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_827cf71ce25b61c1c11a146ac77547141bbaf59b179bebe4103eb924b3cab99d->leave($__internal_827cf71ce25b61c1c11a146ac77547141bbaf59b179bebe4103eb924b3cab99d_prof);

        
        $__internal_d4054a9479073582e72f0c54110fddd5f27c6372bcb2083f078b4a8427b5fa92->leave($__internal_d4054a9479073582e72f0c54110fddd5f27c6372bcb2083f078b4a8427b5fa92_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\comptabli\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
