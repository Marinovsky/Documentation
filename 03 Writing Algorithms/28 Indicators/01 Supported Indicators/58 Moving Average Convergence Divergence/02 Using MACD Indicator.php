<!-- Code generated by indicator_reference_code_generator.py -->
<? 
include(DOCS_RESOURCES."/qcalgorithm-api/_method_container.html");

$hasAutomaticIndicatorHelper = true;
$typeName = 'MovingAverageConvergenceDivergence';
$helperName = 'MACD';
$helperArguments = 'symbol, 12, 26, 9, MovingAverageType.Exponential';
$properties = array("Fast","Slow","Signal","Histogram");
$updateParameterType = 'time/number pair, or an <code>IndicatorDataPoint</code>';
$constructorArguments = '12, 26, 9, MovingAverageType.Exponential';
$updateParameterValue = 'bar.EndTime, bar.Close';
$hasMovingAverageTypeParameter = True;
$constructorBox = 'moving-average-convergence-divergence';
include(DOCS_RESOURCES."/indicators/using-indicator.php");
?>