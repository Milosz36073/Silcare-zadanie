<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Silcare - zadanie</title>
</head>
<body>
  <div class="container pt-4">
        <?php require_once('curl.php');  
            echo '<h3>Invoices company: <br>'. $invoices[0]->seller_name. '</h3>'
        ?>

        <table class="table">
      <thead>
        <tr>
          <th scope="col">Number</th>
          <th scope="col">Buyer name</th>
          <th scope="col">Seller city</th>
          <th scope="col">Price net</th>
          <th scope="col">Tax price </th>
          <th scope="col">Price Gross</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($invoices as $invoice){
              echo '<tr>
              <td>'. $invoice->number.'</td>
              <td>'. $invoice->buyer_name .'</td>
              <td>'. $invoice->seller_city.'</td>
              <td>'. $invoice->price_net.' zł</td>
              <td>'. $invoice->price_tax.' zł</td>
              <td>'. $invoice->price_gross.' zł</td>
              
              </tr>';
            }
              ?>
      </tbody>
    </table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>