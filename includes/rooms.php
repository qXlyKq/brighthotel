<?php
    $query = "SELECT * FROM rooms ORDER BY id ASC";
    $result = mysqli_query($link, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
        ?>
        <div class="item">
            <form method="post" action="rooms.php?action=add&Id=<?php echo $row["Id"]; ?>">
                <div class="block-34">
                <div class="image">
                    <a href="#"><img src="<?php echo $row["images"]; ?>" alt="Зображення номера"></a>
                </div>
                <div class="text">
                    <h2 class="heading"><?php echo $row["Name"]; ?></h2>
                    <div class="price"><sup>$</sup><span class="number"><?php echo $row["Price"]; ?></span><sub>/за ніч</sub></div>
                    <ul class="specs">
                    <li><strong>Дорослих:</strong> <?php echo $row["Contain"]; ?></li>
                    <li><strong>Категорія:</strong> <?php echo $row["Categories"]; ?></li>
                    <li><strong>Зручності:</strong> <?php echo $row["Facilities"]; ?></li>
                    <li><strong>Розмір:</strong> <?php echo $row["Size"]; ?>м<sup>2</sup></li>
                    <li><strong>Тип ліжка:</strong> <?php echo $row["Bedtype"]; ?></li>
                    </ul>
                </div>
                </div>
            </form>
        </div>
    <?php      
        }
    }
?>  
