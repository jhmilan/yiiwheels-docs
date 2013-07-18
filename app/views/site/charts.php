<?php
/* @var SiteController $this */
/* @var TestForm $model */

$this->pageTitle = 'Widgets - ' . param('pageTitle');
?>
    <!-- Subhead
    ================================================== -->
    <header class="jumbotron subhead">
        <div class="container">
            <h1>Widgets</h1>

            <p class="lead">Charts</p>
        </div>
    </header>

<div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row-fluid">
        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#highcharts"><i class="icon-chevron-right"></i> HighCharts</a></li>
                <li><a href="#sparklines"><i class="icon-chevron-right"></i> Sparklines</a></li>
                <li><a href="#visualizationchart"><i class="icon-chevron-right"></i> VisualizationChart</a></li>
            </ul>
        </div>
        <div class="span9">

            <!-- HighCharts
            ================================================== -->
            <section id="highcharts">

                <div class="page-header">
                    <h1>HighCharts
                        <small>WhHighCharts.php</small>
                    </h1>
                </div>

                <p>
                    <span class="label label-important">Important</span> Highcharts is one of the best HTML5/Javascritp
                    charting
                    libraries on the web. Highcharts JS is free for a
                    non-commercial project but not if you are developing a product that you are going to make money
                    with.
                </p>

                <p>
                    Visit <a href="http://www.highcharts.com/" target="_blank">HighCharts</a> site in order to get more
                    information
                    about the different options of this plugin and its <a
                        href="http://shop.highsoft.com/highcharts.html"
                        target="_blank">license pricing</a>.</p>

                <div class="bs-docs-example">
                    <?php
                    $this->widget(
                        'yiiwheels.widgets.highcharts.WhHighCharts',
                        array(
                            'pluginOptions' => array(
                                'title'  => array('text' => 'Fruit Consumption'),
                                'xAxis'  => array(
                                    'categories' => array('Apples', 'Bananas', 'Oranges')
                                ),
                                'yAxis'  => array(
                                    'title' => array('text' => 'Fruit eaten')
                                ),
                                'series' => array(
                                    array('name' => 'Jane', 'data' => array(1, 0, 4)),
                                    array('name' => 'John', 'data' => array(5, 7, 3))
                                )
                            )
                        )
                    );
                    ?>
                </div>

<pre class="prettyprint linenums">
&lt;?php
$this-&gt;widget(
    'yiiwheels.widgets.highcharts.WhHighCharts',
    array(
        'pluginOptions' =&gt; array(
            'title'  =&gt; array('text' =&gt; 'Fruit Consumption'),
            'xAxis'  =&gt; array(
                'categories' =&gt; array('Apples', 'Bananas', 'Oranges')
            ),
            'yAxis'  =&gt; array(
                'title' =&gt; array('text' =&gt; 'Fruit eaten')
            ),
            'series' =&gt; array(
                array('name' =&gt; 'Jane', 'data' =&gt; array(1, 0, 4)),
                array('name' =&gt; 'John', 'data' =&gt; array(5, 7, 3))
            )
        )
    )
);
?&gt;
</pre>
            </section>
            <!-- SparkLines
            ================================================== -->
            <section id="sparklines">

                <div class="page-header">
                    <h1>SparkLines
                        <small>WhSparlines.php</small>
                    </h1>
                </div>

                <p>Todo</p>

                <div class="bs-docs-example">

                </div>

                <pre class="prettyprint linenums"></pre>
            </section>

            <!-- VisualizationChart
            ================================================== -->
            <section id="visualizationchart">

                <div class="page-header">
                    <h1>VisualizationChart
                        <small>WhVisualizationChart.php</small>
                    </h1>
                </div>

                <p>
                    <a href="https://google-developers.appspot.com/chart/interactive/docs/index" target="_blank">
                        Google Charts
                    </a> provides a perfect way to visualize data. Simple, and very effective widget.
                </p>

                <div class="bs-docs-example">
                    <?php
                    $this->widget(
                        'yiiwheels.widgets.google.WhVisualizationChart',
                        array(
                            'visualization' => 'PieChart',
                            'data'          => array(
                                array('Task', 'Hours per Day'),
                                array('Work', 11),
                                array('Eat', 2),
                                array('Commute', 2),
                                array('Watch TV', 2),
                                array('Sleep', 7)
                            ),
                            'options'       => array(
                                'title' => 'My Daily Activity'
                            )
                        )
                    );
                    ?>
                </div>

<pre class="prettyprint linenums">
&lt;?php
$this-&gt;widget('yiiwheels.widgets.google.WhVisualizationChart', array(
   'visualization' =&gt; 'PieChart',
    'data' =&gt; array(
        array('Task', 'Hours per Day'),
        array('Work', 11),
        array('Eat', 2),
        array('Commute', 2),
        array('Watch TV', 2),
        array('Sleep', 7)
    ),
    'options' =&gt; array(
        'title' =&gt; 'My Daily Activity'
    )
));
?&gt;
</pre>
            </section>
        </div>
    </div>

<?php
// fix twitter bootstrap docs bug: https://github.com/twitter/bootstrap/issues/6832
Yii::app()->clientScript->registerScript(
    'javascript#ReadyJS',
    <<<EOD
   $('.tooltip-demo a[rel=tooltip]').tooltip();
EOD
);