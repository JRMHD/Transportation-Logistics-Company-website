<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Free Quote Request</title>
</head>

<body
    style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #f8f9fa; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <h1 style="color: #0056b3; text-align: center; margin-bottom: 20px;">Small's Transportation LLC</h1>

        <h2 style="color: #0056b3; border-bottom: 2px solid #0056b3; padding-bottom: 10px;">A User Requested a Free Quote
            From the Website</h2>

        <div style="background-color: white; padding: 20px; border-radius: 5px; margin-top: 20px;">
            <p><strong style="color: #0056b3;">Name:</strong> {{ $quote->name }}</p>
            <p><strong style="color: #0056b3;">Email:</strong> {{ $quote->email }}</p>
            <p><strong style="color: #0056b3;">Phone:</strong> {{ $quote->phone }}</p>
        </div>

        <p style="text-align: center; margin-top: 20px; font-size: 0.9em; color: #6c757d;">This is an automated message
            from your website free quote form.</p>
    </div>
</body>

</html>
