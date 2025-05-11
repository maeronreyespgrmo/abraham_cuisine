<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Order Confirmation - Abraham Cuisine</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    body, table, td, a { -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; }
    table, td { mso-table-rspace: 0pt; mso-table-lspace: 0pt; }
    img { -ms-interpolation-mode: bicubic; }
    body { width: 100% !important; height: 100% !important; margin: 0; padding: 0; background-color: #e9ecef; }
    table { border-collapse: collapse !important; }
    a { color: #1a82e2; }
    img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
    .preheader { display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0; }
  </style>
</head>
<body style="background-color: #e9ecef;">
  <!-- Preheader -->
  <div class="preheader">Thanks for your order with Abraham Cuisine!</div>

  <!-- Email Container -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <!-- Logo/Header -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <table width="600" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" style="padding: 36px 24px;">
              <a href="https://abrahamcuisine.com" target="_blank">
                <img src="http://localhost:8000/img/logo.png" alt="Abraham Cuisine" width="120" style="display: block;">
              </a>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <!-- Hero Section -->
    {{-- <tr>
      <td align="center" bgcolor="#e9ecef">
        <table width="600" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#ffffff" style="padding: 36px 24px; font-family: sans-serif; border-top: 3px solid #d4dadf;">
              <h1 style="margin: 0; font-size: 28px;">Thank you for your reservation!</h1>
            </td>
          </tr>
        </table>
      </td>
    </tr> --}}

    <!-- Order Info -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <table width="600" cellpadding="0" cellspacing="0">
          <tr>
            <td bgcolor="#ffffff" style="padding: 24px; font-family: sans-serif; font-size: 16px; line-height: 24px;">
              <p style="margin: 0;">Dear {{ $mailMessage->first_name }} {{ $mailMessage->middle_name }} {{ $mailMessage->last_name }}</p>
              <p>Thank you for choosing <strong>Abraham’s Cuisine!</strong></p>
              <p><strong>
                We are pleased to inform you that your reservation has been approved. Here are the details of your confirmed reservation:  
              </strong></p>
              <p><strong>
                🪑 Reservation Details
              </strong></p>

              <ul>
                @foreach ($mailMessage->food_order as $key=> $item)
                <li>{{$item}}</li>
                @endforeach
              </ul>

              <p><strong>
                💰 Payment Status: Cash
              </strong></p>
        
              <p><strong>
                📍 Location: Abraham’s Cuisine, Brgy. Sampaloc, Pagsanjan, Laguna
              </strong></p>
              
              <p><strong>
                🕐 Please arrive at least 10 minutes before your scheduled time.
              </strong></p>
            </td>
          </tr>

          <!-- View Order Button -->
          {{-- <tr>
            <td bgcolor="#ffffff" align="center" style="padding: 24px;">
              <a href="https://abrahamcuisine.com/order/AC123456" target="_blank" style="display: inline-block; padding: 12px 24px; font-family: sans-serif; font-size: 16px; color: #ffffff; background-color: #1a82e2; border-radius: 6px; text-decoration: none;">
                View Your Reservation
              </a>
            </td>
          </tr> --}}

          <!-- Footer Note -->
          {{-- <tr>
            <td bgcolor="#ffffff" style="padding: 24px; font-family: sans-serif; font-size: 14px; line-height: 20px; color: #666666; border-bottom: 3px solid #d4dadf;">
              <p style="margin: 0;">If you didn't place this order, please contact our support team immediately.</p>
              <p style="margin: 0;">Thank you for choosing Abraham Cuisine!</p>
            </td>
          </tr> --}}
        </table>
      </td>
    </tr>

    <!-- Footer -->
    <tr>
      <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
        <table width="600" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" style="font-family: sans-serif; font-size: 14px; color: #666666;">
              <p style="margin: 0;">&copy; 2025 Abraham Cuisine. All rights reserved.</p>
              <p style="margin: 0;">1234 Delicious Street, Food City, FC 54321</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
