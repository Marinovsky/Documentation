<p>To create a subscription for the custom type, in the <code>Initialize</code> method, call the <code>AddData</code> method. The <code>AddData</code> method returns a <code>Security</code> object, which contains a <code>Symbol</code>. Save a reference to the <code>Symbol</code> so you can use it in <code>OnData</code> to access the security data in the <code>Slice</code>.</p>

<div class="section-example-container">
    <pre class="csharp">public class MyAlgorithm : QCAlgorithm
    {
        private Symbol _symbol;
        public override void Initialize()
        {
            _symbol = AddData&lt;Nifty&gt;("NIFTY", Resolution.Daily).Symbol;
        }
    }</pre>
    <pre class="python">class MyAlgorithm(QCAlgorithm): 
        def Initialize(self) -&gt; None:
            self.symbol = self.AddData(Nifty, "NIFTY", Resolution.Daily).Symbol
    </pre>
</div>

<p>The <code>AddData</code> method creates a subscription for a single custom data asset and adds it to your <span class="new-term">user-defined</span> universe.</p>
