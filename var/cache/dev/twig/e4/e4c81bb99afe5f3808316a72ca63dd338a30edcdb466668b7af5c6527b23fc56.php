<?php

/* AppBundle:ValencePM:test.html.twig */
class __TwigTemplate_e39fc8a5357d8799aedfd01fd0f317505c6b6bf04f410cbaf13717fb92c9332a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b1bd86b6cff36249fd2e232b843a0c8802155d997bd61c380350cb355aac90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1bd86b6cff36249fd2e232b843a0c8802155d997bd61c380350cb355aac90f->enter($__internal_0b1bd86b6cff36249fd2e232b843a0c8802155d997bd61c380350cb355aac90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ValencePM:test.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html xmlns:ng=\"http://angularjs.org\" ng-app=\"valencepm\" id=\"ng-app\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\"/>
        <meta charset=\"UTF-8\" />
        <title>
            ValencePM Test
        </title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </head>
    <body>
        <div class=\"pageContainer\" ng-controller=\"testController\">
            <div class=\"contentContainer\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Sorted Data</div>
                    <div class=\"panel-body\">
                        <p>The data in this table has been sorted by Unit #.</p>
                        <div>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label ng-class=\"{active: sortClass == 'unit'}\" class=\"btn btn-primary\" ng-click=\"sortData('unit')\">
                                    <input type=\"checkbox\" checked autocomplete=\"off\"> Sort By Unit
                                </label>
                                <label ng-class=\"{active: sortClass != 'unit'}\" class=\"btn btn-primary\" ng-click=\"sortData('tenant')\">
                                    <input type=\"checkbox\" autocomplete=\"off\"> Sort By Tenant
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Unit #</th>
                                <th>Tenant Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat=\"unit in data\">
                                <th scope=\"row\">{[{ unit.unit }]}</th>
                                <td>{[{ unit.tenant }]}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">Original Data, Unsorted</div>
                    <div class=\"panel-body\">
                        <p>This is the original data retreived from input.txt, unsorted.</p>
                    </div>

                    <!-- Table -->
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Unit #</th>
                            <th>Tenant Name</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat=\"unit in originalData\">
                                <th scope=\"row\">{[{ unit.unit }]}</th>
                                <td>{[{ unit.tenant }]}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>";
        
        $__internal_0b1bd86b6cff36249fd2e232b843a0c8802155d997bd61c380350cb355aac90f->leave($__internal_0b1bd86b6cff36249fd2e232b843a0c8802155d997bd61c380350cb355aac90f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b950b30f8b949b0d20310e9c96c953fae74771cc55dc18da4f38085b8a03c8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b950b30f8b949b0d20310e9c96c953fae74771cc55dc18da4f38085b8a03c8fe->enter($__internal_b950b30f8b949b0d20310e9c96c953fae74771cc55dc18da4f38085b8a03c8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\" />
            <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "23c1caf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_23c1caf_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/23c1caf_valencepm_1.css");
            // line 17
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "23c1caf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_23c1caf") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/23c1caf.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "        ";
        
        $__internal_b950b30f8b949b0d20310e9c96c953fae74771cc55dc18da4f38085b8a03c8fe->leave($__internal_b950b30f8b949b0d20310e9c96c953fae74771cc55dc18da4f38085b8a03c8fe_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16bc8e4310cfce36b729074d4eb70eab45c527861daa8b5d3e9a25541aff219b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bc8e4310cfce36b729074d4eb70eab45c527861daa8b5d3e9a25541aff219b->enter($__internal_16bc8e4310cfce36b729074d4eb70eab45c527861daa8b5d3e9a25541aff219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "<script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.3.0/angular.min.js\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e2e380f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e2e380f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e2e380f_valencepm_1.js");
            // line 29
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            <script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

            ";
            // asset "e2e380f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e2e380f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e2e380f_naturalSortModule_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            <script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

            ";
        } else {
            // asset "e2e380f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e2e380f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e2e380f.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            <script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

            ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "        ";
        
        $__internal_16bc8e4310cfce36b729074d4eb70eab45c527861daa8b5d3e9a25541aff219b->leave($__internal_16bc8e4310cfce36b729074d4eb70eab45c527861daa8b5d3e9a25541aff219b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ValencePM:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 34,  169 => 29,  165 => 25,  161 => 24,  157 => 23,  154 => 22,  148 => 21,  141 => 19,  127 => 17,  123 => 13,  119 => 11,  113 => 10,  45 => 35,  43 => 21,  40 => 20,  38 => 10,  27 => 2,  24 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE HTML>
<html xmlns:ng=\"http://angularjs.org\" ng-app=\"valencepm\" id=\"ng-app\" lang=\"{{ app.request.locale }}\">
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\"/>
        <meta charset=\"UTF-8\" />
        <title>
            ValencePM Test
        </title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\" />
            <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\">
            {% stylesheets
                '@AppBundle/Resources/public/css/valencepm.css'
                filter='cssrewrite'
            %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
            {% endstylesheets %}
        {% endblock %}

        {% block javascripts -%}
            <script type=\"text/javascript\" src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.3.0/angular.min.js\"></script>
            <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
            <script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
            {% javascripts
                '@AppBundle/Resources/public/js/valencepm.js'
                '@AppBundle/Resources/public/js/naturalSortModule.js'
            %}
            <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
            <script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

            {% endjavascripts %}
        {% endblock %}
    </head>
    <body>
        <div class=\"pageContainer\" ng-controller=\"testController\">
            <div class=\"contentContainer\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">Sorted Data</div>
                    <div class=\"panel-body\">
                        <p>The data in this table has been sorted by Unit #.</p>
                        <div>
                            <div class=\"btn-group\" data-toggle=\"buttons\">
                                <label ng-class=\"{active: sortClass == 'unit'}\" class=\"btn btn-primary\" ng-click=\"sortData('unit')\">
                                    <input type=\"checkbox\" checked autocomplete=\"off\"> Sort By Unit
                                </label>
                                <label ng-class=\"{active: sortClass != 'unit'}\" class=\"btn btn-primary\" ng-click=\"sortData('tenant')\">
                                    <input type=\"checkbox\" autocomplete=\"off\"> Sort By Tenant
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Unit #</th>
                                <th>Tenant Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat=\"unit in data\">
                                <th scope=\"row\">{[{ unit.unit }]}</th>
                                <td>{[{ unit.tenant }]}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">Original Data, Unsorted</div>
                    <div class=\"panel-body\">
                        <p>This is the original data retreived from input.txt, unsorted.</p>
                    </div>

                    <!-- Table -->
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Unit #</th>
                            <th>Tenant Name</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat=\"unit in originalData\">
                                <th scope=\"row\">{[{ unit.unit }]}</th>
                                <td>{[{ unit.tenant }]}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>";
    }
}
