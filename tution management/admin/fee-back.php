<?php
$name=$_POST['name'];
$date=date("M-D-Y");
$month=$_POST['mon'];
$amount=$_POST['amount'];
$class=$_POST['class'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Receipt</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A5 landscape }</style>

  <!-- Custom styles for this document -->
  <link href='https://fonts.googleapis.com/css?family=Tangerine:700' rel='stylesheet' type='text/css'>
  <style>
    body   { font-family: serif }
    h1     { font-family: 'Tangerine', cursive; font-size: 40pt; line-height: 18mm}
    h2, h3 { font-family: 'Tangerine', cursive; font-size: 24pt; line-height: 7mm }
    h4     { font-size: 32pt; line-height: 14mm }
    h2 + p { font-size: 18pt; line-height: 7mm }
    h3 + p { font-size: 14pt; line-height: 7mm }
    li     { font-size: 11pt; line-height: 5mm }

    h1      { margin: 0 }
    h1 + ul { margin: 2mm 0 5mm }
    h2, h3  { margin: 0 3mm 3mm 0; float: left }
    h2 + p,
    h3 + p  { margin: 0 0 3mm 50mm }
    h4      { margin: 2mm 0 0 50mm; border-bottom: 2px solid black }
    h4 + ul { margin: 5mm 0 0 50mm }
    article { border: 4px double black; padding: 5mm 10mm; border-radius: 3mm }
  </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A5 landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-20mm">

    <h1>ABC Tution Center</h1>
    <ul>
      <li>Near Busstand,Trikaripur</li>
      <li>TEL:046722133555</li>
      <li>http://www.abcschooltkr.com</li>
    </ul>
   
    <article>
      <h2>Received from:</h2>
      <p><?php echo"$name";?></p>
      <h3>For:</h3>
      <p>Tution Fee -<?Php echo"$month"; ?></p>

      <h4>&#x20b9 <?php echo"$amount";?></h4>
      <ul>
        <!-- <li>No:12334</li>
        <li>Reg.No:</li> -->
        <li>Class:<?php echo"$class"; ?></li>
        <li>Paid by: cash</li>
        <li><?Php echo"$date";?></li>
      </ul>
    </article>
    <p>signature</p>
  </section>

</body>

</html>