<!--
keyword: product name
price range: from amount to amount
order: asc or desc  
availability: whether or not it is available online or not (check box if the user wants it online)
customer rating theshold: if 4 is input, display all relevant products with a rating of four or higher.

display: name, salePrice, availableOnline, numReviews, customerRating

    
-->
<?php



    if(isset($_GET['query'])) {
     
     //  echo "Keyword typed: " . $_GET['keyword'];
        
        include 'api/walmartAPI.php';
        
        $query = $_GET['query'];
        
        if (!empty($_GET['order'])) {  //User selected a order
             
            $order = $_GET['order'];
        }
        
        if (!empty($_GET['numItems'])) {  //User input a number of items
             
            $numitems = $_GET['numItems'];
        }
        
        if(!empty($_GET['sort'])){ // chooses the sortby ex. relevance, price, new, etc
            $sort = $_GET['sort'];
        }
        
        if(isset($_GET['numItems'])){
            $numItems = $_GET['numItems'];
        }
        
        
            $productName = getNameList($query, $sort, $order, $numItems);
            $productPrice = getPriceList($query, $sort, $order, $numItems);
            $productNumReviews = getNumReviewsList($query, $sort, $order, $numItems);
            $productCustomerRatingImg = getCustomerRatingImgList($query, $sort, $order, $numItems);
            $productStock = getStockList($query, $sort, $order, $numItems);
            $productImage = getImageList($query, $sort, $order, $numItems);
    }
    
   function checkIfSelected($option) {
        
        if ($option == $_GET['order']) {
            
            return "selected";
            
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Walmart Search Bar</title>
        <meta charset="utf-8">
       
        <style>
            <!-- @import url("css/styles.css"); -->
        </style>
    </head>
    <body>
        <h1>Walmart Search Bar</h1>
        <img id='logo' src='img/walmart_Background.png' alt='walmart logo'>;
        <div class="formId">
         <form>
            <input type="text" name="query" placeholder="query" value="<?=$_GET['query']?>"/>
            
            <input type="radio" id="ascending" name="order" value="asc" <?= ($_GET['sort']=='asc')?"checked":""  ?> >
            <label for="ascending"> Ascending </label>
            
            <input type="radio" id="descending" name="order" value="desc" 
            <?php
                if ($_GET['order']=="desc") {
                    echo "checked";
                }
             
             ?>><label for="descending"> Descending </label>
            
            
            
            <select name="sort">
                <option value="">Select One</option>
                <option <?=checkIfSelected('price')?> value="price">Price</option>
                <option <?=checkIfSelected('title')?> value ="title">Title</option>
                <option <?=checkIfSelected('customerRating')?> value ="customerRating">Customer Rating</option>
            </select>
            
  
            
            <input type="text" name="numItems" placeholder="Number of results" value="<?=$_GET['numItems']?>"/> <!-- number of results -->
            <input type="submit" value="Search"/> <!-- search button-->
        </form>
        </div>
        
        <br /><br />
        
        <?php
            if(!isset($_GET['query'])) {  //form has not been submitted
                echo "<h2>Type a keyword to display a list of related products.</h2>";
            } else {   //form has been submitted
                if (empty($_GET['query'])) {
            
                        echo "<h2> Error! You must enter a keyword!</h2>";
                        return;
                        exit;
                 }
            }  
            
          if(!isset($_GET['numItems'])) {  //form has not been submitted
            } else {   //form has been submitted
                if (empty($_GET['numItems'])) {
            
                        echo "<h2> Error! You must enter a number of results!</h2>";
                        return;
                        exit;
                 }
            }  
            
            if(!isset($_GET['sort'])) {
                
            } else {
                if(empty($_GET['sort'])) {
                    echo "<h2>You must select a sorting method!</h2>";
                    return;
                    exit;
                }
            }
            
            //Display
            for($i = 0; $i < $numItems; $i++){
                echo "<p><br>";
                echo "Product #" . ($i+1) . "<br>";
                echo "Product Name: " . $productName[$i] . "<br>";
                echo "<img src='$productImage[$i]' alt='Product Image'><br>";
                echo "Product Price: $" . $productPrice[$i] . "<br>";
                echo "Number of Product Reviews: " . $productNumReviews[$i] . "<br>";
                echo "<img src='$productCustomerRatingImg[$i]' alt='No customer reviews'><br>";
                echo "Product Availability: " . $productStock[$i] . "<br></p><hr>";
            }
        ?>
        <br>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>