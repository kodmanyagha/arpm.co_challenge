# Back-End Developer Test

This is a challenge for www.arpm.co website.

# IT client communication

Generate (no need to display) a 20 x 52 table where each value is drawn from a standard uniform
distribution.
The 20 rows represent 20 individuals and the 52 columns represent 52 weeks (one year)
For each individual, compute the cumulative sums across columns from inception until the given
week
Show in a google sheet the respective chart with 20 increasing lines, label the axes “Week” and
“Cumulative sum”.

# PHP object

Given an object (Foo in the sample), write a method such that, when executing "echo $foo", it
prints its properties.

# Array

Given an array, write the PHP code, in as elegant a way as possible, to print how many times the
item "strawberry" appears in the array.
Do not use either “for”, or “foreach” statements.

# MVC structure

Create a set of files organized in a simple MVC structure that, once installed in a web root,
produces the below browsable urls:

1. www.domain.it
2. www.domain.it/folder1/
3. www.domain.it/folder2/
   Contents:
4. <h1>Hi</h1><div>I'm in the homepage</div>
5. <h1>Hi</h1><div>I'm in folder1</div>
6. <h1>Hi</h1><div>I'm in folder2</div>
   Conditions:

- index.php as the only public file
- .htaccess and route.php to manage the routes
- PageController.php used as a single Controller class of the 3 urls.
- view.php that contains html and contents shown above
