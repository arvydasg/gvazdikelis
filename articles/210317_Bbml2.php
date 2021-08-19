<?php

	include_once '../includes/header.php';

?>

<h1>Black boxing Machine Learning 2</h1>


<p>2021-03-17 10:58</p>

<h2>Classification algorithms</h2>


<p>There is a lot of classification algorithms available now but it is not possible to conclude which one is superior to other. It depends on the application and nature of available data set. For example, if the classes are linearly separable, the linear classifiers like Logistic regression, Fisher’s linear discriminant can outperform sophisticated models and vice versa.</p>









<h3>Decision Tree</h3>

<img src="/images/decisiontree.png" width="800" height="500">

<p>Decision tree builds classification or regression models in the form of a tree structure. It utilizes an <strong>if-then</strong> rule set. The rules are learned sequentially using the training data <strong>one at a time.</strong> Each time a rule is learned, the tuples covered by the rules are removed. This process is continued on the training set until meeting a termination condition.</p>



<p>The tree is constructed in a top-down recursive <strong>divide-and-conquer manner</strong>. All the attributes should be categorical. Otherwise, they should be <em>discretized in advance?</em> Attributes in the top of the tree have <strong>more impact</strong> towards in the classification and they are identified using the <strong>information gain</strong> concept.</p>



<p>A decision tree can be easily over-fitted generating too many branches and may reflect <strong>anomalies due to noise or outliers.</strong> An over-fitted model has a very poor performance on the <em>unseen data</em> even though it gives an impressive performance on training data. </p>



<em><blockquote>This can be avoided by pre-pruning which halts tree construction early or post-pruning which removes branches from the fully grown tree. What?</blockquote></em>











<h3>Naive Bayes</h3>

<p>Naive Bayes is a probabilistic classifier inspired by the Bayes theorem under a simple assumption which is the <strong>attributes are conditionally independent.</strong></p>

<img src="/images/naivebayesformula.png" width='700' height='400' >

<p>Naive Bayes is a very simple algorithm to implement and good results have obtained in most cases. It can be easily scalable to larger datasets since it takes linear time, rather than by expensive iterative approximation as used for many other types of classifiers.</p>

<p>Naive Bayes can suffer from a problem called the <strong>zero probability problem</strong>. When the conditional probability is zero for a particular attribute, it fails to give a valid prediction. This needs to be fixed explicitly using a <em>Laplacian estimator?</em>.</p>


<h3>Artificial Neuraul Networks</h3>

<img src="/images/neuralnetworks.png" width="400" height="200">

<p>Artificial Neural Network is a set of <strong>connected input/output units</strong> where each connection has a <strong>weight associated</strong>. During the learning phase, the network learns by adjusting the weights so as to be able to predict the correct class label of the input tuples.</p>

<p>There are many network architectures available:</p>

<ul>
		<li>Feed-forward</li>
		<li>Convolutional</li>
		<li>Recurrent </li>

</ul>

<p>There can be multiple <em>hidden layers</em> in the model depending on the complexity of the function which is going to be mapped by the model. Having more hidden layers will enable to model complex relationships such as deep neural networks.</p>

<p>However, when there are many hidden layers, it <strong>takes a lot of time to train and adjust wights</strong>. The other disadvantage of is the poor interpretability of model compared to other models like Decision Trees due to the <strong>unknown symbolic meaning behind the learned weights.</strong></p>


<p>But Artificial Neural Networks have performed impressively in most of the real world applications. It has <strong>high tolerance to noisy data</strong> and is able to <strong>classify untrained patterns.</strong> Usually, Artificial Neural Networks perform better with <strong>continuous-valued</strong> inputs and outputs.</p>

<blockquote><em>All of the above algorithms are <strong>eager learners</strong> since they train a model in advance to generalize the training data and use it for prediction later.</em></blockquote>

<h3>k-Nearest Neighbor (KNN)</h3>

<img src="/images/knearestneighbors.png" width='500' height='300'>


<p>k-Nearest Neighbor is a <strong>lazy learning algorithm</strong> which stores all instances correspond to training data points in n-dimensional space. When an unknown discrete data is received, it analyzes the closest k number of instances saved (nearest neighbors)and returns the most common class as the prediction and for real-valued data it returns the mean of k nearest neighbors.</p>

<p>nice</p>

<img src="/images/knearestformula.png">

<h2>Evaluating a classifier</h2>

<p>After training the model the most important part is to evaluate the classifier to verify its applicability</p>


<h3>Holdout method</h3>

<p>There are several methods exists and the most common method is the holdout method. In this method, the given data set is divided into 2 partitions as <strong>test and train 20% and 80% respectively.</strong> The train set will be used to train the model and the unseen test data<em>(aaaa, unseen data, I see now)</em> will be used to test its predictive power.</p>


<h3>Cross-validation</h3>

<em><blockquote>Over-fitting is a common problem in machine learning which can occur in most models. k-fold cross-validation can be conducted to verify that the model is not over-fitted. In this method, the data-set is randomly partitioned into k mutually exclusive subsets, each approximately equal size and one is kept for testing while others are used for training. This process is iterated throughout the whole k folds.<br>Sorry what?</blockquote></em>

<h3>Precision and Recall</h3>

<em><p>Precision is the fraction of relevant instances among the retrieved instances, while recall is the fraction of relevant instances that have been retrieved over the total amount of relevant instances. Precision and Recall are used as a measurement of the relevance.Hmmm...</p></em>


<h3>ROC curve Receiver Operatning Scharacteristics</h3>

<img src="/images/roccurve.png" alt="">

<p>ROC curve is used for <strong>visual comparison</strong> of classification models which shows the trade-off between the true positive rate and the false positive rate. The area under the ROC curve is a measure of the accuracy of the model. When a model is closer to the diagonal, it is less accurate and the model with perfect accuracy will have an area of 1.0</p>

<p>Alright enough machine lern...oh wait, there are more things to get familiar with in my curriculum.</p>

<h2>SVM (Support Vector Machine)</h2>

<a href="https://towardsdatascience.com/support-vector-machine-introduction-to-machine-learning-algorithms-934a444fca47" target='_blank'>Link</a>

<p>Support vector machine is highly preferred by many as it produces significant accuracy with less computation power. Support Vector Machine can be used for both regression and classification tasks. But, it is widely used in classification objectives.</p>


<p>The objective of the support vector machine algorithm is to find a hyperplane in an N-dimensional space(N — the number of features) that distinctly classifies the data points.</p>

<img src="/images/hyperplanes.png">

<img src="/images/hyperplanes2.png">


<p>To separate the two classes of data points, <u>there are many possible hyperplanes that could be chosen</u>. Our objective is to find a plane that has the maximum margin, i.e the <strong>maximum distance</strong> between data points of both classes. Maximizing the margin distance provides some reinforcement so that future data points can be classified with more confidence.</p>


<h3>Hyperplanes and Support Vectors</h3>

<img src="/images/hyperplane3d.png" alt="">


<p>Hyperplanes are decision boundaries that help classify the data points. Data points falling on either side of the hyperplane can be attributed to different classes. Also, the dimension of the hyperplane depends upon the number of features. If the number of input features is 2, then the hyperplane is just a line. If the number of input features is 3, then the hyperplane becomes a two-dimensional plane. <em>It becomes difficult to imagine when the number of features exceeds 3.</em></p>

<img src="/images/supportvectors.jpg" alt="">


<p>Support vectors are data points that are closer to the hyperplane and influence the position and orientation of the hyperplane. Using these support vectors, we maximize the margin of the classifier. Deleting the support vectors will change the position of the hyperplane. These are the points that help us build our SVM.</p>

<img src="/images/batmanthinking.gif" alt="">

<p>Cool, that's a first gif on this website. As easy to put it in as an image, cool. Don't really use them, but why not, I might start to</p>

<p>Okay enough of SVM for now</p>

<p>2021-03-17 09:36</p>


<h3>Logistic Regression</h3>

<img src="/images/logisticregression.png" alt="">


<p>Logistic Regression was used in the biological sciences in early twentieth century. It was then used in many social science applications. Logistic Regression is used when the dependent variable(target) is categorical.</p>

<ul>
        <li>To predict whether an email is spam (1) or (0)</li>
		<li>Whether the tumor is malignant (1) or not (0)</li>
</ul>

<p>Logistic regression models the probabilities for classification problems with two possible outcomes. It's an extension of the linear regression model for classification problems</p>


<p></p>

<h3>K-means Clustering</h3>


<img src="/images/kmeansclustering.png" width="800" alt="">


<p>K-means clustering is one of the simplest and popular unsupervised machine learning algorithms.</p>

<p>The objective of K-means is simple: group similar data points together and discover underlying patterns. To achieve this objective, K-means looks for a fixed number (k) of clusters in a dataset.</p>

<p>A cluster refers to a collection of data points aggregated together because of certain similarities.</p>

<p>You’ll define a target number k, which refers to the number of centroids you need in the dataset. A centroid is the <strong>imaginary</strong> or real location representing the center of the cluster.</p>


<p>Every data point is allocated to each of the clusters through <em>reducing the in-cluster sum of squares? Hm?</em></p>


<h3>k-fold Cross-Validation</h3>


<img src="/images/kfoldcrossvalidation.jpg" width='600' height='400' >

<p>Lots of k's here</p>

<p>Cross-validation is a statistical method used to estimate the skill of machine learning models.</p>


<p>It is commonly used in applied machine learning to compare and select a model for a given predictive modeling problem because it is easy to understand, easy to implement, and results in skill estimates that generally have a lower bias than other methods.</p>

<p>Oh, so there are even methods to compare and select a model?!? Why do you even need humans for then? Let the machine face a problem, it will select the method to solve it and then solve it. Uh, even data scientists might become unecessary soon. Overexaggerating of course, but damn.</p>  



<a href="data-week1-2.php">Back to Week 1-2</a><br><br>
<a href="../index.php">Back to HomePage</a><br><br>


<?php
	include_once '../includes/footer.php';
?>
