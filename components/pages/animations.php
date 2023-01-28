<h1>Animations</h1>

<div class="transformation-container">

    <div class="row">
        <div class="column-left scroll bob-text">
            <p>
            <div class="line">
                Les <strong>animations</strong> CSS3 permettent de donner vie aux elements d'un
                site web en leur donnant un mouvement fluide et reactif.
            </div>
            <div class="line">
                Les animations peuvent etre creees a l'aide de proprietes CSS telles
                que <strong>transition</strong> et <strong>transform</strong>, et peuvent etre declenchees par des
                evenements tels que le hover ou le clic.
            </div>
            <div class="line">
                Les <strong>keyframes</strong> permettent de definir les differentes etapes d'une animation
                en specifiant les proprietes CSS a differents moments de l'animation.
            </div>
            <div class="line">
                Cela permet de creer des animations plus complexes et fluides, en permettant de changer
                plusieurs proprietes de l'element au cours de l'animation.
            </div>
            <div class="line vertical-top-ident">
                Voila un exemple de code CSS3:
            </div>

            <div class="code-section ident vertical-top-ident">
                <code>
                    <div class="line">
                        <span class="selector">#patrick > .fly</span> <span class="curly-brace">{</span>
                    </div>
                    <div class="line ident">
                        <span class="property">animation</span>: fly_circle <span class="value-number">5s</span> <span class="value-text">linear infinite</span>;
                    </div>
                    <div class="line">
                        <span class="curly-brace">}</span>
                    </div>
                    <div class="line vertical-top-ident">
                        <span class="special">@keyframes</span> <span class="property">fly_circle</span> <span class="curly-brace">{</span>
                    </div>
                    <div class="ident">
                        <div class="line">
                            from <span class="special">{</span>
                        </div>
                        <div class="ident">
                            <div class="line">
                                <span class="property">transform</span>: <span class="function">rotate</span><span class="parenthesis">(</span><span class="value-number">0deg</span><span class="parenthesis">)</span> <span class="function">translateX</span><span class="parenthesis">(</span><span class="value-number">100px</span><span class="parenthesis">)</span> <span class="function">rotate</span><span class="parenthesis">(</span><span class="value-number">0deg</span><span class="parenthesis">)</span>;
                            </div>
                        </div>
                        <div class="line">
                            <span class="special">}</span>
                        </div>
                    </div>
                    <div class="ident">
                        <div class="line">
                            to <span class="special">{</span>
                        </div>
                        <div class="ident">
                            <div class="line">
                            <span class="property">transform</span>: <span class="function">rotate</span><span class="parenthesis">(</span><span class="value-number">360deg</span><span class="parenthesis">)</span> <span class="function">translateX</span><span class="parenthesis">(</span><span class="value-number">100px</span><span class="parenthesis">)</span> <span class="function">rotate</span><span class="parenthesis">(</span><span class="value-number">-360deg</span><span class="parenthesis">)</span>;
                            </div>
                        </div>
                        <div class="line">
                            <span class="special">}</span>
                        </div>
                    </div>
                    <div class="line">
                        <span class="curly-brace">}</span>
                    </div>

                </code>
            </div>
            </p>
        </div>
        <div class="column-right example-area">
            <div id="button-container">
                <p>Cliquez sur le bouton pour activer l'animation.</p>
                <div id="dance" onclick="toggleDance()"></div>
            </div>
        </div>
    </div>