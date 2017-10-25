<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5224dc124a34f36cb7f8aef25ae7a10de263a63ebdef7b94cd0906be72987a73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feb016a701fef687b73c024e2974ad666edd336e669602d3bf99462638d333e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb016a701fef687b73c024e2974ad666edd336e669602d3bf99462638d333e2->enter($__internal_feb016a701fef687b73c024e2974ad666edd336e669602d3bf99462638d333e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7ba91197dfe5ba258f0fcc5aef5bb71fb0cefee1116f113925de9d33a7628d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba91197dfe5ba258f0fcc5aef5bb71fb0cefee1116f113925de9d33a7628d64->enter($__internal_7ba91197dfe5ba258f0fcc5aef5bb71fb0cefee1116f113925de9d33a7628d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_feb016a701fef687b73c024e2974ad666edd336e669602d3bf99462638d333e2->leave($__internal_feb016a701fef687b73c024e2974ad666edd336e669602d3bf99462638d333e2_prof);

        
        $__internal_7ba91197dfe5ba258f0fcc5aef5bb71fb0cefee1116f113925de9d33a7628d64->leave($__internal_7ba91197dfe5ba258f0fcc5aef5bb71fb0cefee1116f113925de9d33a7628d64_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_39b28bd0e7e653078890bbada0ede4482ebd1896ede12fb86b96785c83f2f41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b28bd0e7e653078890bbada0ede4482ebd1896ede12fb86b96785c83f2f41f->enter($__internal_39b28bd0e7e653078890bbada0ede4482ebd1896ede12fb86b96785c83f2f41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46d4bd10935362418edd3f25cdf97026cd354b0368d13cecf0c2cb9b437737dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d4bd10935362418edd3f25cdf97026cd354b0368d13cecf0c2cb9b437737dc->enter($__internal_46d4bd10935362418edd3f25cdf97026cd354b0368d13cecf0c2cb9b437737dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_46d4bd10935362418edd3f25cdf97026cd354b0368d13cecf0c2cb9b437737dc->leave($__internal_46d4bd10935362418edd3f25cdf97026cd354b0368d13cecf0c2cb9b437737dc_prof);

        
        $__internal_39b28bd0e7e653078890bbada0ede4482ebd1896ede12fb86b96785c83f2f41f->leave($__internal_39b28bd0e7e653078890bbada0ede4482ebd1896ede12fb86b96785c83f2f41f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a08f4a66a8ddd7b38852df713c43781eea047b20a948d8b892eb3ce6d2861da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a08f4a66a8ddd7b38852df713c43781eea047b20a948d8b892eb3ce6d2861da->enter($__internal_2a08f4a66a8ddd7b38852df713c43781eea047b20a948d8b892eb3ce6d2861da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd1f057a78695b7ecc509001fae02c9b36467c157310a361d7bdc6128b350303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1f057a78695b7ecc509001fae02c9b36467c157310a361d7bdc6128b350303->enter($__internal_fd1f057a78695b7ecc509001fae02c9b36467c157310a361d7bdc6128b350303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fd1f057a78695b7ecc509001fae02c9b36467c157310a361d7bdc6128b350303->leave($__internal_fd1f057a78695b7ecc509001fae02c9b36467c157310a361d7bdc6128b350303_prof);

        
        $__internal_2a08f4a66a8ddd7b38852df713c43781eea047b20a948d8b892eb3ce6d2861da->leave($__internal_2a08f4a66a8ddd7b38852df713c43781eea047b20a948d8b892eb3ce6d2861da_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed43e64fc7699d00fd4faa626e4412790305886636a3412621da3afcddf668df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed43e64fc7699d00fd4faa626e4412790305886636a3412621da3afcddf668df->enter($__internal_ed43e64fc7699d00fd4faa626e4412790305886636a3412621da3afcddf668df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad69823e5a4b00a0005cee7d8f7f6af071e7c3e9e1f8ee88e70a842101571df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad69823e5a4b00a0005cee7d8f7f6af071e7c3e9e1f8ee88e70a842101571df4->enter($__internal_ad69823e5a4b00a0005cee7d8f7f6af071e7c3e9e1f8ee88e70a842101571df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad69823e5a4b00a0005cee7d8f7f6af071e7c3e9e1f8ee88e70a842101571df4->leave($__internal_ad69823e5a4b00a0005cee7d8f7f6af071e7c3e9e1f8ee88e70a842101571df4_prof);

        
        $__internal_ed43e64fc7699d00fd4faa626e4412790305886636a3412621da3afcddf668df->leave($__internal_ed43e64fc7699d00fd4faa626e4412790305886636a3412621da3afcddf668df_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp\\www\\comptabli\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
