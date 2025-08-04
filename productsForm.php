<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>

<div class="row">
    <div class="content">
<h1>Heading 1</h1>

   <div>
       <img src="images/flower.jpg" alt="flower" width="200" height="200">
   </div> 

<table>
    <caption>Floricultural Products</caption>
    <tr>
        <th>SN</th>
        <th>Items</th>
        <th>Quantity</th>
        <th>U Price</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Rose</td>
        <td>50</td>
        <td>$2.00</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Tulip</td>
        <td>30</td>
        <td>$1.50</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Lily</td>
        <td>20</td>
        <td>$3.00</td>  
    </tr>
    <tr>
        <td>4</td>
        <td>Daisy</td>
        <td>40</td>
        <td>$1.00</td>  
    </tr>
    <tr>
        <td>5</td>
        <td>Sunflower</td>
        <td>25</td>
        <td>$2.50</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Orchid</td>
        <td>15</td>
        <td>$4.00</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Chrysanthemum</td>
        <td>35</td>
        <td>$1.75</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Peony</td>  
        <td>10</td>
        <td>$5.00</td>
    </tr>
    
</table>


    </div>
    <div class="sidebar">
                <h2>Side Bar</h2>
        <p>Our floricultural products are sourced from the best growers to ensure quality and freshness. We offer a wide variety of flowers, including roses, tulips, lilies, daisies, sunflowers, orchids, chrysanthemums, and peonies. Each flower is carefully selected to meet our high standards.</p>
        <p>Whether you are looking for flowers for a special occasion or just to brighten your day, we have something for everyone. Our products are available in various quantities and at competitive prices.</p>
        <p>Feel free to browse our selection and contact us if you have any questions or need assistance with your order.</p>
    </div>
</div>
<?php
    require 'includes/footer.php';
?>

</body>
</html>