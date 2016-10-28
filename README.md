<<<<<<< HEAD
PathRings--A web-version of biological data visualization framework
============


**Website** : [http://raven.anr.udel.edu/~sunliang/PathRings/](http://raven.anr.udel.edu/~sunliang/PathRings/)

**Operation** : `Right Click`   ===>  `Select Menu`

Introduction
============
   PathRings Project from  [https://sites.google.com/a/umbc.edu/pathbubbles/home](https://sites.google.com/a/umbc.edu/pathbubbles/home)
   You can get detailed informaiton from [https://sites.google.com/a/umbc.edu/pathbubbles/pathbubbles-1-0](https://sites.google.com/a/umbc.edu/pathbubbles/pathbubbles-1-0)  
   This project is trying to design a web version of Pathbubbles to assist biologist in interactive exploring and analyzing dataset.
Framework
============

 ### Goal for framework

 (1) Extendable

 (2) Readble

 (3) Include basic PathBubble characteristic: virtual space, navagation bar, group, multi-view

 ### Hierarchical scene graph object

 (1) scene==> Bubble ==> object inside bubble.

  all the elements in scene graph is inherent from Object2D


 (2) render ==> to manage the render event and mouse operation (this needs to reconsider)

  all the basic element is encapsulated into the basic class.

=======
# GraphStudy
The file randadj.py contains script to generate a random graph
Command line arguments: Number of nodes , number of edges (exact values) for the generated graph
The script generates a random adjacency matrix with the size specified, then adjusts the number of edges to the exact value provided by the user. 
Edge adjustment is a performance bottleneck in larger size of graphs (about 1 minute runtile for 1000 nodes with 1000 edges)
The script then generates random string labels for each one of the nodes that have at least one edge connection (non connected nodes are discarded here)
Next, the script writes a sql table with edges between nodes acting as primary key (also there is a column for edge weights that is currently set to 1.0 as a default value)

N.B.: the generated graph is completely random, which means it may or may not be connected. 

TODO1: verify file writes are performed correctly 
TODO2: add a function to create a series of such graphs according to a user-entered change factor 
>>>>>>> a31815c02f33605e1ce931b7db07de022adbc797
