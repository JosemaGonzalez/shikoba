<?php

/* convivencia/alumno/alumno.html.twig */
class __TwigTemplate_575515737421311645af8b9073a205d99451e9d025606893edafb16e91d07e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "convivencia/alumno/alumno.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <script>(function (e, t, n) {
            var r = e.querySelectorAll(\"html\")[0];
            r.className = r.className.replace(/(^|\\s)no-js(\\s|\$)/, \"\$1js\$2\")
        })(document, window, 0);</script>
    <main class=\"w3-container w3-margin-top\">
        ";
        // line 11
        echo "        <div class=\"row w3-center\">
            <h2 class=\"w3-center w3-padding w3-margin\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "alumno", array()), "getNombreCompleto", array(), "method"), "html", null, true);
        echo "</h2>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "alumno"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "                <div class=\"w3-panel w3-pale-green w3-round-large\">
                    <p class=\"w3-center\">";
            // line 15
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "alumnoError"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 20
            echo "                <div class=\"w3-panel w3-pale-red w3-round-large\">
                    <p class=\"w3-center\">";
            // line 21
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            <div class=\"w3-col l6 marginTopNoMobile\">
                <header class=\"w3-container marginTopNoMobile\">
                    ";
        // line 27
        echo "                    ";
        // line 28
        echo "                    ";
        if ((($this->getAttribute($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "alumno", array()), "foto", array()) == "") || ($this->getAttribute($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "alumno", array()), "foto", array()) == null))) {
            // line 29
            echo "                        <img class=\"w3-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("img/alumnos/" . $this->getAttribute($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "alumno", array()), "nie", array())) . ".PNG")), "html", null, true);
            echo "\"
                             style=\"width: 300px\"
                             alt=\"avatar\">
                    ";
        } else {
            // line 33
            echo "                        <img class=\"w3-circle\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/alumnos/" . $this->getAttribute($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "alumno", array()), "foto", array()))), "html", null, true);
            echo "\"
                             style=\"width: 300px\"
                             alt=\"avatar\">
                    ";
        }
        // line 37
        echo "                    <h4 class=\"w3-center\">Puntos: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "alumno", array()), "puntos", array()), "html", null, true);
        echo "/10 </h4>
                </header>
                <div class=\"w3-container w3-center\">
                    ";
        // line 41
        echo "                    ";
        // line 42
        echo "                    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "alumno", array()), "idUsuario", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
            // line 43
            echo "                        <form method=\"post\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("change_image");
            echo "\" enctype=\"multipart/form-data\">
                            <div class=\"content\">
                                <div class=\"box\">
                                    <input type=\"file\" accept=\"image/*\" name=\"file\" id=\"file\"
                                           class=\"inputfile inputfile-1\" capture=\"camera\">
                                    <label for=\"file\"><i class=\"fa fa-upload fa-1x\"
                                                           style=\"color: white; font-size: 1.5em;\"> </i><span> Subir Imagen (2MB)</span></label>
                                </div>
                            </div>
                        </form>
                    ";
        }
        // line 54
        echo "                </div>
            </div>
            <div class=\"w3-col l6\">
                <div class=\"w3-row w3-center w3-text-center widthChartMobile\">
                    <div class=\"w3-content marginBottom marginTopNoMobile\">
                        <h4>Estadísticas Totales ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "getYear", array(), "method"), "html", null, true);
        echo "</h4>
                        <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row w3-margin w3-padding\">
            <div class=\"w3-col l6 marginBottom\">
                <h4 class=\"w3-padding\">Partes ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "getYear", array(), "method"), "html", null, true);
        echo "</h4>
                <canvas id=\"myChart2\"></canvas>
            </div>
            <div class=\"w3-col l6 marginBottom\">
                <h4 class=\"w3-padding\">Sanciones ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "getYear", array(), "method"), "html", null, true);
        echo "</h4>
                <canvas id=\"myChart3\"></canvas>
            </div>
        </div>
        ";
        // line 75
        $context["arrMeses"] = array();
        // line 76
        echo "        ";
        $context["arrPartes"] = array();
        // line 77
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "numPartesMeses", array()));
        foreach ($context['_seq'] as $context["mes"] => $context["partesMes"]) {
            // line 78
            echo "            ";
            $context["arrMeses"] = twig_array_merge((isset($context["arrMeses"]) ? $context["arrMeses"] : null), array(0 => $context["mes"]));
            // line 79
            echo "            ";
            $context["arrPartes"] = twig_array_merge((isset($context["arrPartes"]) ? $context["arrPartes"] : null), array(0 => $context["partesMes"]));
            // line 80
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['mes'], $context['partesMes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        ";
        $context["arrMesesSanciones"] = array();
        // line 82
        echo "        ";
        $context["arrSanciones"] = array();
        // line 83
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "numSancionesMeses", array()));
        foreach ($context['_seq'] as $context["mes"] => $context["sancionesMes"]) {
            // line 84
            echo "            ";
            $context["arrMesesSanciones"] = twig_array_merge((isset($context["arrMesesSanciones"]) ? $context["arrMesesSanciones"] : null), array(0 => $context["mes"]));
            // line 85
            echo "            ";
            $context["arrSanciones"] = twig_array_merge((isset($context["arrSanciones"]) ? $context["arrSanciones"] : null), array(0 => $context["sancionesMes"]));
            // line 86
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['mes'], $context['sancionesMes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["arrMeses"]) ? $context["arrMeses"] : null)) > 4)) {
            // line 88
            echo "            ";
            $context["barPercentage"] = 0.4;
            // line 89
            echo "        ";
        } else {
            // line 90
            echo "            ";
            $context["barPercentage"] = 0.2;
            // line 91
            echo "        ";
        }
        // line 92
        echo "        <script>
            var ctx = document.getElementById(\"myChart\").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "numPartes", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "numSanciones", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "numVisitasConvivencia", array()), "html", null, true);
        echo "],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(56, 136, 155, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(255, 206, 86, 0.5)'
                        ],
                    }],


                    labels: [
                        'Partes',
                        'Sanciones',
                        'Visitas Aula Convivencia'
                    ]
                }
            });

            ctx = document.getElementById(\"myChart2\").getContext('2d');
            var myChart2 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ";
        // line 123
        echo twig_jsonencode_filter((isset($context["arrMeses"]) ? $context["arrMeses"] : null));
        echo ",
                    datasets: [
                        {
                            label: 'Partes',
                            data: ";
        // line 127
        echo twig_jsonencode_filter((isset($context["arrPartes"]) ? $context["arrPartes"] : null));
        echo ",
                            backgroundColor: 'rgba(56, 136, 155, 0.5)',
//                         backgroundColor: [
//                            'rgba(56, 136, 155, 0.5)',
//                            'rgba(255, 206, 86, 0.5)',
//                            'rgba(75, 192, 192, 0.5)',
//                            'rgba(153, 102, 255, 0.5)',
//                            'rgba(54, 162, 235, 0.5)',
//                            'rgba(255, 159, 64, 0.5)'
//                    ],
                        },
                        ";
        // line 139
        echo "                        ";
        // line 140
        echo "                        ";
        // line 141
        echo "                        ";
        // line 142
        echo "                        ";
        // line 143
        echo "                    ],
                },
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: ";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["barPercentage"]) ? $context["barPercentage"] : null), "html", null, true);
        echo "
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                    }
                }
            });

            ctx = document.getElementById(\"myChart3\").getContext('2d');
            var myChart3 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ";
        // line 163
        echo twig_jsonencode_filter((isset($context["arrMesesSanciones"]) ? $context["arrMesesSanciones"] : null));
        echo ",
                    datasets: [
                        {
                            label: 'Sanciones',
                            data: ";
        // line 167
        echo twig_jsonencode_filter((isset($context["arrSanciones"]) ? $context["arrSanciones"] : null));
        echo ",
                            backgroundColor: 'rgba(153, 102, 255, 0.5)',
                        },
                    ],
                },
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: ";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["barPercentage"]) ? $context["barPercentage"] : null), "html", null, true);
        echo "
                        }],
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            },
                        }],
                    }
                }
            });

        </script>

        <div class=\"w3-row w3-padding\">
            <div class=\"w3-col contenedorCartaAlumno marginBottom\">
                <div class=\"w3-card-2 cartaAlumno marginBottom marginTop\">
                    <header class=\"w3-container w3-center\">
                        <h2>Historico Partes</h2>
                    </header>
                    <div class=\"w3-container\">
                        ";
        // line 195
        $context["contadorPartes"] = 0;
        // line 196
        echo "                        ";
        $context["break"] = false;
        // line 197
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "partes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parte"]) {
            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                // line 198
                echo "                            ";
                $context["contadorPartes"] = ((isset($context["contadorPartes"]) ? $context["contadorPartes"] : null) + 1);
                // line 199
                echo "                            <p>El ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["parte"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo " tuvo una falta ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idTipo", array()), "tipo", array()), "html", null, true);
                echo "
                                , ";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["parte"], "idProfesor", array()), "getNombreCompleto", array(), "method"), "html", null, true);
                echo " indicó: <br/>
                                ";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["parte"], "descripcion", array()), "html", null, true);
                echo "</p>
                            ";
                // line 202
                if (((isset($context["contadorPartes"]) ? $context["contadorPartes"] : null) > 9)) {
                    // line 203
                    echo "                                <div class=\"w3-footer w3-center\">
                                    <p>...</p>
                                    <a href=\"";
                    // line 205
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_partesAlumno", array("id" => $this->getAttribute($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "alumno", array()), "id", array()))), "html", null, true);
                    echo "\"
                                       class=\"w3-button w3-margin\">Mostrar Todos</a>
                                </div>
                                ";
                    // line 208
                    $context["break"] = true;
                    // line 209
                    echo "                            ";
                }
                // line 210
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                    </div>
                </div>
                <div class=\"w3-card-2 cartaAlumno marginTop\">
                    <header class=\"w3-container w3-center\">
                        <h2>Historico Sanciones</h2>
                    </header>
                    <div class=\"w3-container\">
                        ";
        // line 218
        $context["contadorSanciones"] = 0;
        // line 219
        echo "                        ";
        $context["break"] = false;
        // line 220
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["alumnoData"]) ? $context["alumnoData"] : null), "sanciones", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["sancion"]) {
            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                // line 221
                echo "                            ";
                $context["contadorSanciones"] = ((isset($context["contadorSanciones"]) ? $context["contadorSanciones"] : null) + 1);
                // line 222
                echo "                            <p>El ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sancion"], "fecha", array()), "d/m/Y"), "html", null, true);
                echo " tuvo una sanción de
                                tipo ";
                // line 223
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sancion"], "idTipo", array()), "tipo", array()), "html", null, true);
                echo "</p>
                            ";
                // line 224
                if (((isset($context["contadorSanciones"]) ? $context["contadorSanciones"] : null) > 9)) {
                    // line 225
                    echo "                                <div class=\"w3-footer w3-center\">
                                    <p>...</p>
                                    <a href=\"\" class=\"w3-button w3-margin\">Mostrar Todas</a>
                                </div>
                            ";
                }
                // line 230
                echo "                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sancion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo "                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </main>

    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fileInput/custom-file-input.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "convivencia/alumno/alumno.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 240,  461 => 231,  454 => 230,  447 => 225,  445 => 224,  441 => 223,  436 => 222,  433 => 221,  427 => 220,  424 => 219,  422 => 218,  413 => 211,  406 => 210,  403 => 209,  401 => 208,  395 => 205,  391 => 203,  389 => 202,  385 => 201,  381 => 200,  374 => 199,  371 => 198,  365 => 197,  362 => 196,  360 => 195,  337 => 175,  326 => 167,  319 => 163,  301 => 148,  294 => 143,  292 => 142,  290 => 141,  288 => 140,  286 => 139,  272 => 127,  265 => 123,  233 => 98,  225 => 92,  222 => 91,  219 => 90,  216 => 89,  213 => 88,  210 => 87,  204 => 86,  201 => 85,  198 => 84,  193 => 83,  190 => 82,  187 => 81,  181 => 80,  178 => 79,  175 => 78,  170 => 77,  167 => 76,  165 => 75,  158 => 71,  151 => 67,  140 => 59,  133 => 54,  118 => 43,  115 => 42,  113 => 41,  106 => 37,  98 => 33,  90 => 29,  87 => 28,  85 => 27,  81 => 24,  72 => 21,  69 => 20,  65 => 19,  62 => 18,  53 => 15,  50 => 14,  46 => 13,  42 => 12,  39 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "convivencia/alumno/alumno.html.twig", "/var/www/html/shikoba/app/Resources/views/convivencia/alumno/alumno.html.twig");
    }
}
