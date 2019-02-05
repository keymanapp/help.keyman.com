<?php
  require_once('includes/template.php');
  
  head([
    'title' => 'Array.prototype.splice()'
  ]);
  
  // THIS IS A SAMPLE TEMPLATE FOR AN API FUNCTION.
  // See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/splice as the basis.
  // See https://keyman.atlassian.net/wiki/display/WEB/Help+Documentation+Notes for documentation notes
?>

<h1>Array.prototype.splice()</h1>

<h2 id="Summary" name="Summary">Summary</h2>
<p>The <code><strong>splice()</strong></code> method changes the content of an array by removing existing elements and/or adding new elements.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>
<pre class="language-javascript"><code><var>array</var>.splice(<var>start</var>, <var>deleteCount</var>[, <var>item1</var>[, <var>item2</var>[, ...]]])
</code></pre>

<pre class="language-css"><code>p { color: red }</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>
<dl>
 <dt><code>start</code></dt>
 <dd>Index at which to start changing the array. If greater than the length of the array, actual starting index will be set to the length of the array. If negative, will begin that many elements from the end.</dd>
 <dt><code>deleteCount</code></dt>
 <dd>An integer indicating the number of old array elements to remove. If <code>deleteCount</code> is 0, no elements are removed. In this case, you should specify at least one new element. If <code>deleteCount</code> is greater than the number of elements left in the array starting at <code>start</code>, then all of the elements through the end of the array will be deleted.</dd>
 <dt><code>item<em>N</em></code></dt>
 <dd>The element to add to the array. If you don't specify any elements, <code>splice()</code> will only remove elements from the array.</dd>
</dl>

<h3 id="Returns" name="Returns">Returns</h3>
<p>An array containing the deleted elements. If only one element is removed, an array of one element is returned. If no elements are removed, an empty array is returned.</p>

<h2 id="Description" name="Description">Description</h2>
<p>If you specify a different number of elements to insert than the number you're removing, the array will have a different length at the end of the call.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_splice" name="Example:_Using_splice">Example: Using <code>splice()</code></h3>
<p>The following script illustrate the use of <code>splice()</code>:</p>
<pre class="language-javascript line-numbers"><code>var myFish = ['angel', 'clown', 'mandarin', 'surgeon'];

// removes 0 elements from index 2, and inserts 'drum'
var removed = myFish.splice(2, 0, 'drum');
// myFish is ['angel', 'clown', 'drum', 'mandarin', 'surgeon']
// removed is [], no elements removed

// removes 1 element from index 3
removed = myFish.splice(3, 1);
// myFish is ['angel', 'clown', 'drum', 'surgeon']
// removed is ['mandarin']

// removes 1 element from index 2, and inserts 'trumpet'
removed = myFish.splice(2, 1, 'trumpet');
// myFish is ['angel', 'clown', 'trumpet', 'surgeon']
// removed is ['drum']

// removes 2 elements from index 0, and inserts 'parrot', 'anemone' and 'blue'
removed = myFish.splice(0, 2, 'parrot', 'anemone', 'blue');
// myFish is ['parrot', 'anemone', 'blue', 'trumpet', 'surgeon']
// removed is ['angel', 'clown']

// removes 2 elements from index 3
removed = myFish.splice(3, Number.MAX_VALUE);
// myFish is ['parrot', 'anemone', 'blue']
// removed is ['trumpet', 'surgeon']
</code></pre>

<h2 id="Specifications" name="Specifications">Specifications</h2>
<table class="standard-table">
 <tbody>
  <tr>
   <th scope="col">Specification</th>
   <th scope="col">Status</th>
   <th scope="col">Comment</th>
  </tr>
  <tr>
   <td>ECMAScript 3rd Edition</td>
   <td>Standard</td>
   <td>Initial definition. Implemented in JavaScript 1.2.</td>
  </tr>
  <tr>
   <td><a class="external" href="http://www.ecma-international.org/ecma-262/5.1/#sec-15.4.4.12" hreflang="en" lang="en">ECMAScript 5.1 (ECMA-262)<br><small lang="en-US">The definition of 'Array.prototype.splice' in that specification.</small></a></td>
   <td><span class="spec-Standard">Standard</span></td>
   <td> </td>
  </tr>
  <tr>
   <td><a class="external" href="http://people.mozilla.org/~jorendorff/es6-draft.html#sec-array.prototype.splice" hreflang="en" lang="en">ECMAScript 6 (ECMA-262)<br><small lang="en-US">The definition of 'Array.prototype.splice' in that specification.</small></a></td>
   <td><span class="spec-Draft">Draft</span></td>
   <td> </td>
  </tr>
 </tbody>
</table>

<h2 id="Browser_compatibility" name="Browser_compatibility">Browser compatibility</h2>

<h3 id="Backward_compatibility" name="Backward_compatibility">Backward compatibility</h3>
<p>In JavaScript 1.2 the <code>splice()</code> method returns the element removed, if only one element is removed (<code>deleteCount</code> parameter is 1); otherwise, the method returns an array containing the removed elements. Note that the last browser to use JavaScript 1.2 was Netscape Navigator 4, so you can depend on <code>splice()</code> always returning an array.</p>

<h2 id="See_also" name="See_also">See also</h2>
<ul>
 <li><a href="/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/push" title="The push() method adds one or more elements to the end of an array and returns the new length of the array."><code>push()</code></a> / <a href="/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/pop" title="The pop() method removes the last element from an array and returns that element."><code>pop()</code></a> — add/remove elements from the end of the array</li>
 <li><a href="/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/unshift" title="The unshift() method adds one or more elements to the beginning of an array and returns the new length of the array."><code>unshift()</code></a> / <a href="/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/shift" title="The shift() method removes the first element from an array and returns that element. This method changes the length of the array."><code>shift()</code></a> — add/remove elements from the beginning of the array</li>
 <li><a href="/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/concat" title="The concat() method returns a new array comprised of the array on which it is called joined with the array(s) and/or value(s) provided as arguments."><code>concat()</code></a> — returns a new array comprised of this array joined with other array(s) and/or value(s)</li>
</ul>
