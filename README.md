# Unexpected Array Modification in Recursive PHP Function

This repository demonstrates a subtle bug in PHP related to unexpected array modifications when using recursive functions within foreach loops.  The `processData` function intends to process each element of an array, applying a simple operation and recursively handling nested arrays. However, due to PHP's pass-by-reference behavior in foreach, the original array is modified unexpectedly.

The `bug.php` file contains the buggy code, and `bugSolution.php` provides a corrected version. The README outlines the issue and its solution.