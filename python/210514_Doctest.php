<?php

	$pageTitle = "Blog";	
	include_once '../includes/header.php';

?>


<pre>

"""
Example of using the index variable of a for loop
"""

def main():

def is_divisible(a, b):
    """
    >>> is_divisible(20, 4)
    True
    >>> is_divisible(12, 7)
    False
    >>> is_divisible(10, 10)
    True
    """
    return a % b == 0

def is_leap_year(year):
    """
    Returns Boolean indicating if given year is a leap year.
    It is a leap year if the year is:
    * divisible by 4, but not divisible by 100
     OR
    * divisible by 400
    Doctests:
    >>> is_leap_year(2001)
    False
    >>> is_leap_year(2020)
    True
    >>> is_leap_year(2000)
    True
    >>> is_leap_year(1900)
    False
    """

    if is_divisible(year, 400):   ######## a and b
        return True

    return is_divisible(year, 4) and not is_divisible(year, 100)
            
if __name__ == '__main__':
    main()



</pre>

<?php

include_once '../includes/footer.php';

?>