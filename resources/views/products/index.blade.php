<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: "Montserrat", sans-serif;
            padding: 20px;
        }
        
        h1 {
            color: #333;
        }
        
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        
        a {
            text-decoration: none;
            color: #333;
        }
        
        button {
            font-family: "Montserrat", sans-serif;
            font-size: 14px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <button type="button" onclick="window.location='{{ route('edit-product') }}'">DODAJ PRODUKT</button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nazwa</th>
                <th>Marka</th>
                <th>Cena</th>
                <th>Kategoria</th>
                <th>Dostępność</th>
                <th>Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->short_description }}</td>
                <td>{{ $product->product_price }}</td>
                <td>{{ $product->product_category }}</td>
                <td>{{ $product->product_status }}</td>
                <td>
                    <a href="{{ route('edit-product', $product->id) }}">EDYTUJ</a>
{{--                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <button type="submit">Delete</button>--}}
{{--                    </form>--}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

