<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cantina FCEA | Productos</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f7f5ef;
            color: #263c33;
            font-family: Arial, sans-serif;
        }

        header {
            background: #203e34;
            color: #fffdf7;
            padding: 24px;
        }

        .marca {
            max-width: 900px;
            margin: auto;
            font-size: 20px;
            font-weight: bold;
        }

        main {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 24px;
        }

        .etiqueta {
            color: #916c35;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        h1 {
            margin: 14px 0;
            font-family: Georgia, serif;
            font-size: clamp(36px, 6vw, 56px);
            font-weight: normal;
        }

        .descripcion {
            margin-bottom: 36px;
            color: #68766e;
            line-height: 1.7;
        }

        .menu {
            overflow: hidden;
            background: white;
            border: 1px solid #e1e5dc;
            border-radius: 16px;
            box-shadow: 0 12px 35px rgba(32, 62, 52, 0.06);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            padding: 20px 28px;
            background: #edf1e9;
            color: #526353;
            font-size: 12px;
            letter-spacing: 1px;
            text-align: left;
            text-transform: uppercase;
        }

        td {
            padding: 24px 28px;
            border-bottom: 1px solid #edf0e9;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: #fbfcf8;
        }

        .nombre {
            font-size: 18px;
            font-weight: bold;
        }

        .precio,
        th:last-child {
            text-align: right;
            white-space: nowrap;
        }

        .precio {
            color: #315b42;
            font-size: 18px;
            font-weight: bold;
        }

        .vacio {
            text-align: center;
            color: #68766e;
        }

        footer {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 24px;
            color: #68766e;
            font-size: 13px;
        }

        @media (max-width: 480px) {
            main {
                margin-top: 36px;
                padding: 0 16px;
            }

            th, td {
                padding: 20px 16px;
            }

            .nombre, .precio {
                font-size: 16px;
            }
        }
    </style>
</head>

<<body>
    <main>
        <h1>CANTINA FCEA</h1>

        <div class="menu">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($productos as $producto)
                        <tr>
                            <td class="nombre">{{ $producto->nombre }}</td>
                            <td class="precio">
                                Gs. {{ number_format($producto->precio, 0, ',', '.') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="vacio">
                                No hay productos registrados.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>