<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: "Montserrat", sans-serif;
            padding-right: 20px;
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="number"],
        textarea {
            width: 30%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            padding: 20px;
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
    <button onclick="window.location='{{ route('products') }}'">Wszystkie produkty</button>
    <form action="{{ route('edit-product', $product->id) }}" method="POST">
        @csrf
        <br><br>
        <div>
            <label for="product_name">Nazwa produktu:</label><br><br>
            <input type="text" name="product_name" id="product_name" value="{{ $product->product_name }}">
        </div>
        
        
        <div>
            <label for="product_price">Cena produktu:</label><br><br>
            <input type="number" name="product_price" id="product_price" value="{{ $product->product_price }}">
        </div>
        
        <div>
            <label for="product_category">Kategoria:</label><br><br>
            <input type="text" name="product_category" id="product_category" value="{{ $product->product_category }}">
        </div>
        
        <div>
            <label for="product_status">Dostepność:</label><br><br>
            <input type="text" name="product_status" id="product_status" value="{{ $product->product_status }}">
        </div>
        
        <div>
            <label for="short_description">Marka:</label><br><br>
            <textarea name="short_description" id="short_description" rows="2">{{ $product->short_description }}</textarea>
        </div>
        
        <div>
            <label for="long_description">Opis:</label><br><br>
            <textarea name="long_description" id="long_description" rows="6">{{ $product->long_description }}</textarea>
        </div>
        
        <button type="submit">Aktualizuj</button>
    </form>
</body>
</html>
