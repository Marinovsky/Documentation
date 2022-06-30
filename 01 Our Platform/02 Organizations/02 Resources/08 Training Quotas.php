<p>Algorithms normally must return from the <code>OnData</code> method within 10 minutes, but the <code>Train</code> method lets you increase this amount of time. Training resources are allocated with a <a rel="nofollow" target="_blank" href='https://en.wikipedia.org/wiki/Leaky_bucket'>leaky bucket algorithm</a> where you can use a maximum of n-minutes in a single training session and the number of minutes available refills over time. This gives you a reservoir of training time when you need it and recharges the reservoir to prepare for the next training session. The reservoir only starts draining after you exceed the standard 10 minutes of training time.</p>

<p>The following animation demonstrates the leaky bucket algorithm. The tap continuously adds water to the bucket. When the bucket is full, water spills over the rim of the bucket. The water represents your training resources. When your algorithm exceeds the 10 minutes of training time, holes open at the bottom of the bucket and water begins to drain out. When your algorithm stops training, the holes close and the bucket fills up with water.</p>

<img class='docs-image' style='max-height: 250px' src='https://cdn.quantconnect.com/i/tu/leaky-bucket-algo-(1).gif'>

<p>The following table shows the amount of extra time that each backtesting and live trading node can spend training machine learning models:</p>
<?php echo file_get_contents(DOCS_RESOURCES."/quotas/training.html"); ?>
<p>The refill rate in the preceding table is based on the real-world clock time, not the backtest clock time. In backtests, the <code>Train</code> method is synchronous, so it will block your algorithm from executing while the model is trained. In live trading, the method runs asynchronously, so ensure your model is ready to use before you continue executing the algorithm. Training occurs on a separate thread, so use a boolean flag to notify your algorithm of the model state.</p>
