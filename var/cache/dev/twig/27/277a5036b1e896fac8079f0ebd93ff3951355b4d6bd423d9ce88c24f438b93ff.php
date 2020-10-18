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

/* base.html.twig */
class __TwigTemplate_b2126c8fbc8e5fb34af4fa2e376e6fc4c09007e15b4a7396aab06045c1c0b239 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'head' => [$this, 'block_head'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>


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
";
        // line 25
        $this->displayBlock('head', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 110
        echo "

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Recipes blog";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 26
        echo "
<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
    <h5 class=\"my-0 mr-md-auto font-weight-normal\">Recipes blog</h5>
    <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"";
        // line 30
        echo "/main";
        echo "\">Main</a>
        <a class=\"p-2 text-dark\" href=\"";
        // line 31
        echo "/add-post";
        echo "\">Add post</a>
        <a class=\"p-2 text-dark\" href=\"";
        // line 32
        echo "/contact";
        echo "\">Contact us</a>
    </nav>

    <a class=\"btn btn-outline-primary\" href=\"";
        // line 35
        echo "/login";
        echo "\">Sign in </a>

    <a class=\"btn btn-outline-primary\" href=\"\"><? echo (\$name)?></a>
    <a class=\"\" href=\"/?action=out\">Sign out</a>

</div>


<div class=\"container mt-5\">
    <h3 class=\"mb-5\">Posts</h3>


";
        // line 65
        echo "
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 71
        echo "<footer class=\"container pt-4 my-md-5 pt-md-5 border-top\">
    <div class=\"row\">
        <div class=\"col-12 col-md\">
            <small class=\"d-block mb-3 text-muted\">© 2017-2020</small>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Features</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
                <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
                <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>About</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
                <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  248 => 71,  238 => 70,  225 => 65,  210 => 35,  204 => 32,  200 => 31,  196 => 30,  190 => 26,  180 => 25,  162 => 10,  144 => 9,  126 => 6,  107 => 5,  93 => 110,  91 => 70,  88 => 69,  86 => 25,  70 => 11,  67 => 10,  65 => 9,  61 => 7,  59 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Recipes blog{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>


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
{% block head %}

<div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
    <h5 class=\"my-0 mr-md-auto font-weight-normal\">Recipes blog</h5>
    <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"{{ \"/main\" }}\">Main</a>
        <a class=\"p-2 text-dark\" href=\"{{ \"/add-post\" }}\">Add post</a>
        <a class=\"p-2 text-dark\" href=\"{{ \"/contact\" }}\">Contact us</a>
    </nav>

    <a class=\"btn btn-outline-primary\" href=\"{{ \"/login\" }}\">Sign in </a>

    <a class=\"btn btn-outline-primary\" href=\"\"><? echo (\$name)?></a>
    <a class=\"\" href=\"/?action=out\">Sign out</a>

</div>


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
{% endblock %}

{% block footer %}
<footer class=\"container pt-4 my-md-5 pt-md-5 border-top\">
    <div class=\"row\">
        <div class=\"col-12 col-md\">
            <small class=\"d-block mb-3 text-muted\">© 2017-2020</small>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Features</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
                <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
                <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
                <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
                <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
                <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
            </ul>
        </div>
        <div class=\"col-6 col-md\">
            <h5>About</h5>
            <ul class=\"list-unstyled text-small\">
                <li><a class=\"text-muted\" href=\"#\">Team</a></li>
                <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
                <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
                <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>


{% endblock %}


</body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/recipes_symfony/templates/base.html.twig");
    }
}
