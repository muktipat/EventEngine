<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>cems</title>
<?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
<style>
        .image-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .image-container div {
            text-align: center;
            margin: 0 20px;
        }
        .image-container img {
            width: 300px;
            height: 350px;
            margin: 10px;
        }
        .image-label {
            margin-top: 5px;
        }
    </style>
</head>
<style>

/* Large rounded green border */
hr.blueline {
  border: 10px solid #00004d;
  border-radius: 5px;
}

#bj
{
  font-size: 22px;
}
</style>



  <?php require 'utils/header.php'; ?>
  <hr class="blueline">
  <div class="col-md-12">
  
<h1>About Us</h1>
    <div class="image-container">
        <div>
            <img src="images/11.jpg" alt="Image 1">
            <p class="image-label">Sai Varshini</p>
        </div>
        <div>
            <img src="images/123.jpg" alt="Image 2">
            <p class="image-label">Mukti Patangia</p>
        </div>
    </div>
<p> <br> Our college Mission is to impart quality technical education and higher moral ethics associated with skilled training to suit the modern day technology with innovative concepts,so as to learn to lead the future with full confidence
                  .</p>

</div>
<hr class="blueline">
</body>

 <?php require 'utils/footer.php'; ?>

</html>