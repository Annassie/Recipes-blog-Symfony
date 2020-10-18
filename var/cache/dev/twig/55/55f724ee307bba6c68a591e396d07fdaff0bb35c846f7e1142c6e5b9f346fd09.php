<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/index.html.twig */
class __TwigTemplate_9526b4488e305db9f13280d446f20a8673a2d9fadb6c29838dfb8e98ad0ed80f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        // line 21
        echo "

";
        // line 37
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
    <title>Recipes</title>
</head>
<body>

";
        // line 48
        $this->loadTemplate("header.html.twig", "main/index.html.twig", 48)->display($context);
        // line 49
        echo "
<div class=\"container mt-5\">
    <h3 class=\"mb-5\">Posts</h3>


";
        // line 72
        echo "
    </div>
</div>

";
        // line 76
        $this->loadTemplate("footer.html.twig", "main/index.html.twig", 76)->display($context);
        // line 77
        echo "

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 77,  75 => 76,  69 => 72,  62 => 49,  60 => 48,  47 => 37,  43 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Hello MainController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ '/Applications/MAMP/htdocs/recipes_symfony/src/Controller/MainController.php'|file_link(0) }}\">src/Controller/MainController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ '/Applications/MAMP/htdocs/recipes_symfony/templates/main/index.html.twig'|file_link(0) }}\">templates/main/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %} #}


{#
{% extends 'base.html.twig' %}

{% block body %}

{% for page in pages %}
    <div>
        <h3>{{ page.title }}</h3>
        <p>{{ page.content }}</p>
    </div>

{% endfor %}

{% endblock %} #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
    <title>Recipes</title>
</head>
<body>

{% include 'header.html.twig' %}

<div class=\"container mt-5\">
    <h3 class=\"mb-5\">Posts</h3>


{#    {% for post in posts %}
    <div class=\"d-flex flex-wrap\">
        <div class=\"card mb-4 shadow-sm\">
            <div class=\"card-header\">
                <h2 class=\"my-0 font-weight-normal\">Title of Post</h2>
                <h4>{{ user.username }}</h4>
            </div>
            <div class=\"card-body\">
                <img src=\"\" class=\"img-thumbnail\">
                <ul class=\"list-unstyled mt-3 mb-4\">
                    <div>{{ post.title }}</div>
                    <div>{{ post.content }}</div>
                    <form>dfsfg</form>
                </ul>
                <button type=\"button\" class=\"btn btn-lg btn-block btn-outline-primary\">Details</button>
            </div>
        </div>
        {% endfor %}#}

    </div>
</div>

{% include 'footer.html.twig' %}


</body>
</html>", "main/index.html.twig", "/Applications/MAMP/htdocs/recipes_symfony/templates/main/index.html.twig");
    }
}
