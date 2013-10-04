<div class="page-header">
    <h1 id="overview">Overview</h1>
</div>
<p class="lead">Get the lowdown on the key pieces of Bootstrap's infrastructure, including our approach to better,
    faster, stronger web development.</p>

<h3 id="overview-doctype">HTML5 doctype</h3>

<p>Bootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype.
    Include it at the beginning of all your projects.</p>

<div class="highlight"><pre><code class="html"><span class="cp">&lt;!DOCTYPE html&gt;</span>
            <span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span
                class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/html&gt;</span>
        </code></pre>
</div>

<h3 id="overview-mobile">Mobile first</h3>

<p>With Bootstrap 2, we added optional mobile friendly styles for key aspects of the framework. With Bootstrap 3,
    we've rewritten the project to be mobile friendly from the start. Instead of adding on optional mobile styles,
    they're baked right into the core. In fact, <strong>Bootstrap is mobile first</strong>. Mobile first styles can
    be found throughout the entire library instead of in separate files.</p>

<p>To ensure proper rendering and touch zooming, <strong>add the viewport meta tag</strong> to your <code>&lt;head&gt;</code>.
</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span
                class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1.0"</span><span
                class="nt">&gt;</span>
        </code></pre>
</div>
<p>You can disable zooming capabilities on mobile devices by adding <code>user-scalable=no</code> to the viewport
    meta tag. This disables zooming, meaning users are only able to scroll, and results in your site feeling a bit
    more like a native application. Overall we don't recommend this on every site, so use caution!</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;meta</span> <span class="na">name=</span><span
                class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"</span><span
                class="nt">&gt;</span>
        </code></pre>
</div>
<h3 id="overview-responsive-images">Responsive images</h3>

<p>Images in Bootstrap 3 can be made responsive-friendly via the addition of the <code>.img-responsive</code> class.
    This applies <code>max-width: 100%;</code> and <code>height: auto;</code> to the image so that it scales nicely
    to the parent element.</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;img</span> <span class="na">src=</span><span
                class="s">"..."</span> <span class="na">class=</span><span class="s">"img-responsive"</span> <span
                class="na">alt=</span><span class="s">"Responsive image"</span><span class="nt">&gt;</span>
        </code></pre>
</div>

<h3 id="overview-type-links">Typography and links</h3>

<p>Bootstrap sets basic global display, typography, and link styles. Specifically, we:</p>
<ul>
    <li>Remove <code>margin</code> on the body</li>
    <li>Set <code>background-color: white;</code> on the <code>body</code></li>
    <li>Use the <code>@font-family-base</code>, <code>@font-size-base</code>, and <code>@line-height-base</code>
        attributes as our typographic base
    </li>
    <li>Set the global link color via <code>@link-color</code> and apply link underlines only on <code>:hover</code>
    </li>
</ul>
<p>These styles can be found within <code>scaffolding.less</code>.</p>

<h3 id="overview-normalize">Normalize</h3>

<p>For improved cross-browser rendering, we use <a href="http://necolas.github.io/normalize.css/" target="_blank">Normalize</a>,
    a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a
        href="http://twitter.com/jon_neal" target="_blank">Jonathan Neal</a>.</p>

<h3 id="overview-container">Containers</h3>

<p>Easily center a page's contents by wrapping its contents in a <code>.container</code>. Containers set <code>max-width</code>
    at various media query breakpoints to match our grid system.</p>

<div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span
                class="s">"container"</span><span class="nt">&gt;</span>
            ...
            <span class="nt">&lt;/div&gt;</span>
        </code></pre>
</div>