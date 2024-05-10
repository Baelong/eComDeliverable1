<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Appointments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
        }
        li:last-child {
            border-bottom: none;
        }
        .service-details {
            flex: 1;
        }
        .no-services {
            text-align: center;
            color: #999;
            margin-top: 20px;
        }
    </style>
</head>
<body>
     <?php if (!empty($data)) : ?>
        <div class="container">
            <h1>My Services</h1>
            <ul>
                <?php foreach ($data as $index => $service) : ?>
                    <li>
                        <div class="service-details">
                            <p><strong>Name:</strong> <?= $service->name ?></p>
                            <p><strong>Price:</strong>  <?= $service->price ?>
                            <p><strong>Decription:</strong> <?= $service->description ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php else : ?>
        <div class="container">
            <h1>No services</h1>
            <div class="no-services">No services created.</div>
        </div>
    <?php endif; ?>
</body>
</html>
