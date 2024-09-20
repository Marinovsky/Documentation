<p>
    Runs a local Jupyter Lab environment in a Docker container using the <a href="https://hub.docker.com/r/quantconnect/research" target="_blank" rel='nofollow'>quantconnect/research</a> Docker image.
    The project directory is mounted in the Docker container and the Jupyter Lab instance is exposed on a local port.
    After the Jupyter Lab instance has started, the browser automatically opens.
</p>

<p>
    By default, Jupyter Lab is exposed on port 8888.
    To use a custom port, you can use the <code>--port</code> option, which is required to run two Jupyter Lab instances side-by-side.
</p>

<? 
$isResearch = true;
include(DOCS_RESOURCES."/cli/backtest-data-provider.php"); 
?>

<p>You can use the <code>--download-data</code> flag as an alias for <code>--data-provider-historical QuantConnect</code> and the <code>--data-purchase-limit</code> option to set the maximum amount of <a href='https://www.quantconnect.com/docs/v2/cloud-platform/organizations/credit'>QuantConnect Credit</a> (QCC) to spend during the research session when using QuantConnect as data provider.
    The <code>--data-purchase-limit</code> option is not persistent.
</p>

<p>
    If you have previously logged in using <code>lean login</code>, the CLI automatically makes your credentials available in the Jupyter Lab instance.
    If this happens, the <code>api</code> variable is automatically assigned an instance of <a href="https://github.com/QuantConnect/Lean/blob/master/Api/Api.cs" target="_blank" rel='nofollow'>Api</a> in your research notebooks, which you can use to make authenticated requests to the QuantConnect API.
</p>

<p>
    The default Research Environment configuration is the latest master branch of LEAN. If you <a href='https://www.quantconnect.com/docs/v2/lean-cli/projects/custom-docker-images#02-Using-Custom-Images'>set a different research image</a>, the image you set is your current configuration. To start the Research Environment with a different configuration than your current configuration, use the <code>--image &lt;value&gt;</code> option. If the image doesn't exist on your local machine or you pass the <code>--update</code> flag, the image is pulled before starting the Research Environment. To avoid updating the image, pass the <code>--no-update</code> flag.
</p>