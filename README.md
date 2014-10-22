PHP-Programming
===============

Notes, codes, solutions to question.

<a href="#filter">filter</a> | <a href="#f_eval">eval()</a> | <a href="">link</a> | <a href="">link</a> | <a href="">link</a> | <a href="">link</a> | 

<h4 id="#filter">FILTER</h4>
<hr/>
<ul>
  <li>when using <code>filter_input()</code> to check a input with regular expression, the argument "options" is required, or it would give a warning like:<br>
  <i>Warning: filter_input(): 'regexp' option missing in C:\xampp\htdocs\filter.php on line 59</i></li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
<h4 id="#f_eval">eval()</h4>
<hr/>
Used to evaluate a string as a PHP code, the string must be valid PHP code.<br>
For example:
<pre>
  $greeting = "hello";
  $str = "$greeting world!";
</pre>
When execute <code>echo $greeting;</code> the result will be <i><b>hello</b></i>, while do <code>echo $str;</code> we will get a string  <b><i>$greeting world!</i></b>.<br/>
To evaluate the value of $greeting in string varable $str, we need to used <code>eval(<i>PHPCODE</i>)</code>, i.e.
<pre>
  eval("\$str = \"$str\"<b>;</b>"); //PHPCODE as a parameter must be ended with a semi-colon
  echo $str; //print "hello world"
</pre>
Then the result will be <i><b>hello world!</b></i>.
