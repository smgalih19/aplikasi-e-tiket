<!DOCTYPE html>
<html>
<head>
    <title>TIKET PANGANDARAN</title>
    <style>
        h4 {
            margin: 0;
        }
        .margin-top {
            margin-top: 1.25rem;
        }
        .footer {
            font-size: 0.875rem;
            padding: 1rem;
            background-color: rgb(241 245 249);
        }
        table {
            width: 100%;
            border-spacing: 0;
        }
        table.products {
            font-size: 0.875rem;
        }
        table.products tr {
            background-color: rgb(96 165 250);
        }
        table.products th {
            color: #ffffff;
            padding: 0.5rem;
            text-align: left;
        }
        table tr.items {
            background-color: rgb(241 245 249);
        }
        table tr.items td {
            padding: 0.5rem;
        }
        .total {
            text-align: right;
            margin-top: 1rem;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>
                <h4>TIKET PINTU MASUK WISATA PANGANDARAN</h4>
                <h5>Invoice - {{ $transaction->external_id }}</h5>
            </th>
        </tr>
    </table>
    <div>
        <table>
            <tr>
                <td>
                    <div><h4>To :</h4></div>
                    <div>{{ $transaction->name_buyer }}</div>---

                    <div><h4>Telepon</h4></div>
                    <div>{{ $transaction->phone_number }}</div>---
                    
                    <div><h4>E-Mail</h4></div>
                    <div>{{ $transaction->email }}</div>---

                    <div><h4>Visit Date</h4></div>
                    <div>{{ $transaction->date_ticket }}</div>
                </td>
            </tr>
        </table>
    </div>
    <div class="margin-top">
        <table class="products">
            <tr>
                <th>Qty</th>
                <th>Tiket</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
            <tr class="items">
                <td>
                    {{ $transaction->qty }}
                </td>
                <td>
                    {{ $transaction->ticket->name }}
                </td>
                <td>
                    {{ $transaction->ticket->description }}
                </td>
                <td>
                    {{ $transaction->ticket->price }}
                </td>
            </tr>
        </table>
    </div>
    <div class="total">
        <h4>Total: {{ $transaction->amount }}</h4>
    </div>
    <div class="footer margin-top">
        <div>Thank you</div>
        <div>&copy; e-tiket Pangandaran 2024</div>
    </div>
</body>
</html>