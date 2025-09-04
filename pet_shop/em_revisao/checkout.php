<?php
$access_token = "SEU_ACCESS_TOKEN_AQUI"; // substitua pelo seu token real

$dados = [
  "transaction_amount" => 100.00, // valor total da compra
  "description" => "Compra Amor Au Pet",
  "payment_method_id" => "pix",
  "payer" => [
    "email" => "cliente@email.com",
    "first_name" => "Izabelle"
  ]
];

$ch = curl_init("https://api.mercadopago.com/v1/payments");
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "Authorization: Bearer $access_token",
  "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dados));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resposta = curl_exec($ch);
curl_close($ch);

$pagamento = json_decode($resposta, true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Pagamento via Pix</title>
</head>
<body>
  <h1>💸 Pagamento via Pix</h1>
  <p>Escaneie o QR Code abaixo com seu app bancário:</p>
  <img src="<?php echo $pagamento['point_of_interaction']['transaction_data']['qr_code_base64']; ?>" alt="QR Code Pix">
  <p><strong>Código Pix:</strong> <?php echo $pagamento['point_of_interaction']['transaction_data']['qr_code']; ?></p>
</body>
</html>