<? include "includes/header.php"?>
    
<p>Before CSS Flexbox, developers could only use the float property to position elements on a web page. It was limited in its capabilities as it could only position elements horizontally, and its main purpose was to text alongside an image. However, with the introduction of the flexbox property, developers have more options to arrange elements. This includes controlling the alignment, order, size, and direction in which elements are arranged (InternetingisHard 2017). Flexboxes have now become a useful property in laying out entire webpage structures, and it is compatible with all major browsers.</p>
	
<p>One way to use a flexbox is designing navigation bars. “A common pattern for navigation is to have a list of items displayed as a horizontal bar. This pattern, as basic as it seems, was difficult to achieve before flexbox. It forms the most simple of flexbox examples, and could be considered the ideal flexbox use case.When we have a set of items that we want to display horizontally, we may well end up with additional space. We need to decide what to do with that space, and have a couple of options” (MDM 2019). A couple of flexbox properties used to control spacing between navigation elements are the justify-content property, which creates equal spacing around all elements. Flexbox has also been a solution to centering elements vertically using the justify-content: center property.</p>

<p>Another common use case for flexbox is designing for media content. “With flexbox we can allow the part of the media object containing the image to take its sizing information from the image, and then the body of the media object flexes to take up the remaining space” (MDM 2019). For example, you can apply the flex-grow property, which allows developers to control how much space an element should take up in a container, and the spacing between the other elements in the container will adjust accordingly. “If all items have flex-grow set to 1, the remaining space in the container will be distributed equally to all children. If one of the children has a value of 2, the remaining space would take up twice as much space as the others (or it will try to, at least)” (CSS Tricks 2020).</p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<h3>Citations</h3>
<ul>
    <li>“Flexbox: HTML &amp; CSS Is Hard.” Wifi Signal with Exclamation Mark through It, InternetingIsHard, 2017, internetingishard.com/html-and-css/flexbox/</li>
    <li>“Typical Use Cases of Flexbox.” MDN Web Docs, Mozilla, 18 Mar. 2019, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout<br/>/Typical_Use_Cases_of_Flexbox.</li>
    <li>“A Complete Guide to Flexbox: CSS-Tricks.” A Complete Guide to Flexbox, Front End Masters, 3 Feb. 2020, css-tricks.com/snippets/css/a-guide-to-flexbox/.</li>
</ul>
</aside>
<!-- END RIGHT COL -->

<? include "includes/footer.php"?>