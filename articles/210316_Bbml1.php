<?php

	include_once '../includes/header.php';

?>

<p>2021-03-16 16:16</p>

<h1>Black boxing Machine Learning 1</h1>

<p>Alright so <strong>right now</strong> I really don't know anything about machine learning besides that it is related to linear regression and gradient descent (have a veeeery <strong>general</strong> idea of how they work since I have spend the last month trying to crack the math behind it, getting introduced and lost at the same time in the sea of calculus. </p>
<h2>Scikit-Learn</h2>
<p>As explained by <a href="https://www.youtube.com/watch?v=rvVkVsG49uU" target='_blank'>this guy</a>  is a well documented and well-loved Python machine learning libary.</p>

<blockquote>The <strong>kernel </strong> is a computer program at the core of a computer's operating system that has complete control over everything in the system. It is the "portion of the operating system code that is always resident in memory", and facilitates interactions between hardware and software components.</blockquote>

<a href="https://scikit-learn.org/stable/"target='_blank'>Scikit-learn website</a>

<p>So apparently it is a collection of Machine learning algorithms that you can just try out with minimal code adjustments to gain insight of how they they perform with given parameters. That sounds neat, since a person without much ML understading can check out and... again... <a href="blackboxmethod.php"target='_blank'>Black box</a> and try to get an intuion how different algos work. </p>

<blockquote> <strong>API</strong> is the acronym for Application Programming Interface, which is a software intermediary that allows two applications to talk to each other. Each time you use an app like Facebook, send an instant message, or check the weather on your phone, you're using an API.</blockquote>

<h2>Linear regresion</h2>

<img src="/images/linearregression.png" width='600' height='400'><br>
<a href="http://www.stat.yale.edu/Courses/1997-98/101/linreg.htm">Source for the stuff below</a>
<p>  Linear regression attempts to model the relationship between two variables by fitting a linear equation to observed data. One variable is considered to be an explanatory variable, and the other is considered to be a dependent variable. For example, a modeler might want to relate the weights of individuals to their heights using a linear regression model. </p>

<p>Before attempting to fit a linear model to observed data, a modeler should first determine whether or not there is a relationship between the variables of interest. A scatterplot can be a helpful tool in determining the strength of the relationship between two variables.</p>

<p>A linear regression line has an equation of the form Y = a + bX, where X is the explanatory variable and Y is the dependent variable. The slope of the line is b, and a is the intercept (the value of y when x = 0). </p>

<h3>Least-Squares Regression</h3>

<p>The most common method for fitting a regression line is the method of least-squares. This method calculates the best-fitting line for the observed data by minimizing the sum of the squares of the vertical deviations from each data point to the line (if a point lies on the fitted line exactly, then its vertical deviation is 0). Because the deviations are first squared, then summed, there are no cancellations between positive and negative values. </p>


<h3>Outlies and Influential Observations</h3>

<p>After a regression line has been computed for a group of data, a point which lies far from the line (and thus has a large residual value) is known as an outlier. Depending on their location may have a major impact on the regression line. If a point lies far from the other data in the horizontal direction, it is known as an influential observation. The reason for this distinction is that these points have may have a significant impact on the slope of the regression line. </p>


<h3>Residuals</h3>

<img src="/images/residuals.png" width='700' height='300'><br>

<h3>Lurking Variables</h3>

<div>If non-linear trends are visible in the relationship between an explanatory and dependent variable, there may be other influential variables to consider. A lurking variable exists when the relationship between two variables is significantly affected by the presence of a third variable which has not been included in the modeling effort. Since such a variable might be a factor of time (for example, the effect of political or economic cycles), a time series plot of the data is often a useful tool in identifying the presence of lurking variables. </div>

<p>Didn't quite get what Lurking Variable is all about, but it's alright, will do in the future. Btw I just used 'div' tag for the first time in, what's the difference between it and 'p'?  </p>

<h3>Extrapolation</h3>
<img src="/images/extrapolation.png"><br>
<p>The action of estimating or concluding something by assuming that existing trends will continue or a current method will remain applicable.</p>
<p>Whenever a linear regression model is fit to a group of data, the range of the data should be carefully observed. Attempting to use a regression equation to predict values outside of this range is often inappropriate, and may yield incredible answers. This practice is known as extrapolation. Consider, for example, a linear model which relates weight gain to age for young children. Applying such a model to adults, or even teenagers, would be absurd, since the relationship between age and weight gain is not consistent for all age groups. </p>

<p>Got it</p>

<h2>Classification</h2>

<img src="/images/classificationalgorithms.jpg" width='600' height='300' >

<p> <strong>Classification </strong> is the process of predicting the class of given data points. Classes are sometimes called as targets/labels or categories. Classification predictive modelis the task of approximating a mapping functioin (f) from input variables (X) to discrete output values (y).</p>

<p>For example, spam detection in email service providers can be identified as a classification problem. This is <strong>binary classificationi</strong> since there are only 2 classes as spam and not spam (same as there is eithe a dinosaur behind you or there isn't). A classifier utilizes some training data to understand how given input variables relate to the class. In this case, known spam and non-spam emails have to be used as the training data. When the classifier is trained accurately, it can be used to detect an unknown email.  </p>

<p>Classification belongs to the category of <strong>supervised learning</strong> where the targets also provided with the input data.</p>

<h3>Learners</h3>

<p>There are two types of <strong>learners?</strong></p>

<p><strong>Lazy learners</strong> simply store the training data and <u>wait</u> until a testing data appear. When it does, classification is conducted based on the most related data in the stored training data. Compared to eager learners, lazy learners have <u>less training time but more time in predicting.</u> <br><br>

<em>Ex. k-nearest neighbor, Case-based reasoning</em></p>

<p><strong>Eager learners</strong></p>

<p>Eager learners construct a classification model based on the given training data <u>before</u> receiving data for classification. It must be able to commit to a single hypothesis that covers the entire instance space. Due to the model construction, eager learners take a <u>long time for train and less time to predict.</u><br><br>

<em>Ex. Decision Tree, Naive Bayes, Artificial Neural Networks</em></p>

<a href="data-week1-2.php">Back to Week 1-2</a><br><br>
<a href="index.php">Back to HomePage</a><br><br>

<?php
	include_once '../includes/footer.php';
?>
