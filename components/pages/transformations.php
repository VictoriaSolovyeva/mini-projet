<h1>Transformations</h1>

<div class="transformation-container">

    <div class="row">
        <div class="column-left scroll bob-text">
            <p>
            <div class="line">
                Les <strong>transformations</strong> CSS3 permettent de modifier la forme, la taille et la position
                d'un element HTML en utilisant des proprietes telles que <i>transform</i>, <i>translate</i>, <i>scale</i> et <i>rotate</i>.
            </div>
            <div class="line">
                Ces proprietes peuvent etre utilisees pour creer des effets de deplacement, de rotation, de zoom et de distorsion sur les elements de la page web.
            </div>
            <div class="line">
                Les transformations peuvent egalement etre animees en utilisant des <strong>transitions</strong> et des <strong>animations</strong> pour creer des effets de mouvement fluides dont vous pouvez d'ailleurs voir un exemple dans la section <strong><a href="index.php?page=animations&css=<?php echo $css; ?>">Animations</a></strong>.
            </div>
            <div class="line vertical-top-ident">
                Voila un exemple de code CSS3:
            </div>

            <div class="code-section ident vertical-top-ident">
                <code>
                    <div class="line">
                        <span class="selector">#cube</span> <span class="curly-brace">{</span>
                    </div>
                    <div class="ident">
                        <div class="line">
                            <span class="property">transform-style</span>: <span class="value-text">preserve-3d</span>;
                        </div>
                        <div class="line">
                            <span class="property">transform</span>: <span class="function">rotateY</span><span class="parenthesis">(</span><span class="value-number">45deg</span><span class="parenthesis">)</span> <span class="function">rotateX</span><span class="parenthesis">(</span><span class="value-number">35deg</span><span class="parenthesis">)</span>;
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
            <div id="cube-container">
                <div id="cube">
                    <div class="face front"></div>
                    <div class="face back"></div>
                    <div class="face left"></div>
                    <div class="face right"></div>
                    <div class="face top"></div>
                    <div class="face bottom"></div>
                </div>
            </div>
            <div id="slidecontainer">
                <input type="range" id="cursor" min="0" max="100" value="50" oninput="rotate(this.value)">
            </div>
        </div>
    </div>

</div>