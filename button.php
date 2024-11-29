<html>
<form action="" method="post">
    <button name="button">Click me</button>
</form>

<pre>
        <?php
        function click_button()
        {
            if (isset($_POST['button'])) {
                echo "Button is clicked";
            } else {
                echo "button is not clicked";
            }
        }
        click_button();



 
  ?>
    </pre>


</html>