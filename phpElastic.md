# PHP + Elastic Tutorial

## Intro and setup
    - Docker
    - Git
 <!-- Hi my name is Stephon Harris. I'm a tech consultant for Avalon Consulting, LLC and also co-organizer of Black Code Collective -->
## What are we learning and why?
    Elasticsearch 
     - Index, Retrieve, Update and Delete operations quickly
     - Perform Complex searches quickly
    PHP
        - Web-friendly scripting language
        - Execute operations on server-side 
    [BCIAJS Demo](jesuitportal.bc.edu)
 <!-- - Elasticsearch is a powerful search and analytics engine that allows you to index, retrieve, update and delete data. It's a powerful solution for performing complex searches quickly. Today we're going to check out a little bit of its power using PHP. -->

## What do I need to know before doing this lesson?
    Skills
    - Basic Programming knowledge
    - Interacting with terminal window 
    - Git knowledge
    
    Apps
    - Code Editor
    - [Docker](docker.com)
    - Git
<!-- In order to follow along with the tutorial your going to need a couple of skills and apps -->

## How do I download the demo app?
    [`git clone https://github.com/theonestep4/intro-php-elastic`](https://github.com/theonestep4/intro-php-elastic)
    ```sh
        cd intro-php-elastic
        docker-compose up -d
     ```
<!-- So to begin we're going to download this repo from Github. In terminal do a git clone of the repo listed here. once downloaded, cd into the directory intro php elastic. Now we're going to start our docker environment by running docker-compose up -d. Once our environment is up and running let's log into our containers by running docker-compose exec php-fpm bash -->

## b
    - *Connect
    - Index
    - Get
    - Update
    - Search
    - Delete
<!-- Now that we have our PHP & Elastic environment set up we're going to do a couple of operations. in a text editor open the index.php file. You'll see at the top of the file the configuration parameters to connect to our elasticsearch service.-->

    - Connect
    - *Index
        - index
        - type
        - body
    - Get
    - Update
    - Search
    - Delete
<!--  Data stored in Elasticsearch are called documents. Now let's try storing a document into Elasticsearch, this is called indexing. Elasticsearch requires three parameters: an index, a type, and a body. The id parameter is optional, and Elasticsearch will automatically assigns a unique ID if nothing is specified. The index is the logical grouping in which you want to store the specific document. The type is how you want to categorize the document. The body is the data you want to index. In the example here we're going to index a document of a <character> named Cersei Lannister. Let's run this in php with the command php -f index.php. We should see the following output. It shows that a character was created and given a random ID by elastic. -->

    - Connect
    - Index
    - *Get
    - Update
    - Search
    - Delete
<!-- Now let's try retrieving a specific document from Elasticsearch. Comment out the index section and uncomment the Getting a dcoument section. We give an index, type and ID to the get operation. When we run php -f index.php this time we see that we get back the exact document we stored document. The version value keeps track of every time the document is updated. Since this is the first version it's value is 1. -->

    - Connect
    - Index
    - Get
    - *Update
    - Search
    - Delete
<!-- Let's update the version of this document. Comment out Getting a document section and uncomment the section. Updating a document and let's run php -f index.php again. The result returned that the result field has been updated and the version has incremented.-->

    - Connect
    - Index
    - Get
    - Update
    - *Search
    - Delete
<!-- Let's try running a search now. Comment out the updating a document section and uncomment the searching section. We have here a nested array with a match field of name inside the body query parameter . We're going to search on the name field for a value of 'Cersei'. When we run the index.php file now elasticsearch returns search hit data. Let's talk about what we see. Took is the number of milliseconds it took for the request to finish. Timed Out – returns true if the request timed out. Shards is how elasticsearch distributes data and shows the total number of shards, how many shards are healthy and how many are not (failed). Hits shows the documents that matched our query. Max Score is the highest score of any document that matches our query. -->

    - Connect
    - Index
    - Get
    - Update
    - Search
    - * Delete
<!-- Now let's try deleting a document stored in elasticsearch. Comment the searching section and uncomment the deleting a document section. The delete operation requires an index type and the id of the document you want to delete. When we run index.php now it returns that it found the document and now it's deleted. -->

## Ending

<!-- Today we learned how to do common operations in Elasticsearch. Elasticsearch is great for search functionality in PHP applications. Thanks for following along! -->